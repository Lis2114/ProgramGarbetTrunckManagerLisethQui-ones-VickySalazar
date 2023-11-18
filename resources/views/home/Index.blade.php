    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="utf-8">
        <title>Garbage Schedule</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free HTML Templates" name="keywords">
        <meta content="Free HTML Templates" name="description">


        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
            rel="stylesheet">

        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="{{ asset('home/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{ asset('home/css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

    </head>

    <body>
        <!-- Topbar Start -->
        <div class="container-fluid bg-dark">
            <div class="row py-2 px-lg-5">
                <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center text-white">
                        <small><i class="fa fa-phone-alt mr-2"></i>+57 321 676 359</small>
                        <small class="px-3">|</small>
                        <small><i class="fa fa-envelope mr-2"></i>info@example.com</small>
                    </div>
                </div>
                <div class="col-lg-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white px-2" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-white px-2" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-white px-2" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-white px-2" href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-white pl-2" href="">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->


        <!-- Navbar Start -->
        <div class="container-fluid p-0">
            <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-lg-5">
                <a href="index.html" class="navbar-brand ml-lg-3">
                    <h1 class="m-0 display-5 text-uppercase text-primary">
                        <img src="{{ asset('img/gs-logo.png') }}" alt="Garbage Schedule" class="img-logo">Garbage
                        Schedule
                    </h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                    <div class="navbar-nav m-auto py-0">

                    </div>
                    <a href="{{ route('login') }}" class="btn btn-primary py-2 px-4 d-none d-lg-block">Ingresar</a>
                </div>
            </nav>
        </div>
        <!-- Navbar End -->


        <!-- Header Start -->
        <div class="jumbotron jumbotron-fluid mb-5">
            <div class="container text-center py-5">
                <h1 class="text-primary mb-4">Ruta recoleccion de basura </h1>
                <h1 class="text-white display-3 mb-5">Garbage Schedule</h1>
                <div class="mx-auto" style="width: 100%; max-width: 600px;">
                    <div class="input-group">
                        <input type="text" class="form-control border-light" style="padding: 30px;"
                            placeholder="Escoja fecha">
                        <div class="input-group-append">
                            <button class="btn btn-primary px-3">Buscar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->

        <!-- Table -->

        <div class="card-body">


            <table id="example2" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Ruta</th>
                        <th>Barrios</th>
                        <th>Fecha</th>
                        <th>Hora inicio recorrido</th>
                        <th>Hora fin recorrido</th>
                    </tr>
                </thead>
                <tbody>
                    @isset($schedules)
                        @foreach ($schedules as $schedule)
                            <tr>
                                <td>{{ $schedule->route->sector }}</td>
                                <td>{{ $schedule->route->neighborhoods }}</td>
                                <td>{{ $schedule->date }}</td>
                                <td>{{ $schedule->hourExit }}</td>
                                <td>{{ $schedule->hourArrival }}</td>
                            </tr>
                        @endforeach
                    @endisset
                </tbody>
            </table>
        </div>

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5"
            style="border-color: #3E3E4E !important;">
            <div class="row">
                <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                    <p class="m-0 text-white">&copy; <a href="#">Vicky Salazar - Liseth Quiñones </a>. Universidad
                        de Nariño
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        <a href="https://htmlcodex.com"></a>
                        <br> <a href="https://themewagon.com" target="_blank"></a>
                    </p>
                </div>
                <div class="col-lg-6 text-center text-md-right">

                    </ul>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('home/lib/easing/easing.min.js') }}"></script>
        <script src="{{ asset('home/lib/waypoints/waypoints.min.js') }}"></script>
        <script src="{{ asset('home/lib/counterup/counterup.min.js') }}"></script>
        <script src="{{ asset('home/lib/owlcarousel/owl.carousel.min.js') }}"></script>

        <!-- Template Javascript -->
        <script src="{{ asset('js/main.js') }}"></script>

    </body>

    </html>
