@extends("layout1")

@section("Contenido")

    <form action="/ped" method="POST">
        @csrf
        <input type="number" name="importe_total"  placeholder="IMPORTE TOTAL" >
        @error('importe_total')
        <br>
        <span style="color: darkred">{{$message}}</span>
        @enderror
        <br><br>
        <input type="number" name="idusu" size="40" placeholder="ID USUARIO">
        @error('idusu')
        <br>
        <span style="color: darkred">{{$message}}</span>
        @enderror
        <br><br>
        <input type="submit" name="submit" value="Guardar">
    </form>
    id_columna: {{$idc}}
@endsection
