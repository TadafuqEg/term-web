@extends('web.act-layout.act')
@push('act-page-title')
term-act-and-more
@endpush
@push('act-page-background')
act-and-more
@endpush
@section('content')
<div class="frame-main">
    <div class="frame-left">
        <ul>
            <li><a href="{{route('web.framework')}}">Framework</a></li>
            <li><a href="{{route('web.learn')}}">Learn</a></li>
            <li><a href="{{route('web.visualize')}}">Visualize</a></li>
            <li><a href="{{route('web.div-act-more')}}">Dive</a></li>
            <li><a href="{{route('web.dive-more')}}">Dive more</a></li>
            <li><a href="{{route('web.think')}}">Think</a></li>
            <li><a href="{{route('web.think-more')}}">Think more</a></li>
            <li><a href="{{route('web.act')}}">Act</a></li>
            <li><a href="{{route('web.act-more')}}">Act More</a></li>
            <li class="bigger"><a>Act more and more</a></li>
            <li><a href="{{route('web.service')}}">Service Presentation</a></li>
            <li><a href="{{route('web.visual')}}">Visual Showcase</a></li>
            <li><a href="{{route('web.user')}}">User Engagement</a></li>
        </ul>
    </div>
    <div class="frame-right">
        <h5>Lead Generation and Nurturing</h5>
        <p>Lead generation helps you fill your funnel with 
            quality prospects, while lead nurturing helps 
            you convert them into loyal customers. Without 
            lead generation, you won't have enough leads 
            to nurture, and without lead nurturing, you'll lose 
            leads to your competitors or to inaction
        </p>
    </div>
</div>
@endsection