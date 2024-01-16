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

    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- @vite('resources/css/app.css') -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="container-fluid" style="background-image: url('{{ asset('images/hero-image.jpeg') }}')">
        <div class="main">
            @include('partials.header')
        </div> <!--main closed-->

        <div class="main-content">
            @yield('contentmain')
        </div> <!--main-content closed-->
    </div>
    
    <div id="about" class="home-about-section">
        <div class="image">
            <img src="/images/photo1.png" alt="display picture">
        </div>

        <div class="bio" data-aos="fade-in" data-aos-duration="1000">
            <h1>Who am I?</h1>

            <span class="job-title">Web Designer/Developer</span>

            <p>I'm an enthusiastic web developer, fueled by a passion for creating digital experiences that truly resonate. My world revolves around lines of code that I mold into visually captivating and functionally seamless websites. I thrive on the ever-evolving nature of technology, constantly seeking out the latest trends and tools to integrate into my projects.</p>

            <p >I see myself not just as a coder but as a problem-solving architect, always eager to tackle challenges and turn them into opportunities for innovation. Design isn't just an afterthought for me, it's a crucial element woven into every project, ensuring not only flawless functionality but also a visually stunning end product.</p>
        </div>
    </div>

    <div id="resume" class="home-resume-section" style="background-color:#e7ebee">
        <div class="resume-header">
            <div class="myname">
                <h1>Sahil Rajbhandari</h1>
            </div>
            <div class="address">
                <p><i class="fa fa-home"></i> &nbsp; 304 - 630 Guelph Street</p>
                <p><i class="fa fa-phone"></i> &nbsp; +1(204) 952-8407</p>
                <p><i class="fa fa-envelope"></i> &nbsp; srajbhandari63@gmail.com</p>
            </div>
        </div>
        <div class="resume-content">
            <div class="cont-left">
                <ul>
                    <li class="resume-li">Education</li>
                    <li class="resume-li">Post Graduate in Web Developement | 2023</li>
                    <li class="resume-li">The University of Winnipeg</li>
                    <li class="resume-li">Winnipeg, Manitoba, Canada</li>
                    <br>
                    <li class="resume-li">Bachelors' of Science (Honours) Computing | 2019</li>
                    <li class="resume-li">The University of Northampton</li>
                    <li class="resume-li">Northampton, United Kingdom</li>
                </ul>

                <ul>
                    <li class="resume-li">Key Skills</li>
                    <li class="resume-li bullets">HTML5</li>
                    <li class="resume-li bullets">CSS3</li>
                    <li class="resume-li bullets">JavaScript</li>
                    <li class="resume-li bullets">PHP</li>
                    <li class="resume-li bullets">Laravel</li>
                    <li class="resume-li bullets">MySQL</li>
                    <li class="resume-li bullets">Git</li>
                    <li class="resume-li bullets">Wordpress</li>
                    <li class="resume-li bullets">Bootstrap</li>
                    <li class="resume-li bullets">Tailwind</li>
                    <li class="resume-li bullets">SEO</li>
                </ul>
            </div>
            <div class="cont-right"></div>
        </div>
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