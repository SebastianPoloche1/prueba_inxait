<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Customer;
use App\Exports\CustomersExport;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;


class AdminController extends Controller
{
    function loginAdmin(){
        if (session()->has('LoggedUser')) {
            return redirect('/admin/dashboard');
        } else {
            return view('admin.login');
        }
    }
    
    function registerAdmin(){
        if (session()->has('LoggedUser')) {
            return redirect('/admin/dashboard');
        } else {
            return view('admin.register');
        }
    }

    function saveAdmin(Request $request){
        $request->validate([
            'name'=>'required|alpha',
            'email'=>'required|email|unique:admins|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
            'password'=>'required|min:8',
            'confirm_password'=>'required|same:password'
        ]);
        $admin = new Admin;
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $save = $admin->save();
        if ($save) {
            return back()->with('success','Se ha creado satisfactoriamente su usuario.');
        } else {
            return back()->with('fail','Ha ocurrido un error inesperado, por favor intente mas tarde');
        }
    }

    function checkAdmin(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:8'
        ]);
        $admin_info = Admin::where('email','=', $request->email)->first();
        if (!$admin_info) {
            return back()->with('fail','No se ha encontrado una cuenta asociada a este correo');
        } else {
            if(Hash::check($request->password, $admin_info->password)){
                $request->session()->put('LoggedUser', $admin_info->id);
                return redirect('admin/dashboard');
            } else {
                return back()->with('fail','La contraseña es incorrecta');
            }
        }
    }

    function logoutAdmin(){
        if (session()->has('LoggedUser')) {
            session()->pull('LoggedUser');
            return redirect('/admin/login');
        }
    }

    function dashboardAdmin(){
        $admin_info = Admin::where('id','=', session('LoggedUser'))->first();
        $customers = Customer::all();
        return view('admin.dashboard', [
            'admin_info' => $admin_info,
            'customers'   => $customers,
            'won' => null
        ]);
    }

    function dashboardWon(){
        function generateWinner($customers){
            $id_customer = rand(1, $customers);
            $customer_info = Customer::find($id_customer);
            if ($customer_info->won == 1) {
                $id_customer = generateWinner($customers);
                return $id_customer;
            } else {
                return $id_customer;
            }
        }
        $admin_info = Admin::where('id','=', session('LoggedUser'))->first();
        $customers_count = Customer::count();
        $customer_winners = Customer::where('won', 1)->count();
        $min_customers_registered = 5;
        if ( $customer_winners >= $customers_count) {
            $message = 'much';
        } else {
            if ($customers_count >= $min_customers_registered) {
                $winner_id = generateWinner($customers_count);
                $customer_info = Customer::find($winner_id);
                $customer_info->won = 1;
                $save_winner = $customer_info->save();
                if ($save_winner) {
                    $message = 'active';
                } else {
                    $message = 'error';
                }
            } else {
                $message = 'few';
            }
        }
        $customers = Customer::all();
        return view('admin.dashboard', [
            'admin_info' => $admin_info,
            'customers'   => $customers,
            'won' => $message
        ]);
        
    }

    function exportCustomer(){
        return Excel::download(new CustomersExport, 'customers.xlsx');
    }
}
