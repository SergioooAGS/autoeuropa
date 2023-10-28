@extends('layouts.vista')

@section('contenidoheader')

<!DOCTYPE html>
<html>
<head>
    <title>Conversor de Pesos a Euros</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    </style>
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Conversor de Pesos a Euros</h1>
        <div class="form-group">
            <input type="number" id="pesosInput" class="form-control" placeholder="Ingresa una cantidad en pesos">
        </div>
        <div class="form-group">
            <button class="btn btn-primary" onclick="convertir()">Convertir</button>
        </div>
        <div id="resultado" class="mt-3"></div>
    </div>

    <script>
        function convertir() {
            const pesosInput = document.getElementById('pesosInput');
            const resultadoDiv = document.getElementById('resultado');

            const pesos = parseFloat(pesosInput.value);
            if (isNaN(pesos)) {
                resultadoDiv.innerHTML = "Ingresa una cantidad en pesos para continuar";
                return;
            }

            const tasaConversion = 19.14;
            const euros = (pesos / tasaConversion).toFixed(2);
            resultadoDiv.innerHTML = `${pesos} Pesos son ${euros} Euros.`;
        }
    </script>
</body>
</html>


@endsection
