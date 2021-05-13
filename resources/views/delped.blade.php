@extends("layout1")

@section("Contenido")

    <form method="post" action="/delped">
        @csrf
        <section>

            <label>ID:</label><input type="number" name="id" value="{{$resultado["id"]}}"> <br>

            <input type="submit" name="submit" value="eliminar">

        </section>

    </form>

@endsection
