@extends('web.act-layout.act')
@push('act-page-title')
term-framework
@endpush
@push('act-page-background')
learn
@endpush
@section('content')
<div class="frame-main">
    <div class="frame-left">
        <ul>
            <li><a href="{{route('web.framework')}}">Framework</a></li>
            <li class="bigger"><a>Learn</a></li>
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
        <h5>Statistics</h5>
        <p>The process of gathering and examining<br />
            a substantial amount of numerical data, <br />
            particularly with the aim of deducing <br />
            proportions in a population based on <br />
            those seen in a representative sample</p>
    </div>
</div>
@endsection