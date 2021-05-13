@extends("layout2")

@section("Contenido")

    <form action="/seg" method="POST">
        @csrf
        <input type="text" name="informacion" placeholder="INFORMACION">
        @error('informacion')
        <br>
        <span style="color: darkred">{{$message}}</span>
        @enderror
        <br><br>
        <input type="number" name="idped" size="40" placeholder="ID PEDIDO">
        @error('idped')
        <br>
        <span style="color: darkred">{{$message}}</span>
        @enderror
        <br><br>
        <input type="submit" name="submit" value="Guardar">
    </form>
    id_columna: {{$idc}}
@endsection
