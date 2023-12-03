@extends('web.act-layout.act')
@push('act-page-title')
term-service
@endpush
@push('act-page-background')
service lazy-background
@endpush
@push('act-page-data-source')
{{asset("assets/imgs/img12.png")}}
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
            <li><a href="{{route('web.act')}}">Act</a></li>
            <li><a href="{{route('web.act-more')}}">Act More</a></li>
            <li><a href="{{route('web.act-andmore')}}">Act more and more</a></li>
            <li class="bigger"><a>Service Presentation</a></li>
            <li><a href="{{route('web.visual')}}">Visual Showcase</a></li>
            <li><a href="{{route('web.user')}}">User Engagement</a></li>
        </ul>
    </div>
    <div class="frame-right">
       
        <p class="padd-top">Organize services in a structured and intuitive manner for easy browsing and exploration.
            Implement filters or categories to help users find specific services.</p>
    </div>
</div>
@endsection

