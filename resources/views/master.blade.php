<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/master-style.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('bootstrap/css/fontawesome.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <title>Activity Tracker</title>
    <style>

    </style>
    @yield('internal-style')
</head>

<body>
    <!-- Nav Includes start -->
    @include('layouts.nav')
    <!-- Nav Includes End -->

    <div class="container-wrapper">
        <!-- Content Section start-->
        @yield('site-content')
        <!-- Content Section End-->
    </div>

    <!-- Footer Includes start -->
    @include('layouts.footer')
    <!-- Footer Includes End -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="{{ asset('jquery/attrvalidate.jquery.js')}}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.js')}}"></script>
    <script>
        function toggleMenu(menuClass) {
            const navLinks = document.querySelector(menuClass);
            navLinks.classList.toggle('active');
        }
    </script>

    @yield('internal-script')
</body>

</html>