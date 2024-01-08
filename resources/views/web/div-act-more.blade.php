@extends('web.act-layout.act')
@push('act-page-title')
term-dive
@endpush
@push('act-page-background')
dive lazy-background
@endpush
@push('act-page-data-source')
{{asset("assets/imgs/img4.jpg")}}
@endpush
@section('content')
<div class="frame-main">
    <div class="frame-left">
        <div class="links">
            <a href="{{route('web.framework')}}">Framework</a>
            <a href="{{route('web.learn')}}">Learn</a>
            <a href="{{route('web.visualize')}}">Visualize</a>
            <a class="bigger">Dive</a>
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