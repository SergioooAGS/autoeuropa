@extends('layouts.vista')

@section('contenidoheader')

<!DOCTYPE html>
<html>
<head>
    <title>Acerca de Nosotros</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .jumbotron {
            background: url('img/mtr.jpeg') center/cover;
            color: #fff;
        }

        .jumbotron h1 {
            font-size: 48px;
        }

        .section-content {
            padding: 50px 0;
        }

        .section-heading {
            font-size: 36px;
        }
    </style>
</head>
<body>
    <div class="jumbotron text-center">
        <h1 class="display-3">Acerca de Nosotros</h1>
        <p class="lead">Descubre más sobre quiénes somos y qué hacemos.</p>
    </div>

    <div class="container section-content">
        <div class="row">
            <div class="col-md-6">
                <h2 class="section-heading">Nuestra Historia</h2>
                <p>
                Las empresas europeas de automóviles han sido pilares de la industria automotriz mundial durante décadas. Destacan fabricantes emblemáticos como Volkswagen, BMW, Mercedes-Benz, y Audi en Alemania, conocidos por su calidad y tecnología avanzada. En Francia, Renault y Peugeot son reconocidos por su diseño y eficiencia. Italia es hogar de Ferrari y Lamborghini, símbolos de lujo y velocidad. Además, empresas como Volvo y Saab en Suecia han sido líderes en seguridad. Europa también es líder en vehículos eléctricos, con Tesla en el Reino Unido y varios fabricantes que ofrecen opciones ecoamigables. Estas compañías contribuyen a la economía europea y a la innovación global en la industria automotriz.
                </p>
            </div>
            <div class="col-md-6">
                <img src="img/audi2.jpg" alt="Nuestra Historia" class="img-fluid">
            </div>
        </div>
    </div>

    <div class="container section-content">
        <div class="row">
            <div class="col-md-6">
                <img src="img/bm2.jpg" alt="Nuestra Misión" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h2 class="section-heading">Nuestra Misión</h2>
    
                <p>Innovación: Desarrollar vehículos que incorporen tecnología de vanguardia y soluciones de movilidad inteligentes para satisfacer las necesidades cambiantes de los consumidores.</p>
                <p>Calidad y Seguridad: Comprometerse a fabricar automóviles de alta calidad y con altos estándares de seguridad para proteger a los conductores y pasajeros.</p>
                <p>Sostenibilidad: Contribuir a la protección del medio ambiente mediante la producción de vehículos más eficientes y la inversión en tecnologías limpias y soluciones de movilidad sostenible.</p>
                <p>Satisfacción del Cliente: Brindar a los clientes experiencias excepcionales a través de la atención al cliente, el servicio postventa y la adaptación a las preferencias del consumidor.</p>
                <p>Liderazgo Global: Competir en el mercado global y mantener una posición destacada en la industria automotriz europea e internacional.</p>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


@endsection
