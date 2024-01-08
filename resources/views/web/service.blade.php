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
         <div class="links">
            <a href="{{route('web.framework')}}">Framework</a>
            <a href="{{route('web.learn')}}">Learn</a>
            <a href="{{route('web.visualize')}}">Visualize</a>
            <a href="{{route('web.div-act-more')}}">Dive</a>
            <a href="{{route('web.dive-more')}}">Dive more</a>
            <a href="{{route('web.think')}}">Think</a>
            <a href="{{route('web.think-more')}}">Think more</a>
            <a href="{{route('web.act')}}">Act</a>
            <a href="{{route('web.act-more')}}">Act More</a>
            <a href="{{route('web.act-andmore')}}">Act more and more</a>
            <a class="bigger">Service Presentation</a>
            <a href="{{route('web.visual')}}">Visual Showcase</a>
            <a href="{{route('web.user')}}">User Engagement</a>
          </div>
    </div>
    <div class="frame-right">
       
        <p class="padd-top">Organize services in a structured and intuitive manner for easy browsing and exploration.
            Implement filters or categories to help users find specific services.</p>
    </div>
</div>
@endsection

