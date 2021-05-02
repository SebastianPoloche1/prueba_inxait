<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $states = array('AMAZONAS', 'ANTIOQUIA', 'ARAUCA', 'ARCHIPIELAGO DE SAN ANDRES', 'ATLÁNTICO', 'BOGOTÁ D.C.', 'BOLIVAR', 'BOYACÁ', 'CALDAS' , 'CAQUETA' , 'CASANARE' , 'CAUCA' , 'CESAR' , 'CHOCO' , 'CORDOBA' , 'CUNDINAMARCA' , 'GUAINIA' , 'GUAVIARE' , 'HUILA' , 'LA GUAJIRA' , 'MAGDALENA' , 'META' , 'NARIÑO' , 'NORTE DE SANTANDER' , 'PUTUMAYO' , 'QUINDIO' , 'RISARALDA' , 'SANTANDER', 'SUCRE', 'TOLIMA', 'VALLE DEL CAUCA', 'VAUPES', 'VICHADA');

        foreach ($states as &$valor) {
            $state = new State();
            $state->name = $valor;
            $state->save();
        }
        
    }
}
