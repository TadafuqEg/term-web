@extends('web.act-layout.act')
@push('act-page-title')
term-think-more
@endpush
@push('act-page-background')
think-more lazy-background
@endpush
@push('act-page-data-source')
{{asset("assets/imgs/img7.jpg")}}
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
            <a class="bigger" >Think more</a>
            <a href="{{route('web.act')}}">Act</a>
            <a href="{{route('web.act-more')}}">Act More</a>
            <a href="{{route('web.act-andmore')}}">Act more and more</a>
            <a href="{{route('web.service')}}">Service Presentation</a>
            <a href="{{route('web.visual')}}">Visual Showcase</a>
            <a href="{{route('web.user')}}">User Engagement</a>
          </div>
    </div>
    <div class="frame-right">
        <h5>New Market Activation <br />
            Strategy</h5>
        <p>Marketing activation is the execution of
            campaigns, events, and experiences that
            generate awareness of your brand. Done
            well, marketing activation resonates with your
            audience. The activation process focuses on
            enhancing the path to purchase for customers,
            often through an interactive experience.
        </p>
    </div>
</div>
@endsection