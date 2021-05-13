@extends("layout1")

@section("Contenido")

    <section>
        @foreach($resultado as $pedido)
            <label>IMPORTE_TOTAL: {{$pedido["IMPORTE_TOTAL"]}}</label><br>
            <label>ID DE USUARIO: {{$pedido["idusu"]}}</label><br>
            <a href="actped/{{$pedido["id"]}}" >Actualizar</a>
            <a href="delped/{{$pedido["id"]}}" >Eliminar</a><br><br>
        @endforeach
    </section>

@endsection
