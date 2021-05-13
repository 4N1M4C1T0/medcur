<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seguimiento;

class SeguimientoController extends Controller
{
    public function guardar(Request $data1){
        $data1->validate(
            ['informacion'=> 'required',
                'idped' => 'required']
        );
        $seguimiento = new Seguimiento();
        $seguimiento->informacion = $data1["informacion"];
        $seguimiento->idped = $data1["idped"];
        $seguimiento->save();
        return "Seguimiento guardado";

    }

    public function mostrar(){
        $resultado = Seguimiento::all();
        return view("moseg",["resultado"=>$resultado]);
    }

    public function mostrarSeg(int $id)
    {
        $resultado = Seguimiento::where("id", $id)->first();
        return view("actseg", ["resultado" => $resultado]);
    }

    public function actualizar(Request $request)
    {
        $seguimiento = Seguimiento::find($request->id);
        $seguimiento->validate(
            ['informacion'=> 'required',
                'idped' => 'required']
        );
        $seguimiento->informacion = $request->informacion;
        $seguimiento->idped = $request->idped;
        $seguimiento->save();
        return redirect("/moseg");

    }

    public function mostrarSegs(int $id)
    {
        $resultado = Seguimiento::where("id", $id)->first();
        return view("delseg", ["resultado" => $resultado]);
    }

    Public function eliminar(Request $request){
        $usuario=Seguimiento::findOrFail($request->id);
        $usuario->delete();
        return redirect("/moseg");
    }
}
