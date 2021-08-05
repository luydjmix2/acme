<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Conductor;

class ConductorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Conductor::create([
            'documento' => '12345678901',
            'pri_nombre' => 'diego',
            'seg_nombre' => 'andres',
            'apellidos' => 'gil palma',
            'direcion' => 'calle sur norte',
            'telefono' => '8888888',
            'ciudad' => 'Muy muy lejano',
        ]);
    }
}
