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
        <div class="links">
            <a class="bigger">Framework</a>
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
            <a href="{{route('web.user')}}">User Engagement</a>
          </div>
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