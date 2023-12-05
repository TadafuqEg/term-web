@extends('web.act-layout.act')
@push('act-page-title')
term-think
@endpush
@push('act-page-background')
think lazy-background
@endpush
@push('act-page-data-source')
{{asset("assets/imgs/img6.jpg")}}
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
            <li class="bigger"><a>Think</a></li>
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
        <h5>TRY TO DETERMINE<br />
            Monitoring and Statistical Analysis</h5>
        <p>1- The process of monitoring and analysis is a crucial aspect<br />
            of academic research and data analysis. It involves the <br />
            systematic observation and examination of data,<br />
            information, or phenomena to gain sights.<br />
            <br />

            2- The service places emphasis on a diverse variety of <br />
            characteristics including extensive data collecting, <br />
            advanced monitoring capabilities, sentiment analysis, data <br />
            organization, data prioritization, identification of emerging <br />
            trends, and detection of critical situations.
    </div>
</div>
@endsection