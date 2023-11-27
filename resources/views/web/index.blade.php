<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
</head>

<body>
    <div class="main">
        <div class="loader" id="loader">
            <svg class="ip" viewBox="0 0 256 128" width="256px" height="128px" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <linearGradient id="grad1" x1="0" y1="0" x2="1" y2="0">
                        <stop offset="0%" stop-color="#F85C3D" />
                        <stop offset="33%" stop-color="#F85C3D" />
                        <stop offset="67%" stop-color="#F85C3D" />
                        <stop offset="100%" stop-color="#F85C3D" />
                    </linearGradient>
                    <linearGradient id="grad2" x1="1" y1="0" x2="0" y2="0">
                        <stop offset="0%" stop-color="#F85C3D" />
                        <stop offset="33%" stop-color="#F85C3D" />
                        <stop offset="67%" stop-color="#F85C3D" />
                        <stop offset="100%" stop-color="#F85C3D" />
                    </linearGradient>
                </defs>
                <g fill="none" stroke-linecap="round" stroke-width="16">
                    <g class="ip__track" stroke="#ddd">
                        <path d="M8,64s0-56,60-56,60,112,120,112,60-56,60-56" />
                        <path d="M248,64s0-56-60-56-60,112-120,112S8,64,8,64" />
                    </g>
                    <g stroke-dasharray="180 656">
                        <path class="ip__worm1" stroke="url(#grad1)" stroke-dashoffset="0"
                            d="M8,64s0-56,60-56,60,112,120,112,60-56,60-56" />
                        <path class="ip__worm2" stroke="url(#grad2)" stroke-dashoffset="358"
                            d="M248,64s0-56-60-56-60,112-120,112S8,64,8,64" />
                    </g>
                </g>
            </svg>
        </div>
        <div class="video">
            <div id="v"></div>
            <video class="web-vid" id="v0" tabindex="0" autobuffer="autobuffer" preload="none" src="{{asset('assets/imgs/Term_Vid3.mp4')}}"
                type="video/mp4" autoplay muted>
            </video>
        </div>
        <!-- <iframe title="vimeo-player" src="https://player.vimeo.com/video/884312779?h=a0e7885528" width="640" height="360"
            frameborder="0" allowfullscreen></iframe> -->
        <div class="home homepage" id="home">
            <div class="home-back">
            </div>
            <div class="main-content">
                <nav class="nav">
                    <div class="logo-nav">
                        <img src="/assets/imgs/logo.png" />
                    </div>
                    <div class="nav-btn" id="btn">
                        <img src="/assets/imgs/menu icon.png" onclick="myFunction()" />
                    </div>
                    <ul class="nav-ul nav-ul2 remov" id="nav-ul">
                        <li><a href="{{route('web.about')}}">About</a></li>
                        <li><a href=".{{route('web.services')}}">Services</a></li>
                        <li><a href="{{route('web.proficiencies')}}">Proficiencies</a></li>
                        <li><a href="{{route('web.contact-us')}}">Contact Us</a></li>
                    </ul>
                </nav>
                <div class="circle-img">
                    <img class="circle" src="{{asset("assets/imgs/circle.png")}}" />
                    <div class="information">
                        <p>Tadafuq Information<br /> Technology and Elka</p>
                        <p>Join Forces to <br />Create a New Era</p>
                    </div>
                </div>
                <div class="home-buttons">
                    <div class="slider-wrap">
                        <div class="slide nod1"><a href="{{route('web.about')}}">About</a></div>
                        <div class="slide nod2"><a href=".{{route('web.services')}}">Services</a></div>
                        <div class="slide nod3"><a href="{{route('web.proficiencies')}}">Proficiencies</a></div>
                    </div>
                </div>
                <div class="bottm-p">
                    <p class="pic-bt1">Tadafuq Information <br />
                        Technology and Elka</p>
                    <p class="pic-bt2">Join Forces to<br />
                        Create a New Era</p>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        function myFunction() {
            var btn = document.getElementById("btn")
            var element = document.getElementById("nav-ul");
            btn.addEventListener('click', () => {
                if (element.classList.contains('remov')) {
                    element.classList.remove('remov')
                }
                else {
                    element.classList.add('remov')
                }
                console.log("ahmed")
            })
        }
    </script>
    <script>
        var loader = document.getElementById("loader");
        window.addEventListener("load", () => {
            loader.style.display = "none"
        })
    </script>
    <script>
        function changeVideoSource() {
            const tabletMediaQuery = window.matchMedia('(max-width: 900px)'); // Adjust the breakpoint for tablets

            if (tabletMediaQuery.matches) {
                // Tablet screen size, change the video source
                document.getElementById('v0').src = '/assets/imgs/Tablet.mp4'; // Replace with tablet video source
            } 
            // Reload the video
            const video = document.getElementById('v0');
            video.load();
        }
        function changeVideoSource2() {
            const tabletMediaQuery = window.matchMedia('(max-width:767px)'); // Adjust the breakpoint for tablets

            if (tabletMediaQuery.matches) {
                // Tablet screen size, change the video source
                document.getElementById('v0').src = '/assets/imgs/Mobile Ren 1.mp4'; // Replace with tablet video source
            } 
            // Reload the video
            const video = document.getElementById('v0');
            video.load();
        }

        // Call the function initially and listen for resize events
        changeVideoSource();

        window.addEventListener('resize', changeVideoSource2);
    </script>
    <script>
        // Select the video element
        var vid = document.getElementById('v0');
        var set = document.getElementById("v");
        var home = document.getElementById("home")
        speed = 0.2;
        vid.addEventListener('wheel', function (e) {
            if (e.deltaY > 0) {
                vid.currentTime += 0.1;
            } else {
                vid.currentTime -= 0.1;
            }
        });
        
        vid.addEventListener('ended', playNextVideo, true);
        function playNextVideo(e) {
            vid.classList.add('none');
            set.classList.add('none')
            home.classList.add("blok")
        }
    </script>
    <script>
        $(document).ready(function () {

            $(".slider-wrap")
                .append('<span class="prevButton"><img src="/assets/imgs/Vector.png" /></span>')
                .prepend('<span class="nextButton"><img src="/assets/imgs/Vector (1).png" /></i></span>');


            $(".nextButton").click(function () {
                $('.slide').first().appendTo('.slider-wrap');
            });

            $(".prevButton").click(function () {
                $('.slide').last().prependTo('.slider-wrap');
            });

        });
    </script>

    <script>
        function changeContent() {
            const element1 = document.getElementById("element1");
            const element2 = document.getElementById("element2");

            // Swap the content of the two elements
            const tempContent = element1.innerHTML;
            element1.innerHTML = element2.innerHTML;
            element2.innerHTML = tempContent;

            // Add a class to trigger the transition
            element1.classList.add("animate-content");
            element2.classList.add("animate-content");

            // Remove the class after the transition is complete
            setTimeout(() => {
                element1.classList.remove("animate-content");
                element2.classList.remove("animate-content");
            }, 500); // The duration of the transition in milliseconds (0.5s in this example)
        }

    </script>
    <script>
        function change() {
            const element3 = document.getElementById("element3");
            const element2 = document.getElementById("element2");

            // Swap the content of the two elements
            const tempContent = element3.innerHTML;
            element3.innerHTML = element2.innerHTML;
            element2.innerHTML = tempContent;

            // Add a class to trigger the transition
            element3.classList.add("animate-content");
            element2.classList.add("animate-content");

            // Remove the class after the transition is complete
            setTimeout(() => {
                element3.classList.remove("animate-content");
                element2.classList.remove("animate-content");
            }, 500); // The duration of the transition in milliseconds (0.5s in this example)
        }

    </script>
</body>

</html>