<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@stack('act-page-title')</title>
    <!-- css -->
    <link rel="stylesheet" href="{{asset('css/actions.css')}}" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
</head>

<body>
    <div class="page @stack('act-page-background')">
        <!-- nav -->
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
                <a href="{{route('web.about')}}">About</a>
                <a href="{{route('web.services')}}" class="active">Services</a>
                <a href="{{route('web.proficiencies')}}">Proficiencies</a>
                <a href="{{route('web.contact-us')}}">Contact Us</a>
                <a href="{{route('web.getquotation')}}">Get Quotation</a>
            </div>
        </div>
        @yield('content')
        <!-- pluse button -->
        <div class='paluse-container'>
        <a href="{{route('web.getquotation')}}"><span class='pulse-button'>Quotation</span></a>
        </div>
    </div>
</body>

</html>