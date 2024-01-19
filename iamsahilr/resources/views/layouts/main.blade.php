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
            <div class="cont-right">
                <ul>
                    <li class="resume-li">Professional Summary</li>
                    <li class="resume-li">
                        <p>
                        Proficient in computer science and with a robust technical skill set, I specialize in web development, boasting extensive mastery in PHP, WordPress, JavaScript, HTML5, CSS3, XML and Laravel. My expertise extends to adeptly troubleshooting technical issues, help desk, customer service, service request and ensuring seamless operational efficiency across various platforms. Skillfully managing procedure deveopment, disbursement records and seamlessly integrating advanced technologies such as Laravel, OOP, Tailwind, and Bootstrap, I consistently drive innovation within web development endeavors. I harness my multilingual abilities to facilitate effective communication, fostering collaboration among diverse teams. 
                        </p>
                    </li>
                </ul>

                <ul>
                    <li class="resume-li">Work Experience</li>
                    <li class="resume-li">Web Developer, 2019-2022</li>
                    <li class="resume-li"><em>Crossover Nepal Pvt. Ltd., Nepal</em></li>
                </ul>

                <div>
                    <ul id="skills">
                        <li>
                            HTML5
                            <div class="bar_container">
                            <span class="bar" data-bar='{ "color": "#19f" }'>
                                <span class="pct">95%</span>
                            </span>
                            </div>
                        </li>
                        <li>
                            CSS3
                            <div class="bar_container">
                            <span class="bar" data-bar='{ "color": "#27ae60", "delay": 600 }'>
                                <span class="pct">90%</span>
                            </span>
                            </div>
                        </li>
                        <li>
                            JavaScript
                            <div class="bar_container">
                            <span class="bar" data-bar='{ "color": "#9b59b6", "delay": 1200 }'>
                                <span class="pct">80%</span>
                            </span>
                            </div>
                        </li>
                        
                        <li>
                            PHP
                            <div class="bar_container">
                            <span class="bar" data-bar='{ "color": "#19f" }'>
                                <span class="pct">85%</span>
                            </span>
                            </div>
                        </li>

                        <li>
                            Laravel
                            <div class="bar_container">
                            <span class="bar" data-bar='{ "color": "#9b59b6", "delay": 1200 }'>
                                <span class="pct">80%</span>
                            </span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div id="work" class="home-work-section" style="background-color:green">
        <div class="work-container">
            <div class="prod-container">
                <a href="https://rsahilt.github.io/spaceshooter/">
                    <img class="work-img" src="/images/spaceshooter.png" alt="display picture">
                </a>
            </div>
            <div class="prod-container">
                <a href="https://rsahilt.github.io/timhortons/">
                    <img class="work-img" src="/images/timhortons.png" alt="display picture">
                </a>
            </div>
            <div class="prod-container">
                <a href="https://rsahilt.github.io/tognepal/">
                    <img class="work-img" src="/images/tognepal.png" alt="display picture">
                </a>
            </div>

            <div class="prod-container">
                <a href="https://rsahilt.github.io/iamsahilr/">
                    <img class="work-img" src="/images/iamsahilr.png" alt="display picture">
                </a>
            </div>

            <div class="prod-container">
                <a href="https://rsahilt.github.io/darkangel/">
                    <img class="work-img" src="/images/darkangel.png" alt="display picture">
                </a>
            </div>

        </div>
    </div>

    <!-- script for animation -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>