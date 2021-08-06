<?php

namespace App\Helpers;

use App\Models\Propietario;
use App\Models\Conductor;

class Helper {

    public static function typeCar($param) {
        $type = (object) array('1' => 'Particular', '2' => 'Publico');
        return $type->{$param};
    }

    public static function getDataPropie($user_id) {
        $dataPropie = Propietario::where('id', $user_id)->first();

        return $dataPropie;
    }

    public static function getDataConduc($user_id) {
        $dataConduc = Conductor::where('id', $user_id)->first();

        return $dataConduc;
    }

    public static function orderForSelectData($param) {
        foreach ($param as $item) {
            $order[$item->id] = $item->pri_nombre . ' ' . $item->seg_nombre . ' ' . $item->apellidos;
        }
        return $order;
    }

    public static function listForSelectPropie() {
        $propietarios = Helper::orderForSelectData(Propietario::all());
        return $propietarios;
    }
    
    public static function listForSelectConduc() {
        $conductores = Helper::orderForSelectData(Conductor::all());
        return $conductores;
    }

}

?>