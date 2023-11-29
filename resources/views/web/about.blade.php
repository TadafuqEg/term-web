<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>term</title>
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
</head>

<body>
    <div class="about">

        <div class="nav">
            <input type="checkbox" id="nav-check">
            <div class="nav-header">
              <div class="nav-title">
                <a href="{{route('web.homepage')}}"><img src="{{asset("assets/imgs/logo.png")}}" /></a>
              </div>
            </div>
            <div class="nav-btn">
              <label for="nav-check">
                <img src="{{asset("assets/imgs/menu icon.png")}}" />
              </label>
            </div>
            
            <div class="nav-links">
                <a href="{{route('web.about')}}" class="active">About</a>
                <a href="{{route('web.services')}}">Services</a>
                <a href="{{route('web.proficiencies')}}">Proficiencies</a>
                <a href="{{route('web.contact-us')}}">Contact Us</a>
                <a href="{{route('web.getquotation')}}">Get Quotation</a>
            </div>
        </div>


       
        <div class="about-main-content">
            <section class="intro">
                <div class="slider">
                    <ul>
                        <li>
                            <div class="center-y">
                                <div class="about-content">
                                    <div class="mini-slider">
                                        <div class="mySlides2">
                                            <div class="face-6">
                                                <div class="face-4">
                                                    <p class="about-fp">
                                                        In a crucial and noteworthy development, Tadafuq Information
                                                        Technology (TIT) and Elka, two important
                                                        entities within the technology sector, have recently engaged in
                                                        a merger agreement, therefore combining
                                                        their respective operations. The primary objective of this
                                                        significant deal was to capitalize on
                                                        the potential benefits of combining complementary elements,
                                                        consolidating assets,
                                                        and establishing a novel company positioned to have substantial
                                                        influence in the dynamic field of technology.
                                                    </p>
                                                </div>


                                            </div>
                                        </div>
                                        <div class="mySlides2">
                                            <div class="face-4">
                                                <p class="about-mp">Within the dynamic and ever-changing realm of the
                                                    technology sector,
                                                    organizations constantly strive to discover novel approaches in
                                                    order
                                                    to maintain their competitiveness and foster expansion.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="mySlides2">
                                            <div class="face-4">
                                                <h3 class="ab-h3">Tadafuq Information<br />
                                                    Technology and Elka</h3>
                                                <p class="ab-p">Join Forces to<br />
                                                    Create a New Era</p>
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
                        <a href="{{route('web.proficiencies')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                                class="bi bi-caret-left-fill" viewBox="0 0 16 16">
                                <path
                                    d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z" />
                            </svg>
                        </a>
                        <a href="{{route('web.services')}}" class="ss">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                                class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                <path
                                    d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                            </svg>
                        </a>
                    </div>
                    <div class="bottom-img">
                        <a class="aa" href="#">About</a>
                        <img src="{{asset("assets/imgs/circle.png")}}" />
                    </div>
                </div>
                <!-- pluse button -->
                <div class='paluse-container'>
                <a href="{{route('web.getquotation')}}"><span class='pulse-button'>Quotation</span></a>
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
        }
    </script>

</body>
</html>