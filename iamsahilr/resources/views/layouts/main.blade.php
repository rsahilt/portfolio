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
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- script for typing effect -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- @vite('resources/css/app.css') -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @if(session('success'))
        <div class="alert alert-success" id="successMessage">
            {{ session('success') }}
        </div>
        <script>
        setTimeout(function() {
            document.getElementById('successMessage').style.display = 'none';
        }, 3000);
    </script>
    @endif

    <div class="sidenav">
        <a href="#about" style="text-decoration:none"><div class="sidenavdiv"><i class="fa fa-user fa-sidebar"></i></div></a>
        <a href="#resume" style="text-decoration:none"><div class="sidenavdiv"><i class="fa fa-book fa-sidebar"></i></div></a>
        <a href="#work" style="text-decoration:none"><div class="sidenavdiv"><i class="fa fa-laptop fa-sidebar"></i></div></a>
        <a href="#contact" style="text-decoration:none"><div class="sidenavdiv"><i class="fa fa-phone fa-sidebar"></i></div></a>
    </div>

    <div class="container-fluid first" style="background-image: url('{{ asset('images/hero-image.jpeg') }}')">
        <div class="main">
            @include('partials.header')
        </div> <!--main closed-->

        <div class="main-content">
            @yield('contentmain')
        </div> <!--main-content closed-->

        
    </div>
    
    <div id="about" class="home-about-section">

        <div class="display-picture">
            <img src="{{asset('/images/frontdp.jpg')}}" alt="developer image" data-aos="fade-left" data-aos-duration="1000">
        </div>

        <div class="bio" data-aos="fade-left" data-aos-duration="2000">
            <h1 data-aos="fade-left" data-aos-duration="600">Who am I?</h1>

            <span class="job-title" data-aos="fade-left" data-aos-duration="2000">Web Designer/Developer</span>

            <p>I'm an enthusiastic web developer, fueled by a passion for creating digital experiences that truly resonate. My world revolves around lines of code that I mold into visually captivating and functionally seamless websites. I thrive on the ever-evolving nature of technology, constantly seeking out the latest trends and tools to integrate into my projects.</p>

            <p>I see myself not just as a coder but as a problem-solving architect, always eager to tackle challenges and turn them into opportunities for innovation. Design isn't just an afterthought for me, it's a crucial element woven into every project, ensuring not only flawless functionality but also a visually stunning end product.</p>
        </div>

    </div>

    <div class="skills">
        <h1 data-aos="fade-left" data-aos-duration="600">What do I know?</h1>
        <div class="skills-container">
            <div class="skill">
                <span class="skill-name">HTML5</span>
                <div class="skill-bar">
                    <div class="skill-percentage" data-percentage="90"></div>
                </div>
            </div>
            <div class="skill">
                <span class="skill-name">CSS3</span>
                <div class="skill-bar">
                    <div class="skill-percentage" data-percentage="85"></div>
                </div>
            </div>
            <div class="skill">
                <span class="skill-name">JavaScript</span>
                <div class="skill-bar">
                    <div class="skill-percentage" data-percentage="75"></div>
                </div>
            </div>
            <div class="skill">
                <span class="skill-name">React</span>
                <div class="skill-bar">
                    <div class="skill-percentage" data-percentage="70"></div>
                </div>
            </div>
            <div class="skill">
                <span class="skill-name">Node</span>
                <div class="skill-bar">
                    <div class="skill-percentage" data-percentage="65"></div>
                </div>
            </div>
            <div class="skill">
                <span class="skill-name">PHP</span>
                <div class="skill-bar">
                    <div class="skill-percentage" data-percentage="80"></div>
                </div>
            </div>
            <div class="skill">
                <span class="skill-name">Laravel</span>
                <div class="skill-bar">
                    <div class="skill-percentage" data-percentage="70"></div>
                </div>
            </div>
            <div class="skill">
                <span class="skill-name">MySQL</span>
                <div class="skill-bar">
                    <div class="skill-percentage" data-percentage="75"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="works">
        <h1 data-aos="fade-left" data-aos-duration="600">What have I done?</h1>

        <div class="works-container">
            <div class="work-thumbnail" data-aos="fade-in" data-aos-duration="1000">
                <img src="{{asset('/images/sparkincthmb.png')}}" alt="Work 1 Thumbnail">
                <video src="{{asset('/videos/sparkincvid.mov')}}" muted></video>
            </div>

            <div class="work-thumbnail" data-aos="fade-in" data-aos-duration="1000">
                <img src="{{asset('/images/flandthmb.png')}}" alt="Work 1 Thumbnail">
                <video src="{{asset('/videos/flandvid.mp4')}}" muted></video>
            </div>

            <div class="work-thumbnail" data-aos="fade-in" data-aos-duration="1000">
                <img src="{{asset('/images/togthmb.png')}}" alt="Work 1 Thumbnail">
                <video src="{{asset('/videos/togvid.mp4')}}" muted></video>
            </div>

            <div class="work-thumbnail" data-aos="fade-in" data-aos-duration="1000">
                <img src="{{asset('/images/homethmb.png')}}" alt="Work 1 Thumbnail">
                <video src="{{asset('/videos/homeeleganz.mp4')}}" muted></video>
            </div>
        </div>

        <p><a href="#">Checkout my github</a></p>
    </div>


    <div id="contact" class="home-contact-section" style="background-color:green">
        <div class="container-contact">
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d164633.82700442773!2d-97.31764586069454!3d49.85366378443741!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x52ea73fbf91a2b11%3A0x2b2a1afac6b9ca64!2sWinnipeg%2C%20MB!5e0!3m2!1sen!2sca!4v1712686223336!5m2!1sen!2sca" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>            
            </div>
            
            <div class="links-container" style="padding:20px 0 0 20px;">
                <h1>Get in touch</h1>
                <br>
                <em>
                    <p><i class="fa fa-home"></i> &nbsp;Winnipeg, Manitoba, Canada</p>
                    <p><i class="fa fa-envelope"></i> &nbsp; iamsahil.sr@gmail.com</p>
                    <p> <i class="fa fa-phone"></i> &nbsp; +1(204) 952-8407</p>
                </em>

                <br>

                <hr>
                <h2>Feedback</h2>
                <form action="{{ route('send.message') }}" method="POST" novalidate>
                
                 @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="username" placeholder="Your full name">
                    </div>

                    <div class="form-group">
                       <textarea class="form-control" name="message" id="message" cols="70%" rows="5" placeholder="Your message"></textarea>
                    </div>

                    <button type="submit" class="btn btn-success">Send Message</button>
                </form>
            </div>
        </div>
        
    </div>

    <footer><sup>&copy</sup> 2024 Sahil Rajbhandari, Winnipeg, MB, Canada</footer>

    <!-- script for animation -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>