@extends("layout1")

@section("Contenido")

    <form method="post" action="/actped">
        @csrf
        <section>
            <label>ID:</label><input type="hidden" name="id" value="{{$resultado["id"]}}"> <br>
            <label>IMPORTE TOTAL: </label><input type="number" name="importe_total" value="{{$resultado["importe_total"]}}"><br>
            <label>ID DE USUARIO:</label><input type="number" name="idusu" value="{{$resultado["idusu"]}}"> <br>
            <input type="submit" name="submit" value="actualizar">

        </section>
    </form>
@endsection
