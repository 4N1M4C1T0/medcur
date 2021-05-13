@extends("layout")

@section("Contenido")
    <section>
        @foreach($resultado as $usuario)

            <label>TIPO DE USUARIO:  {{$usuario["tipo_usu"]}}</label><br>
            <label>NOMBRE: {{$usuario["nombre_usu"]}}</label><br>
            <label>EMAIL: {{$usuario["correo"]}}</label><br>
            <label>PASSWORD: {{$usuario["contrasenia"]}}</label><br>
            <label>IDENTIFICACION: {{$usuario["identificacion"]}}</label><br>
            <label>DIRECCION: {{$usuario["direccion"]}}</label><br>
            <a href="actusu/{{$usuario["id"]}}" >Actualizar</a>
            <a href="delusu/{{$usuario["id"]}}" >Eliminar</a><br><br>
        @endforeach
    </section>

@endsection
