@extends('web.act-layout.act')
@push('act-page-title')
term-dive-more
@endpush
@push('act-page-background')
dive-more lazy-background
@endpush
@push('act-page-data-source')
{{asset("assets/imgs/img5.jpg")}}
@endpush
@section('content')
<div class="frame-main">
    <!-- <div class="divemore-img"></div> -->
    
    <div class="frame-left">
        <div class="links">
            <a href="{{route('web.framework')}}">Framework</a>
            <a href="{{route('web.learn')}}">Learn</a>
            <a href="{{route('web.visualize')}}">Visualize</a>
            <a href="{{route('web.div-act-more')}}">Dive</a>
            <a class="bigger">Dive more</a>
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