@extends("layout")

@section("Contenido")

    <form method="POST" action="/usu" >
        @csrf
        <label for="tipo_usu">INGRESE USUARIO</label> <br>
        <br><select id="tipo_usu" name="tipo_usu">
            <option value="" selected="selected">- SELECCIONE -</option>
            <option value="transportes">TRANSPORTE</option>
            <option value="cliente">CLIENTE</option>
        </select>
        @error('tipo_usu')
        <br>
        <span style="color: darkred">{{$message}}</span>
        @enderror
        <br><br>
        <input type="text" name="nombre_usu" size="40" placeholder="Nombre">
        @error('nombre_usu')
        <br>
        <span style="color: darkred">{{$message}}</span>
        @enderror
        <br><br>
        <input type="email" name="correo" placeholder="email">
        @error('correo')
        <br>
        <span style="color: darkred">{{$message}}</span>
        @enderror
        <br><br>
        <input type="password" name="contrasenia" placeholder="password">
        @error('contrasenia')
        <br>
        <span style="color: darkred">{{$message}}</span>
        @enderror
        <br><br>
        <input type="number" name="identificacion" placeholder="DNI or RUC">
        @error('identificacion')
        <br>
        <span style="color: darkred">{{$message}}</span>
        @enderror
        <br><br>
        <input type="text" name="direccion" placeholder="Direccion">
        @error('direccion')
        <br>
        <span style="color: darkred">{{$message}}</span>
        @enderror
        <br><br>
        <input type="submit" name="submit" value="Guardar">
    </form>
    id_columna: {{$idc}}
@endsection
