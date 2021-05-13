@extends("layout2")

@section("Contenido")

    <section>
        @foreach($resultado as $seguimiento)
            <label>INFORMACION: {{$seguimiento["informacion"]}}</label><br>
            <label>ID DE PEDIDO: {{$seguimiento["idped"]}}</label><br>
            <a href="actseg/{{$seguimiento["id"]}}" >Actualizar</a>
            <a href="delseg/{{$seguimiento["id"]}}" >Eliminar</a><br><br>
        @endforeach
    </section>

@endsection
