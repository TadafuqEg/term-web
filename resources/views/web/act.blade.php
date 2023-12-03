@extends('web.act-layout.act')
@push('act-page-title')
term-act
@endpush
@push('act-page-background')
act lazy-background
@endpush
@push('act-page-data-source')
{{asset("assets/imgs/img9.jpg")}}
@endpush
@section('content')
<div class="frame-main">
    <div class="frame-left">
        <ul>
            <li><a href="{{route('web.framework')}}">Framework</a></li>
            <li><a href="{{route('web.learn')}}">Learn</a></li>
            <li><a href="{{route('web.visualize')}}">Visualize</a></li>
            <li><a href="{{route('web.div-act-more')}}">Dive</a></li>
            <li><a href="{{route('web.dive-more')}}">Dive more</a></li>
            <li><a href="{{route('web.think')}}">Think</a></li>
            <li><a href="{{route('web.think-more')}}">Think more</a></li>
            <li class="bigger"><a>Act</a></li>
            <li><a href="{{route('web.act-more')}}">Act More</a></li>
            <li><a href="{{route('web.act-andmore')}}">Act more and more</a></li>
            <li><a href="{{route('web.service')}}">Service Presentation</a></li>
            <li><a href="{{route('web.visual')}}">Visual Showcase</a></li>
            <li><a href="{{route('web.user')}}">User Engagement</a></li>
        </ul>
    </div>
    <div class="frame-right">
        <h5>SOCIAL INNOVATION</h5>
        <p>The service facilitates large-scale online social
            activities. The platform facilitates the execution
            of extensive online social initiatives, therefore
            enabling the development and restoration of
            one›s ability to exert influence and enhance the
            quality of one's reputation
        </p>
    </div>
</div>
@endsection