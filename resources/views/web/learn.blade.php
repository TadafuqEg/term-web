@extends('web.act-layout.act')
@push('act-page-title')
term-learn
@endpush
@push('act-page-background')
learn lazy-background
@endpush
@push('act-page-data-source')
{{asset("assets/imgs/img3.jpg")}}
@endpush
@section('content')
<div class="frame-main">
    <div class="frame-left">
        <div class="links">
            <a href="{{route('web.framework')}}">Framework</a>
            <a class="bigger">Learn</a>
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
        <h5>Statistics</h5>
        <p>The process of gathering and examining<br />
            a substantial amount of numerical data, <br />
            particularly with the aim of deducing <br />
            proportions in a population based on <br />
            those seen in a representative sample</p>
    </div>
</div>
@endsection