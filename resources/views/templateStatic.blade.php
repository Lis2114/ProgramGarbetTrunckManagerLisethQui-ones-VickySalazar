<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recolección De Basura</title>
    <link rel='stylesheet' type='text/css' media='screen' href=''>

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#page-top">
                <img src="{{ asset('img/logo.png') }}" alt="Pet Adoption" width="150">
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#about">Misión</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Qué hacemos?</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">Nuestros animalitos</a></li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')

</body>
