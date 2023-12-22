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
    
    <div id="about" class="home-about-section">
        <div class="image" style="background-color:orange">
    
        </div>

        <div class="bio">
            <h1>Who am I?</h1>
            <span class="job-title">Web Designer/Developer</span>
            <p>I'm an enthusiastic web developer, fueled by a passion for creating digital experiences that truly resonate. My world revolves around lines of code that I mold into visually captivating and functionally seamless websites. I thrive on the ever-evolving nature of technology, constantly seeking out the latest trends and tools to integrate into my projects.</p>

            <p>I see myself not just as a coder but as a problem-solving architect, always eager to tackle challenges and turn them into opportunities for innovation. Design isn't just an afterthought for me—it's a crucial element woven into every project, ensuring not only flawless functionality but also a visually stunning end product.</p>
        </div>
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