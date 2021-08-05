<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Propietario;

class PropietarioSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Propietario::create([
            'documento' => '123456789',
            'pri_nombre' => 'carlos',
            'seg_nombre' => 'camilo',
            'apellidos' => 'cardenas rojas',
            'direcion' => 'calle siempre viva',
            'telefono' => '5555555',
            'ciudad' => 'Muy muy lejano',
        ]);
    }

}
