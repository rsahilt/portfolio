<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sahil Rajbhandari</title>

    <!-- slide in animation js -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@300;400;600&family=Russo+One&display=swap" rel="stylesheet">

    <!-- script for typing effect -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <!-- @vite('resources/css/app.css') -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="container-fluid" style="background-image: url('{{ asset('images/hero-image.jpeg') }}')">
        <div class="main">
            @include('partials.header');
        </div> <!--main closed-->

        <div class="main-content">
            @yield('contentmain')
        </div> <!--main-content closed-->
    </div>
    
    <div id="about" class="home-about-section" style="background-color:blue">
        @yield('contenthome')
    </div>

    <div id="resume" class="home-resume-section" style="background-color:red">
        @yield('contentresume')
    </div>


    <div id="work" class="home-work-section" style="background-color:green">
        @yield('contentabout')
    </div>

    <!-- script for animation -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>