@extends('layouts.vista')

@section('contenidoheader')
<!DOCTYPE html>
<html>
<head>
    <title>Bienvenido a Mi Sitio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .navbar {
            background-color: #000;
        }

        .navbar a:hover {
            color: #007bff;
        }
        .carousel-caption-text {
            text-align: center;
            font-size: 24px;
            color: black;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <h1 class="text-center">Bienvenido</h1>
        <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="3000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/img/audi.jpg" class="d-block w-100" alt="Imagen 1">
                </div>
                <div class="carousel-item">
                    <img src="/img/bm.jpg" class="d-block w-100" alt="Imagen 2">
                </div>
                <div class="carousel-item">
                    <img src="/img/wol.jpg" class="d-block w-100" alt="Imagen 3">
                </div>
            </div>
        </div>
        <p class="carousel-caption-text"> 
Los autos europeos son conocidos por su alta calidad, rendimiento y diseño. Ofrecen una variedad de ventajas sobre los autos de otras regiones, como materiales y mano de obra de alta calidad, rendimiento superior, diseño elegante y tecnología avanzada.

Los autos europeos son una excelente opción para los compradores que buscan un auto duradero, confiable y seguro. También son una buena opción para los compradores que buscan un auto que destaque de la multitud.

Sin embargo, los autos europeos también tienen algunos inconvenientes. Pueden ser más caros que los autos de otras regiones y pueden ser más difíciles de reparar.

En resumen, los autos europeos ofrecen una combinación de ventajas y desventajas. Para algunos compradores, las ventajas superan a los inconvenientes, mientras que para otros, los inconvenientes son un factor decisivo.</p>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

@endsection
