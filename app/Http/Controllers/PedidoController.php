<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;

class PedidoController extends Controller
{
    public function guardar(Request $data1){
        $data1->validate(
            ['importe_total' => 'required',
                'idped'=> 'required',
                'idusu' => 'required']
        );
        $pedido = new Pedido();
        $pedido->importe_total = $data1["importe_total"];
        $pedido->idped = $data1["idped"];
        $pedido->idusu = $data1["idusu"];
        $pedido->save();
        return "Pedido guardado";

    }

    public function mostrar(){
        $resultado = Pedido::all();
        return view("mosped",["resultado"=>$resultado]);
    }

    public function mostrarPed(int $id)
    {
        $resultado = Pedido::where("id", $id)->first();
        return view("actped", ["resultado" => $resultado]);
    }

    public function actualizar(Request $request)
    {
        $pedido = Pedido::find($request->id);
        $pedido->validate(
            ['importe_total' => 'required',
                'idped'=> 'required',
                'idusu' => 'required']
        );
        $pedido->importe_total = $request->importe_total;
        $pedido->idped = $request->idped;
        $pedido->idusu = $request->idusu;
        $pedido->save();
        return redirect("/mosped");

    }

    public function mostrarPeds(int $id)
    {
        $resultado = Pedido::where("id", $id)->first();
        return view("delped", ["resultado" => $resultado]);
    }

    Public function eliminar(Request $request){
        $usuario=Pedido::findOrFail($request->id);
        $usuario->delete();
        return redirect("/mosped");
    }
}
