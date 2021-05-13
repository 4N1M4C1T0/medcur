<!DOCTYPE html>
<html lang="es">
<head>
    <title>Usuario</title>
    <meta charset="utf-8" />
    <meta name="description" content="Funciones del usuario">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <style>
        .actual{
            color: #1a202c;
            font-weight: bold;
        }
    </style>
</head>

<body style="background-color: darkgray">
<nav>
    <a href="/" class=={{Request::path()=="/"?"actual":""}}>INICIO</a>
    <a href="/usuario/1" class={{ Request::path()=="/usuario/1"?"actual":"" }}>INGRESAR</a>
    <a href="/mosusu" class={{ Request::path()=="/mosusu"?"actual":"" }}>VER USUARIOS</a>

</nav>
<header>
    <h1>Sistema de usuarios</h1>
</header>
<section>
    @yield("Contenido")
</section>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>

</body>
</html>
