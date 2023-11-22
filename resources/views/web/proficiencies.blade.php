<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>term</title>
    <link rel="stylesheet" href="{{asset("css/about.css")}}">

    <style>
        @media(max-width:990px) {

            .nav-ul {
                visibility: hidden;
            }

            .nav-ul2 {
                visibility: visible;
                width: 100%;
                height: auto;
                padding-bottom: 100px;
                background-color: black;
                display: flex;
                flex-direction: column;
                position: absolute;
                left: 0;
                top: 150px;
                justify-content: center;
                align-self: center;
                z-index: 99999;
            }

            .nav-ul li {
                width: 100%;
                text-align: center;
                margin-top: 10px;
                border: 0;
                background-color: none;
            }

            .about-nav .nav-ul li {
                height: 80px !important;
            }

            .nav-ul li a {
                font-size: 40px !important;

                font-weight: bold;
            }

            .active {
                background-color: transparent !important;
                border: none !important;
            }

            .logo-nav {
                position: absolute;
                left: 80px;
                top: 50px;
            }

            .logo-nav img {
                transform: scale(1);
            }

            .nav-btn {
                display: block;
                position: absolute;
                right: 80px;
                top: 70px;
                transform: scale(1.2);
            }

            .remov {
                visibility: hidden;
            }

            .slider {
                height: 50%;
                padding-top: 50px;
            }

            .mini-dots2 {
                position: absolute;
                width: 40% !important;
                left: 30%;
            }

            .about-arrow {
                position: absolute;
                top: 73%;
                left: 20%;
                width: 60%;
            }

            .bottom-items .bottom-img img {
                width: 32%;
                height: 50%;
                margin-top: 15px;
            }

            .bottom-items .bottom-img .aa {
                top: 43%;
            }

            .ab-h3,
            .ab-p {
                font-size: 50px !important;
            }

            .about-mp,
            .about-fp {
                font-size: 25px !important;
            }

            .two {
                margin-top: -15px !important;
            }

            .bottom-items .bottom-img .aa {
                top: 36% !important;
                font-size: 28px;
            }

            .about-arrow {
                top: 64%;
            }
        }

        @media(max-width:600px) {
            .about-nav {
                height: 100px;
            }

            .nav-ul {
                visibility: hidden;
            }

            .nav-ul2 {
                visibility: visible;
                width: 100%;
                height: auto;
                padding-bottom: 100px;
                background-color: black;
                display: flex;
                flex-direction: column;
                position: absolute;
                left: 0;
                top: 100px;
                justify-content: center;
                align-self: center;
                padding-left: 0 !important;
            }

            .nav-ul li {
                width: 100%;
                text-align: center;
                margin-top: 10px;
                border: 0;
                background-color: none;
            }

            .active {
                background-color: transparent !important;
                border: none !important;
            }

            .logo-nav {
                position: absolute;
                left: 0px;
                top: 20px;
            }

            .about .about-nav img {
                transform: scale(.7) !important;
                margin-top: 0;
            }

            .nav-btn {
                display: block;
                position: absolute;
                right: 20px;
                top: 35px;
            }

            .about-nav .nav-ul li {
                height: 50px !important;
            }

            .nav-ul li a {
                font-size: 30px !important;
                font-weight: bold;
            }

            .remov {
                visibility: hidden;
            }

            .slider {
                height: 45%;
                padding-top: 0px;
            }

            .mini-dots2 {
                position: absolute;
                width: 50% !important;
                left: 25%;
                margin-top: -10px;
            }

            .about-arrow {
                position: absolute;
                top: 49%;
                left: 10%;
                width: 80%;
            }

            .bottom-items .bottom-img img {
                width: 50%;
                margin-top: 0px;
            }

            .bottom-items .bottom-img .aa {
                top: 40%;
                font-size: 20px;
                font-weight: 900;
            }

            .face-4 {
                width: 100%;
                margin: auto;
            }

            .slider ul {
                padding: 0;
            }

            .ab-h3,
            .ab-p {
                font-size: 25px !important;
            }

            .about-mp,
            .about-fp {
                width: 100% !important;
                font-size: 16px !important;
                margin-left: 0 !important;
                padding: 0 10px;
            }

            .prof-m {
                padding: 0 12px;
            }

            .prof-f .prof-fleft {
                padding-left: 20px;
            }

            .prof-f .prof-fleft p {
                font-size: 20px;
            }

            .prof-f .prof-fleft h3,
            .prof-f .prof-fright h3 {
                font-size: 20px;
            }

            .prof-f .prof-fright p {
                font-size: 14px;
                margin-left: 30px;
            }

            .prof-m h3 {
                font-size: 16px;
                font-weight: bold;
                margin-bottom: 0;
            }

            .prof-m p {
                font-size: 15px;
            }

            .prof-l {
                padding: 0 20px;
            }

            .prof-l h3 {
                font-size: 20px;
            }

            .prof-l .l-p {
                width: 100%;
                font-size: 16px;
            }

            .bottom-items .bottom-img .aa {
                top: 31% !important;
            }
        }
    </style>
</head>

<body>
    <div class="about">
        <nav class="about-nav">
            <div class="logo-nav">
                <a href="{{route('web.index')}}"><img src="{{asset("assets/imgs/logo.png")}}" /></a>
            </div>
            <div class="nav-btn" id="btn">
                <img src="{{asset("assets/imgs/menu icon.png")}}" onclick="myFunction()" />
            </div>
            <ul class="nav-ul nav-ul2 remov" id="nav-ul">
                <li><a href="{{route('web.about')}}">About</a></li>
                <li><a href="{{route('web.services')}}">Services</a></li>
                <li class="active"><a>Proficiencies</a></li>
                <li><a href="{{route('web.contact-us')}}">Contact Us</a></li>
            </ul>
        </nav>
        <div class="about-main-content">
            <section class="intro">
                <div class="slider">
                    <ul>
                        <li>
                            <div class="center-y">
                                <div class="about-content">
                                    <div class="mini-slider">
                                        <div class="mySlides2">
                                            <div class="face-4 zz">
                                                <div class="prof-l">
                                                    <h3>Source localisation</h3>
                                                    <p class="l-p">
                                                        The identification of the source of a particular piece of
                                                        information or data.
                                                        Identify social media profiles and online communities that
                                                        pertain to the user’s specific fields of interest,
                                                        including Facebook user accounts, pages, groups, events, as
                                                        well as Twitter user accounts.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mySlides2">
                                            <div class="face-4">
                                                <div class="prof-m">
                                                    <div class="prof-fm">
                                                        <h3>Influence Analysis</h3>
                                                        <p class="xz">
                                                            Daily state update on the image perception and new
                                                            supporters contacted.
                                                            Public opinion influence Launch of new publications,
                                                            commentaries via our
                                                            team to reach the largest possible audience
                                                        </p>
                                                    </div>
                                                    <div class="prof-fm2">
                                                        <h3>Methods of Profiling</h3>
                                                        <p>The features of Target Profiling make it possible for end
                                                            users to collect
                                                            a broad variety of data in order to develop a detailed
                                                            profile of the target.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mySlides2">
                                            <div class="face-4">
                                                <div class="prof-f">
                                                    <div class="prof-fleft">
                                                        <h3>Daily publications</h3>
                                                        <p>Creation of daily posts to improve online presence</p>
                                                    </div>
                                                    <div class="prof-fright">
                                                        <h3>Mobilization</h3>
                                                        <p>An army of ingeneers capable of making any post go viral and
                                                            gain notoriety. </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </li>
                    </ul>
                </div>
                <div class="bottom-items">
                    <div class="mini-dots2" style="width:100%">
                        <span class="one w3-badge demo2 w3-hover-white" onclick="currentDiv(1)"></span>
                        <span class="two w3-badge demo2 w3-hover-white" onclick="currentDiv(2)"></span>
                        <span class="three w3-badge demo2 w3-hover-white" onclick="currentDiv(3)"></span>
                    </div>
                    <div class="about-arrow">
                        <a href="{{route('web.services')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                                class="bi bi-caret-left-fill" viewBox="0 0 16 16">
                                <path
                                    d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z" />
                            </svg>
                        </a>
                        <a href="{{route('web.about')}}" class="ss">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                                class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                <path
                                    d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                            </svg>
                        </a>
                    </div>
                    <div class="bottom-img">
                        <a class="aa" href="#">Proficiencies</a>
                        <img src="{{asset("assets/imgs/circle.png")}}" />
                    </div>
                </div>

            </section>

        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        var slideIndex = 3;
        showDivs(slideIndex);

        function plusDivs(n) {
            showDivs(slideIndex += n);
        }

        function currentDiv(n) {
            showDivs(slideIndex = n);
        }

        function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("mySlides2");
            var dots = document.getElementsByClassName("demo2");
            if (n > x.length) { slideIndex = 1 }
            if (n < 1) { slideIndex = x.length }
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" w3-white", "");
            }
            x[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " w3-white";
        }
    </script>

    <script>

        $(function () {
            var slider = $(".slider"),
                slides = slider.find('li'),
                nav = slider.find('nav'),
                navA = nav.find('a'),
                cur = 0,
                playing = true;
            slides.eq(cur).addClass('current');
            nav.children('a').eq(cur).addClass('current_dot');
            nav.on('click', 'a', function (event) {
                event.preventDefault();
            });
            function goNext() {

                cur = cur + 1;
                cur = (cur + slides.length) % slides.length;
                // cur = cur+1;
                console.log(cur);
                navA.eq(cur).addClass('current_dot').siblings().removeClass('current_dot');
                slides.eq(cur).addClass('current').removeClass('prev').siblings().removeClass('current');
                slides.eq(cur).prevAll().addClass('prev');
                slides.eq(cur).nextAll().removeClass('prev');
            }

            $('#next').click(function (e) {
                e.preventDefault();
                goNext();
            })
            function goPrev() {
                console.log(cur)
                cur = cur - 1;
                cur = (cur + slides.length) % slides.length;

                navA.eq(cur).addClass('current_dot').siblings().removeClass('current_dot');
                slides.eq(cur).addClass('current').removeClass('prev').siblings().removeClass('current');
                slides.eq(cur).prevAll().addClass('prev');
                slides.eq(cur).nextAll().removeClass('prev');
            }
            $('#prev').click(function (e) {
                e.preventDefault();
                goPrev();
            })
            slider.mouseenter(pauseSlideshow);
            slider.mouseleave(pauseSlideshow);
            function pauseSlideshow() {
                if (playing) {
                    playing = false;
                    clearInterval(slideInterval);
                } else {
                    playing = true;
                }
            }
        });

    </script>
    <script>
        function myFunction() {
            var element = document.getElementById("nav-ul");
            var btn = document.getElementById("btn")
            var element = document.getElementById("nav-ul");
            btn.addEventListener('click', () => {
                if (element.classList.contains('remov')) {
                    element.classList.remove('remov')
                }
                else {
                    element.classList.add('remov')
                }

            })
            // element.classList.toggle("nav-ul2");
            // console.log("ahmed")
        }
    </script>

</body>

</html>