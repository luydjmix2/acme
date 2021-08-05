<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vehiculo;

class VehiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vehiculo::create([
        'propietario_id' => '1',
        'conductor_id' => '1',
        'placa' => 'asd123',
        'color' => 'azulado',
        'marca' => 'delorean',
        'tipo' => '1',
        ]);
    }
}
