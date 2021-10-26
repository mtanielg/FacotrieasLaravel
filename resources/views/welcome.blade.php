<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Web Tecni - @yield('title')</title>

        <!-- CDN de Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    </head>
    <body>
    <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #7203CE">
    <!-- Brand/logo -->
    <a class="navbar-brand" href="#">
        <img src="https://cdn-icons-png.flaticon.com/512/675/675523.png" alt="logo" style="width:40px;">
    </a>

    <!-- Links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="#">Clientes</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Servicios</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Inventario</a>
        </li>
    </ul>
    </nav>

        <div class="container ">
        @yield('content')
        </div>
    </body>
</html>