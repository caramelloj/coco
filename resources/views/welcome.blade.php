@extends('layouts.app')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @section('title')
        COCÒ🌿
    @endsection

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


</head>

<body>
    @section('content')
        <div class="container py-4">
            <h1 class="display-2 text-center">
                COCÒ
            </h1>
            <h1 class="display-5 text-center">
                Velas aromáticas de cera de soja, ecológicas y sostenibles🌿
            </h1>

            <hr>
            <h1 class="display-5 text-center">𝚑𝚊𝚗𝚍𝚖𝚊𝚍𝚎</h1>

            <div class="row">
                <div class="col">
                    <div class="card bg-secondary mb-3" style="max-width: 20rem;">
                        <div class="card-header">¿Quiénes somos?</div>
                        <div class="card-body">
                          <h4 class="card-title">Descripcion sobre el emprendimiento</h4>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                      </div>
                </div>
                <div class="col">
                    <div class="card bg-secondary mb-3" style="max-width: 20rem;">
                        <div class="card-header">Recomendaciones</div>
                        <div class="card-body">
                          <h4 class="card-title">Usos/cuidados/beneficios</h4>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                      </div>
                </div>
                <div class="col">
                    <div class="card bg-secondary mb-3" style="max-width: 20rem;">
                        <div class="card-header">Productos/servicios</div>
                        <div class="card-body">
                            <p class="card-text">Venta de velas de cera de soja, bandejas y refill de envases.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</body>

</html>
