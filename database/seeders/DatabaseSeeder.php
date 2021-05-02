<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Customer;
use App\Models\State;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        /*  Crea estados con ciudades aleatorias.
            Se debe conservar el mismo valor del $count states en el CityFactory
            para obtener resultados mas realistas 
            $count_states = 32;
            $count_cities = 1112;
            State::factory($count_states)->create();
            City::factory($count_cities )->create(); 
        */
        $this->call(StateSeeder::class);
        $this->call(CitySeeder::class);
        Customer::factory(3)->create();
    }
}
