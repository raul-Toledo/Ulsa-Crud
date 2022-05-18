<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorEjemp extends Controller
{
    public function ejemplo(){
        $arrData = ['edad'=>38, 'nombre'=>'Raul', 'imc' => 30.01];
        return view('ejemplos.ejemRutas', $arrData );
    }

    public function ejemploURL($edad, $nombre, $imc){
        $arrData = ['edad'=>$edad, 'nombre'=>$nombre, 'imc' => $imc];
        return view('ejemplos.ejemRutas', $arrData );
    }

    public function formulario()
    {
        return view('ejemplos.ejemploFormulario');
    }

    public function imc(Request $request){
        $nombre= $request->input('nombre');
        $edad= $request->input('edad');
        $imc= $request->input('imc');
        $arrData = ['edad'=>$edad, 'nombre'=>$nombre, 'imc' => $imc];
        return view('ejemplos.ejemRutas', $arrData );
    }

}
