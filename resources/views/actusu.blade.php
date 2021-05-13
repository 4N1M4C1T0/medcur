@extends("layout")

@section("Contenido")

    <form method="post" action="/actusu">
        @csrf
        <section>
            <label>ID:</label><input type="hidden" name="id" value="{{$resultado["id"]}}"> <br>
            <label>TIPO DE USUARIO:</label><input type="text" name="tipo_usu"  value={{$resultado["tipo_usu"]}}><br>
            <label>NOMBRE:</label><input type="text" name="nombre_usu"  value={{$resultado["nombre_usu"]}}><br>
            <label>EMAIL:</label><input type="email" name="correo" value="{{$resultado["correo"]}}"><br>
            <label>PASSWORD:</label><input type="password" name="contrasenia" value="{{$resultado["contrasenia"]}}"> <br>
            <label>IDENTIFICACION:</label><input type="number" name="dni" value="{{$resultado["identificacion"]}}"> <br>
            <label>DIRECCION:</label> <input type="text" name="direccion" value="{{$resultado["direccion"]}}"> <br>
            <input type="submit" name="submit" value="actualizar">

        </section>

    </form>

@endsection
