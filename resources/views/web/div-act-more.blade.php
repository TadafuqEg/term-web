@extends('web.act-layout.act')
@push('act-page-title')
term-framework
@endpush
@push('act-page-background')
dive
@endpush
@section('content')
<div class="frame-main">
    <div class="frame-left">
        <ul>
            <li><a href="{{route('web.framework')}}">Framework</a></li>
            <li><a href="{{route('web.learn')}}">Learn</a></li>
            <li><a href="{{route('web.visualize')}}">Visualize</a></li>
            <li class="bigger"><a>Dive</a></li>
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
        <h5>Market Research and <br />
            Audience Insights</h5>
        <p>Market research is a process that involves the collection of data pertaining to<br /> whole markets. On 
            the other hand, consumer insights research aims to <br />evaluate this data in order to derive actionable 
            findings that are specifically<br /> applicable to a particular brand. The utilization of data-driven 
            conclusions <br />eliminates uncertainty in corporate decision-making processes, enabling<br /> businesses 
            to more effectively fulfill the demands of their consumers.
            </p>
    </div>
 </div>
@endsection