<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function guardar(Request $data)
    {
        $data->validate(
            ['tipo_usu' => 'required',
                'nombre_usu'=> 'required | alpha',
                'correo' => 'required',
                'contrasenia' => 'required | min:4 | max:32',
                'identificacion' => 'required | min:8',
                'direccion' => 'required']
        );
        $usuario = new Usuario();
        $usuario->tipo_usu = $data["tipo_usu"];
        $usuario->nombre_usu = $data["nombre_usu"];
        $usuario->correo = $data["correo"];
        $usuario->contrasenia = $data["contrasenia"];
        $usuario->identificacion = $data["identificacion"];
        $usuario->direccion = $data["direccion"];
        $usuario->save();
        return "Usuario guardada";

    }

    public function mostrar()
    {
        $resultado = Usuario::all();
        return view("mosusu", ["resultado" => $resultado]);
    }

    public function mostrarUsu(int $id)
    {
        $resultado = Usuario::where("id", $id)->first();
        return view("actusu", ["resultado" => $resultado]);
    }

    public function actualizar(Request $request)
    {
        $usuario = Usuario::find($request->id);
        $usuario->validate(
            ['tipo_usu' => 'required',
                'nombre_usu'=> 'required | alpha',
                'correo' => 'required',
                'contrasenia' => 'required | min:4 | max:32',
                'identificacion' => 'required | min:8',
                'direccion' => 'required']
        );
        $usuario->tipo_usu = $request->tipo_usu;
        $usuario->nombre_usu = $request->nombre_usu;
        $usuario->correo = $request->correo;
        $usuario->contrasenia = $request->contrasenia;
        $usuario->identificacion = $request->identificacion;
        $usuario->direccion = $request->direccion;
        $usuario->save();
        return redirect("/mosusu");

    }

    public function mostrarUsua(int $id)
    {
        $resultado = Usuario::where("id", $id)->first();
        return view("delusu", ["resultado" => $resultado]);
    }

    Public function eliminar(Request $request){
        $usuario=Usuario::findOrFail($request->id);
        $usuario->delete();
        return redirect("/mosusu");
    }
}
