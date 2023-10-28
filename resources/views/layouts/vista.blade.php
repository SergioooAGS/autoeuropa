
<!DOCTYPE html>
<html>
<head>
    <title>AutoEuropa</title>
    <link rel="stylesheet" href="<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .navbar {
            background-color: #000;
        }

        .navbar a {
            color: #fff;
            transition: color 0.3s;
            padding: 10px;
            padding-top: 40px;

        }

        .navbar a:hover {
            color: #007bff;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg">
        <div class="container"> <!-- Envuelve el contenido de la barra de navegación en un contenedor -->
        <a class="navbar-brand mx-auto mb-4" href="#">AutoEuropa</a>
      <a href="/inicio">Inicio</a>
      <a href="/conversor">Conversor</a>
      <a href="/acerca">Acerca de</a>
      <a href="/singup">Iniciar sesión</a>

    </nav>

    <div class="container mt-4">
    </div>
    @yield('contenidoheader')
</body>
</html>
