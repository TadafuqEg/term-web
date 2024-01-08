<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Term</title>
    <link rel="stylesheet" href="{{asset("css/style.css")}}" />
    <link rel="icon" href="{{asset("assets/imgs/TERM fav.png")}}" type="image/x-icon">
    <link rel="preload" as="video" href="{{asset('assets/imgs/desktop-video.mp4')}}">
    <link rel="preload" as="video" href="{{asset('assets/imgs/vid tablet-1.mp4')}}">
    <link rel="preload" as="video" href="{{asset('assets/imgs/vid movile.mp4')}}">
    <link rel="prefetch" as="video" href="https://term.ae/">
    <style>
        #set-height {
            display: block;
            height: 3000px;
            scroll-behavior: smooth;
        }

        #v0 {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
        }

        p {
            font-family: helvetica;
            font-size: 24px;
        }
        .none{
            height: 100vh;
            display: none !important;
        }
        .blok{
            display: block;
        }
        .skip-video{
            position: absolute;
            padding:15px 25px;
            top:87% !important;
            right:70px;
            background:#F85C3D;
            color:#fff;
            border:1px solid #fff;
            z-index: 9999;
            text-decoration: none;
            border-radius:18px;
            font-size:22px;
            font-weight:bold;
        }
        .skip-video:hover{
            background:#fff;
            color:#F85C3D;
            border:1px solid #F85C3D;
        }
        
        @media(max-width:767px){
            .skip-video{
            position: absolute;
            padding:10px 15px;
            top:87% !important;
            right:30px;
            background:#F85C3D;
            color:#fff;
            border:1px solid #fff;
            z-index: 9999;
            text-decoration: none;
            border-radius:18px;
            font-size:18px;
            font-weight:bold;
        }
        }
    </style>
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
        <div id="set-height"><a href="{{route('web.homepage')}}" class="skip-video">Skip Video</a></div>
        <video id="v0" tabindex="0" autobuffer="autobuffer" preload="auto" src="{{asset("assets/imgs/desktop-video.mp4")}}" type="video/mp4" autoplay
            muted>
            
        </video>
        
        <div class="homepage home" id="home">
            <div class="home-back lazy-background" data-src="{{asset("assets/imgs/img20.jpg")}}">
                <div class="nav">
                    <input type="checkbox" id="nav-check">
                    <div class="nav-header">
                      <div class="nav-title">
                        <img src="./assets/imgs/logo.png" />
                      </div>
                    </div>
                    <div class="nav-btn">
                      <label for="nav-check">
                        <img src="./assets/imgs/menu icon.png" />
                      </label>
                    </div>
                    
                    <div class="nav-links">
                        <a href="{{route('web.about')}}">About</a>
                        <a href="{{route('web.services')}}">Services</a>
                        <a href="{{route('web.proficiencies')}}">Proficiencies</a>
                        <a href="{{route('web.contact-us')}}">Contact Us</a>
                        <a href="{{route('web.getquotation')}}">Get Quotation</a>
                    </div>
                </div>
                
                <div class="home-buttons">
                    <div class="slider-wrap">
                        <div class="slide nod1"><a href="{{route('web.about')}}">About</a></div>
                        <div class="slide nod2"><a href="{{route('web.services')}}">Services</a></div>
                        <div class="slide nod3"><a href="{{route('web.proficiencies')}}">Proficiencies</a></div>
                    </div>
                </div>
                <div class="bottm-p">
                    <p class="pic-bt1">Term Information <br />
                        Technology and Elka</p>
                    <p class="pic-bt2">Join Forces to<br />
                        Create a New Era</p>
                </div>
                <!-- pluse button -->
                <div class='paluse-container'>
                <a href="{{route('web.getquotation')}}"><span class='pulse-button'>Quotation</span></a>
                </div>
            </div>
            <div class="home-content">
                <div class="circle-img">
                    <img class="circle" src="./assets/imgs/circle.png" />
                    <div class="information">
                        <p>Term Information<br /> Technology and Elka</p>
                        <p>Join Forces to <br />Create a New Era</p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

<!-- loader script -->
    <script defer>
        var loader = document.getElementById("loader");
        window.addEventListener("load", () => {
            loader.style.display = "none"
           
        })
    </script>
<!-- home buttons script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script defer>
        $(document).ready(function () {

            $(".slider-wrap")
                .append('<span class="prevButton"><img src="./assets/imgs/Vector.png" /></span>')
                .prepend('<span class="nextButton"><img src="./assets/imgs/Vector (1).png" /></i></span>');


            $(".nextButton").click(function () {
                $('.slide').first().appendTo('.slider-wrap');
            });

            $(".prevButton").click(function () {
                $('.slide').last().prependTo('.slider-wrap');
            });

        });
    </script>
    <!-- change video source -->
    <script defer>
        function changeVideoSource() {
            const tabletMediaQuery = window.matchMedia('(max-width: 1025px)'); // Adjust the breakpoint for tablets

            if (tabletMediaQuery.matches) {
                // Tablet screen size, change the video source
                document.getElementById('v0').src = './assets/imgs/vid tablet-1.mp4'; // Replace with tablet video source
            } 
            // Reload the video
            const video = document.getElementById('v0');
            video.load();
        }
        // function changeVideoSource2() {
        //     const tabletMediaQuery = window.matchMedia('(max-width: 767px)'); // Adjust the breakpoint for tablets

        //     if (tabletMediaQuery.matches) {
        //         // Tablet screen size, change the video source
        //         document.getElementById('v0').src = './assets/imgs/vid movile.mp4'; // Replace with tablet video source
        //     } 
        //     // Reload the video
        //     const video = document.getElementById('v0');
        //     video.load();
        // }

        // Call the function initially and listen for resize events
        changeVideoSource();

    </script>
    <script defer>
        function changeVideoSource2() {
            const tabletMediaQuery = window.matchMedia('(max-width: 767px)'); // Adjust the breakpoint for tablets

            if (tabletMediaQuery.matches) {
                // Tablet screen size, change the video source
                document.getElementById('v0').src = './assets/imgs/vid movile.mp4'; // Replace with tablet video source
            } 
            // Reload the video
            const video = document.getElementById('v0');
            video.load();
        }
        

        // Call the function initially and listen for resize events
        changeVideoSource2();

    </script> 
    <!-- video script -->
    <script defer>       
        var vid = document.getElementById('v0');
        var home = document.getElementById("home")
        var set = document.getElementById('set-height')
        vid.play().then(() => {
            speed = 0.1;
        vid.addEventListener('wheel', function(e) {
        if (e.deltaY > 0) {
            vid.currentTime += 0.015;

        } else {
            vid.currentTime -= 0.2;
           
        }
         });
            console.log('done');

        }).catch(error => {
            console.error("Autoplay failed:", error);
        });
       
        vid.addEventListener('ended', playNextVideo, true);
        function playNextVideo(e) {
            vid.classList.add('none');
            set.classList.add('none')
            home.classList.add("blok")
        }
       
    </script>

    <!--lazy-load -->
    <script defer>
        document.addEventListener("DOMContentLoaded", function() {
        let lazyBackgrounds = document.querySelectorAll('.lazy-background');

        if ('IntersectionObserver' in window) {
        let lazyBackgroundObserver = new IntersectionObserver(function(entries, observer) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    let lazyBackground = entry.target;
                    lazyBackground.style.backgroundImage = `url(${lazyBackground.getAttribute('data-src')})`;
                    lazyBackgroundObserver.unobserve(lazyBackground);
                }
            });
        });

        lazyBackgrounds.forEach(function(lazyBackground) {
            lazyBackgroundObserver.observe(lazyBackground);
        });
        } else {
        lazyBackgrounds.forEach(function(lazyBackground) {
            lazyBackground.style.backgroundImage = `url(${lazyBackground.getAttribute('data-src')})`;
        });
        }
        });
    </script>
     
</body>
</html>