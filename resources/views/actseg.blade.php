@extends("layout2")

@section("Contenido")

    <form method="post" action="/actseg">
        @csrf
        <section>
            <label>ID:</label><input type="hidden" name="id" value="{{$resultado["id"]}}"> <br>
            <label>INFORMACION:</label><input type="text" name="informacion" value="{{$resultado["informacion"]}}"> <br>
            <label>ID DE PEDIDO:</label><input type="number" name="idped" value="{{$resultado["idped"]}}"> <br>
            <input type="submit" name="submit" value="actualizar">

        </section>
    </form>
@endsection
