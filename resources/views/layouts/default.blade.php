<!DOCTYPE html>
<html lang="utf-8">

<head>
    <meta charset="utf-8">
    <title>{{ $pageName ?? 'Alceu Mudanças e soluções logisticas' }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <link href="{{ mix('img/favicon.ico') }}" rel="icon">

    <!-- Fontes Web Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icones -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Bibliotecas -->
    <link href="{{ mix('lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{ mix('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Bootstrap template -->
    <link href="{{ mix('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- CSS template -->
    <link href="{{ mix('css/style.css')}}" rel="stylesheet">
    @stack('scripts-css')
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Carregando...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
        @include('layouts.components.navbar')
    <!-- Navbar End -->


    <!-- Page Header Start -->
        @include('layouts.components.header')
    <!-- Page Header End -->

        @yield('content')

    <!-- Footer Inicio -->
        @include('layouts.components.footer')
    <!-- Footer Fim -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ mix('lib/wow/wow.min.js') }}"></script>
    <script src="{{ mix('lib/easing/easing.min.js') }}"></script>
    <script src="{{ mix('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ mix('lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ mix('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    @stack('scripts-js')
    <!-- Template Javascript -->
    <script src="{{ mix('js/main.js') }}"></script>
</body>

</html>