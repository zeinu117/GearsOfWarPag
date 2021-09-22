<!doctype html>
<html lang="en">

<head>
    <title> @yield('titulo')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}">
    </head>

<body class="fondo">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #7b0204">
                    <a class="navbar-brand" href="/gearsOfWar"><img src="{{ asset('img/home.png')}}" alt="" width="80xp" height="50xp"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <li class="nav-item active">
                                <a class="nav-link" href="/juego/uno">Gears OF War 1 <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="/juego/dos">Gears OF War 2</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="/juego/tres">Gears OF War 3</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="/juego/cuatro">Gears OF War 4</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="/juego/cinco">Gears OF War 5</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="/">Salir</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <p>
                    @yield('contenido')
                </p>
            </div>
        </div>
    </div>
    <div class="container-fluid fondo2 mt-4" style="background-color: #7b0204;">
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <!-- Footer -->
                <footer class=" text-center text-white">
                    <!-- Grid container -->
                    <div class="container p-2">
                        <!-- Section: Social media -->
                        <section class="mb-4">
                        <!-- Facebook -->
                        <a class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com/Zein117/" role="button"
                            ><i class="fab fa-facebook-f"></i
                        ></a>

                        <!-- Twitter -->
                        <a class="btn btn-outline-light btn-floating m-1" href="https://twitter.com/Zein117" role="button"
                            ><i class="fab fa-twitter"></i
                        ></a>

                        <!-- Google -->
                        <a class="btn btn-outline-light btn-floating m-1" href="./index.php" role="button"
                            ><i class="fab fa-google"></i
                        ></a>

                        <!-- Instagram -->
                        <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/zein_takumi/" role="button"
                            ><i class="fab fa-instagram"></i
                        ></a>

                        <!-- Linkedin -->
                        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                            ><i class="fab fa-linkedin-in"></i
                        ></a>

                        <!-- Github -->
                        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                            ><i class="fab fa-github"></i
                        ></a>
                        </section>
                        <!-- Section: Social media -->
                    </div>
                    <!-- Grid container -->
                    <!-- Section: Links -->
                    <section class="">
                        <!--Grid row-->
                        <div class="row">
                            <!--Grid column-->
                            <div class="col-md-2"></div>
                            <div class="col">
                            <h4 class="text-uppercase text-left">Conocenos</4>
                            <br>
                            <ul class="list-unstyled mb-1 mt-2">
                                <li>
                                <h6><a href="#!" class="text-white">Nosotros</a></h6>
                                </li>
                                <li>
                                <h6><a href="#!" class="text-white">Contacto</a></h6>
                                </li>
                                <li>
                                <h6><a href="#!" class="text-white">Mapa del sitio</a></h6>
                                </li>
                                <li>
                                <h6><a href="#!" class="text-white">Blog</a></h6>
                                </li>
                            </ul>
                            </div>

                            <div class="col"></div>
                            <!--Grid column-->
                        </div>
                    </section>

                    <!-- Copyright -->
                    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                        © 2021 Copyright:
                        <a class="text-white" href="https://GearsOfWar.com/">GearsOfWar.com</a>
                    </div>
                    <!-- Copyright -->
                </footer>
                <!-- Footer -->
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
