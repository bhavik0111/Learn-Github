@extends('front.layout.app')
@section('content')
<style>
    .qodef-e-excerpt{
        text-align: center;
        text-transform: uppercase;
        font-size: 14px;
        line-height: 16px;
        margin-top: 29px;
        width: 65%;
    }
    </style>
    <section id="subheader" data-speed="8" data-type="background" class="padding-top-bottom" style="background-position: 50% 0px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>
                        @if ($type == 'turnkey_project'){{ 'TURNKEY PROJECT' }}@endif
                        @if ($type == 'interior_execution'){{ 'INTERIOR EXECUTION' }}@endif
                        @if ($type == 'interior_designing'){{ 'INTERIOR DESIGNING' }}@endif
                        @if ($type == 'project_management'){{ 'PROJECT MANAGEMENT' }}@endif
                        @if ($type == 'civil_work'){{ 'CIVIL WORK' }}@endif
                    </h1>
                    {{-- <h1>{{$type }}</h1> --}}
                    <ul class="crumb">
                        <li><a rel="v:url" property="v:title" href="{{ route('home') }}">Home</a></li> <b>/</b>
                        <li><a rel="v:url" property="v:title" href="#">Service</a></li> <b>/</b>
                        <li class="active">{{$type}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- <div id="content">
        <div class="container">
            <div id="gallery" class="gallery full-gallery de-gallery pf_full_width wow fadeInUp animated" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp; position: relative; height: 448.782px;">
                @foreach ($projects as $project)
                    <div class="item {{ $project->project_type }} ">
                        <div class="picframe">

                            <div class="row">
                                <div class="column">
                                    <div class="img-parent">
                                        <div>
                                           <a href="{{ route('front.project.show',$project->id) }}" data-fancybox="preview" data-width="1500" data-height="1000" >
                                            <img src="{{ asset($project->image) }}">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div> --}}


    <section class="bg-fixed vc_rows wpb_rows vc_rows-fluid vc_custom_1438577094467">
        <div class="no-padd">
            <div class="row">
                @foreach($projects as $key =>  $project)
                <div class="item {{ $project->project_type }} ">
                    @if($key%2 == 0)
                    <div class="col-lg-12">
                        <div class="col-lg-6">
                            <a itemprop="url" href="https://eskil.qodeinteractive.com/portfolio-item/apartment-qi/" target="_self">
                                <img fetchpriority="high" decoding="async" width="650" height="520"  src="{{ asset($project->image) }}"  class="attachment-full size-full wp-post-image" alt="s"> </a>
                        </div>
                        <div class="col-lg-6" style="display: flex;flex-direction: column;justify-content: center;                  align-items: center;padding: 34px 0 34px;">
                            <h2 itemprop="name"><a href="https://eskil.qodeinteractive.com/portfolio-item/apartment-qi/" target="_self"> {{ $project->title }} </a></h2>
                            <div class="qodef-e-media-thumbnail">
                                <img fetchpriority="high" decoding="async" width="110" height="90"  src="{{ asset($project->image) }}" class="attachment-full size-full wp-post-image" alt="s">
                            </div>
                            <p itemprop="description" class="qodef-e-excerpt">{{ $project->description }}</p>
                            <div class="">
                                {{-- <a href="" class="btn btn-slider" style="border-radius: 15px;letter-spacing: 1px;">Read more</a> --}}
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="col-lg-12">
                        <div class="col-lg-6" style="display: flex;flex-direction: column;justify-content: center;                  align-items: center;padding: 34px 0 34px;">
                            <h2 itemprop="name"><a href="https://eskil.qodeinteractive.com/portfolio-item/apartment-qi/" target="_self"> {{ $project->title }} </a></h2>
                            <div class="qodef-e-media-thumbnail">
                                <img fetchpriority="high" decoding="async" width="110" height="90"  src="{{ asset($project->image) }}" class="attachment-full size-full wp-post-image" alt="s">
                            </div>
                            <p itemprop="description" class="qodef-e-excerpt">{{ $project->description }}</p>
                            <div class="">
                                {{-- <a href="" class="btn btn-slider" style="border-radius: 15px;letter-spacing: 1px;">Read more</a> --}}
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <a itemprop="url" href="https://eskil.qodeinteractive.com/portfolio-item/apartment-qi/" target="_self">
                                <img fetchpriority="high" decoding="async" width="650" height="520" src="{{ asset($project->image) }}" class="attachment-full size-full wp-post-image" alt="s"> </a>
                        </div>
                    </div>
                    @endif
                </div>
                @endforeach
            </div>
        </div>
    </section>





@endsection
@push('script')
<script type="text/javascript">
    jQuery(document).ready(function() {
        'use strict';
        jQuery("#testimonial-carousel").owlCarousel({
            items: 2,
            navigation: false,
            itemsDesktop: [1199, 2],
            itemsDesktopSmall: [979, 1]


        });
    });
</script>
@endpush
