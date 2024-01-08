@extends('web.act-layout.act')
@push('act-page-title')
term-user
@endpush
@push('act-page-background')
user lazy-background
@endpush
@push('act-page-data-source')
{{asset("assets/imgs/img14.png")}}
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
            <a href="{{route('web.service')}}">Service Presentation</a>
            <a href="{{route('web.visual')}}">Visual Showcase</a>
            <a class="bigger">User Engagement</a>
          </div>
    </div>
    <div class="frame-right">
        <p class="padd-top">
            Provide clear and concise descriptions of each service, highlighting the benefits, features, 
            and unique selling points.Include calls to action (CTAs) that encourage users to learn more 
            or contact the company for inquiries.
        </p>
    </div>
</div>
@endsection