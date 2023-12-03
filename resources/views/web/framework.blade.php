@extends('web.act-layout.act')
@push('act-page-title')
term-framework 
@endpush
@push('act-page-background')
framework lazy-background
@endpush
@push('act-page-data-source')
{{asset("assets/imgs/img1.jpg")}}
@endpush
@section('content')
<div class="frame-main">
    <div class="frame-left">
        <ul>
            <li class="bigger"><a>Framework</a></li>
            <li><a href="{{route('web.learn')}}">Learn</a></li>
            <li><a href="{{route('web.visualize')}}">Visualize</a></li>
            <li><a href="{{route('web.div-act-more')}}">Dive</a></li>
            <li><a href="{{route('web.dive-more')}}">Dive more</a></li>
            <li><a href="{{route('web.think')}}">Think</a></li>
            <li><a href="{{route('web.think-more')}}">Think more</a></li>
            <li><a href="{{route('web.act')}}">Act</a></li>
            <li><a href="{{route('web.act-more')}}">Act More</a></li>
            <li><a href="{{route('web.act-andmore')}}">Act more and more</a></li>
            <li><a href="{{route('web.service')}}">Service Presentation</a></li>
            <li><a href="{{route('web.visual')}}">Visual Showcase</a></li>
            <li><a href="{{route('web.user')}}">User Engagement</a></li>
        </ul>
    </div>
    <div class="frame-right">
        <h5>Big Data Processing</h5>
        <p>The utilization of a collection of methodologies or programming paradigms for the purpose of
            accessing
            extensive datasets in order to extract valuable insights that can aid in decision-making and
            assistance.
        </p>
    </div>
</div>
@endsection