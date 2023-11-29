<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset("css/style.css")}}" />
    <style>
    
        .bottm-p{
            text-align: center;
        }       
    </style>
</head>
<body>
    <div class="main1">
        <div class="home">
            <div class="home-back">
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
                    <p class="pic-bt1">Tadafuq Information <br />
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
                        <p>Tadafuq Information<br /> Technology and Elka</p>
                        <p>Join Forces to <br />Create a New Era</p>
                    </div>
                </div>

                
               
            </div>
            
        </div>
    </div>




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
  
</body>
</html>