<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@stack('act-page-title')</title>
    <!-- css -->
    <link rel="stylesheet" href="{{asset('css/actions.css')}}" />
</head>

<body>
    <div class="page @stack('act-page-background')">
        <!-- nav -->
        <nav>
            <div class="frame-logo">
                <a href="{{route('web.index')}}"><img src="{{asset("assets/imgs/logo.png")}}" /></a>
            </div>
            <div class="f-nav-ul">
                <ul>
                    <li class="li-1"><a href="{{route('web.about')}}">About</a></li>
                    <li class="show"><a href="{{route('web.services')}}">Services</a></li>
                    <li class="mob"><a href="{{route('web.act')}}">Act</a></li>
                    <li class="li-2"><a href="{{route('web.proficiencies')}}">Proficiencies</a></li>
                    <li class="li-3"><a href="{{route('web.contact-us')}}">contact Us</a></li>
                </ul>
            </div>
        </nav>
        @yield('content')
    </div>
</body>

</html>