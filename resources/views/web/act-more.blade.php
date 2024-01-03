@extends('web.act-layout.act')
@push('act-page-title')
term-act-more
@endpush
@push('act-page-background')
act-more lazy-background
@endpush
@push('act-page-data-source')
{{asset("assets/imgs/img10.jpg")}}
@endpush
@section('content')
<div class="frame-main">
    <div class="frame-left">
        <div class="links">
            <a href="{{route('web.framework')}}">Framework</a>
            <a href="{{route('web.learn')}}">Learn</a>
            <a href="{{route('web.visualize')}}">Visualize</a>
            <a href="{{route('web.div-act-more')}}">Dive</a>
            <a href="{{route('web.dive-more')}}">Dive more</a>
            <a href="{{route('web.think')}}">Think</a>
            <a href="{{route('web.think-more')}}">Think more</a>
            <a href="{{route('web.act')}}">Act</a>
            <a class="bigger">Act More</a>
            <a href="{{route('web.act-andmore')}}">Act more and more</a>
            <a href="{{route('web.service')}}">Service Presentation</a>
            <a href="{{route('web.visual')}}">Visual Showcase</a>
            <a href="{{route('web.user')}}">User Engagement</a>
          </div>
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