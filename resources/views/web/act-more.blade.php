@extends('web.act-layout.act')
@push('act-page-title')
term-framework
@endpush
@push('act-page-background')
act-more
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
            <li class="bigger"><a>Act More</a></li>
            <li><a href="{{route('web.act-andmore')}}">Act more and more</a></li>
            <li><a href="{{route('web.service')}}">Service Presentation</a></li>
            <li><a href="{{route('web.visual')}}">Visual Showcase</a></li>
            <li><a href="{{route('web.user')}}">User Engagement</a></li>
        </ul>
    </div>
    <div class="frame-right">
        <h5>Demand Generation</h5>
        <p>The concept of demand generation refers to
            the strategic process of creating and stimulating
            interest, desire, and demand for a certain
            product or service<br />
            <br />

            Demand generation refers to the systematic
            approach of enhancing awareness and
            stimulating interest in a certain product or
            service. The objective is to broaden the scope
            of your target audience, establish expertise and
            credibility, and stimulate interest in your brand,
            ultimately leading to the acquisition of valuable
            and high-caliber leads.
        </p>
    </div>
</div>
@endsection