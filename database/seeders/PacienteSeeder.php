<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PacienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pacientes')->insert([
            [
                'nombres' => 'Rene Humberto',
                'apellidos' => 'Valle Velasquez',
                'edad' => '30',
                'sexo' => 'Marculino',
                'dni' => '0801199721489',
                'tipo_sangre' => 'O-',
                'telefono' => '33443599',
                'correo' => 'rene@samotechnologies.com',
                'direccion' => 'col. los llanos',
                'created_at'=>date('y-m-d H:i:s'),
                'updated_at'=>date('y-m-d H:i:s')

            ],
            [
                'nombres' => 'Alejandra Maria',
                'apellidos' => 'Rodriguez Mairena',
                'edad' => '28',
                'sexo' => 'Femenino',
                'dni' => '0801199408317',
                'tipo_sangre' => 'O+',
                'telefono' => '95632551',
                'correo' => 'aleknup@yahoo.com',
                'direccion' => 'col. las palmas',
                'created_at'=> date('y-m-d H:i:s'),
                'updated_at'=> date('y-m-d H:i:s')
            ]
        ]);
    }
}
