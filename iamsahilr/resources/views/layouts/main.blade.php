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
    <div class="modal fade show d-block" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document" style="width: 100vw; height: 100vh;">
            <div class="modal-content" style="background: transparent; border: none;">
                <div class="modal-body text-center d-flex align-items-center justify-content-center" style="width: 100%; height: 100%;">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" viewBox="0 0 300 300" style="width: 50px; height: 50px;">
                        <path class="circle" stroke="#1C9943" stroke-width="10" fill="#fff" fill-opacity="0" stroke-miterlimit="10" d="M150,47.9c18.4,0,35.4,4.6,51,13.8s28,21.6,37.2,37.2s13.8,32.6,13.8,51s-4.6,35.4-13.8,51s-21.6,28-37.2,37.2 s-32.6,13.8-51,13.8s-35.4-4.6-51-13.8s-28-21.6-37.2-37.2s-13.8-32.6-13.8-51s4.6-35.4,13.8-51s21.6-28,37.2-37.2 S131.7,47.9,150,47.9z M150,238.7c16.2,0,31-4,"/>

                        <path class="tick" cx="0" cy="0" r="1" opacity="1" fill="#1C9943" stroke="" stroke-width="10" d="M208.4,118.6c0.8-0.8,1.2-1.9,1.2-3.3c0-1.4-0.4-2.6-1.2-3.7l-3.7-3.3c-0.8-1.1-1.9-1.6-3.3-1.6 s-2.6,0.4-3.7,1.2l-67,67l-28.4-28.8c-1.1-0.8-2.3-1.2-3.7-1.2c-1.4,0-2.5,0.4-3.3,1.2l-3.7,3.3c-0.8,1.1-1.2,2.3-1.2,3.7 s0.4,2.5,1.2,3.3l35.4,35.8c1.1,1.1,2.3,1.6,3.7,1.6c1.4,0,2.5-0.5,3.3-1.6L208.4,118.6z"/>
                    </svg>
                    <p class="mt-3 success-msg">Your message has been sent successfully.</p>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#successModal').modal({
                backdrop: 'static',
                keyboard: false
            });
            $('#successModal').modal('show');
            setTimeout(function() {
                $('#successModal').modal('hide');
            }, 3000);
        });
    </script>
@endif
    
    <div class="fixed-links"></div>

    <svg class="github-fixed" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" fill="#b6bed2" viewBox="0 0 24 24">
        <path d="M10.9,2.1c-4.6,0.5-8.3,4.2-8.8,8.7c-0.5,4.7,2.2,8.9,6.3,10.5C8.7,21.4,9,21.2,9,20.8v-1.6c0,0-0.4,0.1-0.9,0.1 c-1.4,0-2-1.2-2.1-1.9c-0.1-0.4-0.3-0.7-0.6-1C5.1,16.3,5,16.3,5,16.2C5,16,5.3,16,5.4,16c0.6,0,1.1,0.7,1.3,1c0.5,0.8,1.1,1,1.4,1 c0.4,0,0.7-0.1,0.9-0.2c0.1-0.7,0.4-1.4,1-1.8c-2.3-0.5-4-1.8-4-4c0-1.1,0.5-2.2,1.2-3C7.1,8.8,7,8.3,7,7.6C7,7.2,7,6.6,7.3,6 c0,0,1.4,0,2.8,1.3C10.6,7.1,11.3,7,12,7s1.4,0.1,2,0.3C15.3,6,16.8,6,16.8,6C17,6.6,17,7.2,17,7.6c0,0.8-0.1,1.2-0.2,1.4 c0.7,0.8,1.2,1.8,1.2,3c0,2.2-1.7,3.5-4,4c0.6,0.5,1,1.4,1,2.3v2.6c0,0.3,0.3,0.6,0.7,0.5c3.7-1.5,6.3-5.1,6.3-9.3 C22,6.1,16.9,1.4,10.9,2.1z"></path>
    </svg>

    <svg class="fb-fixed" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" fill="#b6bed2" viewBox="0 0 24 24">
        <path d="M12,2C6.477,2,2,6.477,2,12c0,5.013,3.693,9.153,8.505,9.876V14.65H8.031v-2.629h2.474v-1.749 c0-2.896,1.411-4.167,3.818-4.167c1.153,0,1.762,0.085,2.051,0.124v2.294h-1.642c-1.022,0-1.379,0.969-1.379,2.061v1.437h2.995 l-0.406,2.629h-2.588v7.247C18.235,21.236,22,17.062,22,12C22,6.477,17.523,2,12,2z"></path>
    </svg>

    <svg class="insta-fixed" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" fill="#b6bed2" viewBox="0 0 30 30">
        <path d="M 9.9980469 3 C 6.1390469 3 3 6.1419531 3 10.001953 L 3 20.001953 C 3 23.860953 6.1419531 27 10.001953 27 L 20.001953 27 C 23.860953 27 27 23.858047 27 19.998047 L 27 9.9980469 C 27 6.1390469 23.858047 3 19.998047 3 L 9.9980469 3 z M 22 7 C 22.552 7 23 7.448 23 8 C 23 8.552 22.552 9 22 9 C 21.448 9 21 8.552 21 8 C 21 7.448 21.448 7 22 7 z M 15 9 C 18.309 9 21 11.691 21 15 C 21 18.309 18.309 21 15 21 C 11.691 21 9 18.309 9 15 C 9 11.691 11.691 9 15 9 z M 15 11 A 4 4 0 0 0 11 15 A 4 4 0 0 0 15 19 A 4 4 0 0 0 19 15 A 4 4 0 0 0 15 11 z"></path>
    </svg>

    <svg class="linkedin-fixed" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" fill="#b6bed2" viewBox="0 0 48 48">
        <path d="M36.5,6h-25C8.468,6,6,8.468,6,11.5v25c0,3.032,2.468,5.5,5.5,5.5h25c3.032,0,5.5-2.468,5.5-5.5v-25	C42,8.468,39.532,6,36.5,6z M18,34c0,0.553-0.447,1-1,1h-3c-0.553,0-1-0.447-1-1V21c0-0.553,0.447-1,1-1h3c0.553,0,1,0.447,1,1V34z M15.5,18c-1.381,0-2.5-1.119-2.5-2.5c0-1.381,1.119-2.5,2.5-2.5s2.5,1.119,2.5,2.5C18,16.881,16.881,18,15.5,18z M35,34	c0,0.553-0.447,1-1,1h-3c-0.553,0-1-0.447-1-1v-7.5c0-1.379-1.121-2.5-2.5-2.5S25,25.121,25,26.5V34c0,0.553-0.447,1-1,1h-3	c-0.553,0-1-0.447-1-1V21c0-0.553,0.447-1,1-1h3c0.553,0,1,0.447,1,1v0.541C26.063,20.586,27.462,20,29,20c3.309,0,6,2.691,6,6V34z"></path>
    </svg>

   

    <!-- style="background-image: url('{{ asset('images/hero-image.jpeg') }}')" -->
    <div class="container-fluid first">
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

            <span class="job-title" data-aos="fade-left" data-aos-duration="2000">Web Designer & Developer</span>

            <p>I'm an enthusiastic web developer, fueled by a passion for creating digital experiences that truly resonate. My world revolves around lines of code that I mold into visually captivating and functionally seamless websites. I thrive on the ever-evolving nature of technology, constantly seeking out the latest trends and tools to integrate into my projects.</p>

            <p>I see myself not just as a coder but as a problem-solving architect, always eager to tackle challenges and turn them into opportunities for innovation. Design isn't just an afterthought for me, it's a crucial element woven into every project, ensuring not only flawless functionality but also a visually stunning end product.</p>
        </div>

    </div>

    <div class="skills">
        <h1 data-aos="fade-left" data-aos-duration="600">What do I know?</h1>
        <div class="skills-container">
            <div class="skill" data-aos="fade-left" data-aos-duration="100">
                <span class="skill-name">HTML5</span>
                <div class="skill-bar">
                    <div class="skill-percentage" data-percentage="98"></div>
                </div>
            </div>
            <div class="skill" data-aos="fade-left" data-aos-duration="300">
                <span class="skill-name">CSS3</span>
                <div class="skill-bar">
                    <div class="skill-percentage" data-percentage="95"></div>
                </div>
            </div>
            <div class="skill" data-aos="fade-left" data-aos-duration="500">
                <span class="skill-name">JavaScript</span>
                <div class="skill-bar">
                    <div class="skill-percentage" data-percentage="90"></div>
                </div>
            </div>
            <div class="skill" data-aos="fade-left" data-aos-duration="700">
                <span class="skill-name">React</span>
                <div class="skill-bar">
                    <div class="skill-percentage" data-percentage="85"></div>
                </div>
            </div>
            <div class="skill" data-aos="fade-left" data-aos-duration="900">
                <span class="skill-name">Node</span>
                <div class="skill-bar">
                    <div class="skill-percentage" data-percentage="70"></div>
                </div>
            </div>
            <div class="skill" data-aos="fade-left" data-aos-duration="1100">
                <span class="skill-name">PHP</span>
                <div class="skill-bar">
                    <div class="skill-percentage" data-percentage="90"></div>
                </div>
            </div>
            <div class="skill" data-aos="fade-left" data-aos-duration="1300">
                <span class="skill-name">Laravel</span>
                <div class="skill-bar">
                    <div class="skill-percentage" data-percentage="90"></div>
                </div>
            </div>
            <div class="skill" data-aos="fade-left" data-aos-duration="1500">
                <span class="skill-name">MySQL</span>
                <div class="skill-bar">
                    <div class="skill-percentage" data-percentage="80"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="works">
        <h1 data-aos="fade-left" data-aos-duration="600">What have I done?</h1>

        <div class="works-container">
            <div class="work-thumbnail" data-aos="fade-left" data-aos-duration="1000">
                <img src="{{asset('/images/sparkincthmb.png')}}" alt="Work 1 Thumbnail">
                <video src="{{asset('/videos/sparkincvid.mov')}}" muted></video>
            </div>

            <div class="work-thumbnail" data-aos="fade-left" data-aos-duration="1000">
                <img src="{{asset('/images/flandthmb.png')}}" alt="Work 1 Thumbnail">
                <video src="{{asset('/videos/flandvid.mp4')}}" muted></video>
            </div>

            <div class="work-thumbnail" data-aos="fade-left" data-aos-duration="1000">
                <img src="{{asset('/images/togthmb.png')}}" alt="Work 1 Thumbnail">
                <video src="{{asset('/videos/togvid.mp4')}}" muted></video>
            </div>

            <div class="work-thumbnail" data-aos="fade-left" data-aos-duration="1000">
                <img src="{{asset('/images/homethmb.png')}}" alt="Work 1 Thumbnail">
                <video src="{{asset('/videos/homeeleganz.mp4')}}" muted></video>
            </div>
        </div>

        <p data-aos="fade-left" data-aos-duration="1000"><a href="https://github.com/rsahilt">Checkout my github</a></p>
    </div>


    <div id="contact" class="home-contact-section">
        <div class="container-contact">
            <div class="links-container">
                <h2 data-aos="fade-left" data-aos-duration="600">Get in touch</h2>
                <form action="{{ route('send.message') }}" method="POST" novalidate>
                
                 @csrf
                    <div class="form-group" data-aos="fade-left" data-aos-duration="1000">
                        <input style="border-radius:0" type="text" class="form-control" id="name" name="username" placeholder="Your full name">
                    </div>

                    <div class="form-group" data-aos="fade-left" data-aos-duration="1500">
                       <textarea  style="border-radius:0" class="form-control" name="message" id="message" cols="70%" rows="5" placeholder="Your message"></textarea>
                    </div>

                    <button data-aos="fade-left" data-aos-duration="1500" style="border-radius:0" type="submit" class="btn btn-success">Send Message</button>
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