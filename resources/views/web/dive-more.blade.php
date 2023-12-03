@extends('web.act-layout.act')
@push('act-page-title')
term-dive-more
@endpush
@push('act-page-background')
dive-more
@endpush
@section('content')
<div class="frame-main">
    <!-- <div class="divemore-img"></div> -->
    
    <div class="frame-left">
        <ul>
            <li><a href="{{route('web.framework')}}">Framework</a></li>
            <li><a href="{{route('web.learn')}}">Learn</a></li>
            <li><a href="{{route('web.visualize')}}">Visualize</a></li>
            <li><a href="{{route('web.div-act-more')}}">Dive</a></li>
            <li class="bigger"><a>Dive more</a></li>
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
    <div class="frame-right divemore-img">
        
        <h5>Marketing Reporting and <br />
            Data Analysis</h5>
        <p>The process of collecting and evaluating 
            marketing data is undertaken in<br /> order to guide 
            subsequent marketing choices, strategies, and 
            performance<br /> evaluations. Marketing reports 
            provide valuable and practical data that enable<br />
            individuals to derive significant insights and 
            achieve overarching objectives<br /> within a firm.
            
           </p>
    </div>
    
 </div>
@endsection