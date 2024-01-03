@extends('web.act-layout.act')
@push('act-page-title')
term-visual
@endpush
@push('act-page-background')
Visual lazy-background
@endpush
@push('act-page-data-source')
{{asset("assets/imgs/img13.png")}}
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
            <a href="{{route('web.act-more')}}">Act More</a>
            <a href="{{route('web.act-andmore')}}">Act more and more</a>
            <a href="{{route('web.service')}}">Service Presentation</a>
            <a class="bigger">Visual Showcase</a>
            <a href="{{route('web.user')}}">User Engagement</a>
        </div>
    </div>
    <div class="frame-right">
        <p class="padd-top">Create a visually appealing presentation of the services, including high-quality 
            images and relevant details.Incorporate interactive elements, such as icons or illustrations, to 
            visually represent each service.
        </p>
    </div>
</div>
@endsection