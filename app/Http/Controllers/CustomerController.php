<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\State;
use App\Models\City;
use App\Models\Winner;

class CustomerController extends Controller
{
    function customer(){
        if (session()->has('LoggedUser')) {
            return redirect('/admin/dashboard');
        } else {
            $states_info = State::all();
            return view('home', [
                'states' => $states_info
            ]);
        }
    }

    function consultCities(Request $request){
        $all_cities = [];
        if ($request->input('state') <= 33) {
            $cities = City::where('state_id','=', $request->input('state'))->get();
            foreach ($cities as $city) {
                $info_cities = [
                    "name" => $city->name,
                    "id" => $city->id
                ];
                $all_cities[] = $info_cities;
            }
            return $all_cities;
        } else {
            return $all_cities;
        }
    }

    function saveCustomer(Request $request){
        $request->validate([
            'name'=>'required|alpha',
            'lastname'=>'required|alpha',
            'personal_id'=>'required|unique:customers|integer',
            'state'=>'required',
            'city'=>'required',
            'phone'=>'required|integer',
            'email'=>'required|email|unique:customers|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
            'habeas_data'=>'required'
        ]);
        $customer_state = State::where('id','=', $request->input('state'))->first();
        $customer_city = City::where('id','=', $request->input('city'))->first();
        $costumer = new Customer;
        $costumer->name = $request->name;
        $costumer->lastname = $request->lastname;
        $costumer->personal_id = $request->personal_id;
        $costumer->state = $customer_state->name;
        $costumer->city = $customer_city->name;
        $costumer->phone = $request->phone;
        $costumer->email = $request->email;
        $costumer->habeas_data = true;
        $save = $costumer->save();
        if ($save) {
            return back()->with('success','Tu usuario ha sido registrado con exito.');
        } else {
            return back()->with('fail','Ha ocurrido un error inesperado, por favor intentalo mas tarde.');
        }  
    }

    function checkCustomer(){
        return view('customer.check');
    }

    function consultCustomer(Request $request){
        $request->validate([
            'personal_id'=>'required|integer',
        ]);
        $costumer_count = Customer::count();
        $min_customers_registered = 5;   
        if ( $costumer_count >= $min_customers_registered) {
            $winner_info = Customer::where('personal_id','=', $request->personal_id)->first();
            if ($winner_info) {
                $is_won = $winner_info->name;
                if ($winner_info->won == 1) {
                    return back()->with('success','Eres un feliz ganador');
                } else {
                    return back()->with('success','Sigue intentando');
                } 
            } else {
                return back()->with('success','No te encuentras registrado');
            }
        } else {
            return back()->with('success','Aun no se han generado ganadores');
        }
    }
}
