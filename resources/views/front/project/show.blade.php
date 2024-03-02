@extends('front.layout.app')
@section('content')
<style>
    .vc_custom_1438577094467{
        min-height: 660px;
    }
    </style>
    <section id="subheader" data-speed="8" data-type="background" class="padding-top-bottom" style="background-image: url(&quot;{{ asset('front/images/subheader.jpg') }}&quot;); background-position: 50% -130px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>@if ($project->project_type == 'turnkey_project'){{ 'TURNKEY PROJECT'.'-'.$project->title }}@endif</h1>
                    <h1>@if ($project->project_type == 'interior_execution'){{ 'INTERIOR EXECUTION'.'-'.$project->title }}@endif</h1>
                    <h1>@if ($project->project_type == 'interior_designing'){{ 'INTERIOR DESIGNING'.'-'.$project->title }}@endif</h1>
                    <h1>@if ($project->project_type == 'project_management'){{ 'PROJECT MANAGEMENT'.'-'.$project->title }}@endif</h1>
                    <h1>@if ($project->project_type == 'civil_work'){{ 'CIVIL WORK'.'-'.$project->title }}@endif</h1>

                    {{-- <h1>{{ $project->project_type.'-'.$project->title }}</h1> --}}
                    <ul class="crumb">
                        <li><a rel="v:url" property="v:title" href="{{ route('home') }}">Home</a></li> <b>/</b>
                        <li class="active">{{ $project->title }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>



    <section class="bg-fixed vc_rows wpb_rows vc_rows-fluid vc_custom_1438577094467">
        <div class="no-padd">
            <div class="row">
                <div class="wpb_column vc_column_container col-md-12">
                    <div class="wpb_wrapper">
                        <div class="image-container col-md-5 pull-left animated fadeInLeft" style="background-image:url({{ asset($project->image) }});height:500px" data-delay="0"></div>

                        <div class="container">
                            <div class="row">
                                <div class="inner-padding">
                                    <div class="col-md-6 col-md-offset-6 animated fadeInRight" data-animation="fadeInRight" data-delay="200">
                                        <h2>{{ $project->title }}</h2><br>

                                            {!! $project->description !!}
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>









    {{-- <section class="bg-fixed vc_rows wpb_rows vc_rows-fluid vc_custom_1440408697407">
        <div class="container">
            <div class="row">
                <div class="container-4 wpb_column vc_column_container col-md-12">
                    <div class="wpb_wrapper wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                        <h1 style="text-align: center;"> Why Choose Us</h1>
                        <div class="separator"><span><i class="fa fa-circle"></i></span></div>
                        <div class="spacer-single"></div>

                    </div>
                </div>
                <div class="wpb_column vc_column_container col-md-4 vc_custom_1468498185637">
                    <div class="wpb_wrapper">
                        <div class="wpb_single_image wpb_content_element vc_align_center wpb_animate_when_almost_visible wpb_top-to-bottom wpb_start_animation">

                            <figure class="wpb_wrapper vc_figure">
                                <div class="vc_single_image-wrapper   vc_box_border_grey">
                                    <img src="{{ asset('front/images/goals-1-180x180.png') }}"  width="175" height="175">
                                </div>
                            </figure>
                        </div>

                        <h3 style="text-align: center;"> <b>OUR</b> MISSION</h3>

                        <div class="wpb_text_column wpb_content_element ">
                            <div class="wpb_wrapper">
                                <p style="text-align: center;">To abide and provide best of the value to our customer with the most creative, functional, and Reasonable solution to your needs with the Integrated use Of advanced technology and commitment to values</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container col-md-4">
                    <div class="wpb_wrapper">
                        <div class="wpb_single_image wpb_content_element vc_align_center wpb_animate_when_almost_visible wpb_top-to-bottom wpb_start_animation">

                            <figure class="wpb_wrapper vc_figure">
                                <div class="vc_single_image-wrapper   vc_box_border_grey">
                                    <img src="{{ asset('front/images/Various-Materials-1-180x180.png') }}" width="175" height="175">
                                </div>
                            </figure>
                        </div>

                        <h3 style="text-align: center;"> WHAT <b>WE</b> DO</h3>

                        <div class="wpb_text_column wpb_content_element ">
                            <div class="wpb_wrapper">
                                <p style="text-align: center;">The following are in depth Description regarding our end to end services that we offer to our valued customer</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container col-md-4">
                    <div class="wpb_wrapper">
                        <div class="wpb_single_image wpb_content_element vc_align_center wpb_animate_when_almost_visible wpb_top-to-bottom wpb_start_animation">

                            <figure class="wpb_wrapper vc_figure">
                                <div class="vc_single_image-wrapper   vc_box_border_grey">
                                    <img src="{{ asset('front/images/Big-Design-Collection-1-180x180.png') }}" height="175" width="175">
                                </div>
                            </figure>
                        </div>

                        <h3 style="text-align: center;"> OUR <b>VALUES</b> </h3>

                        <div class="wpb_text_column wpb_content_element ">
                            <div class="wpb_wrapper">
                                <p style="text-align: center;">Creativity in Concepts. Innovation in idea. Speed in delivery.Transparency in dealing. Passion for excellence</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- <section class="bg-fixed vc_rows wpb_rows vc_rows-fluid vc_custom_1468217791175">
        <div class="container">
            <div class="row">
                <div class="wpb_column vc_column_container col-md-12">
                    <div class="wpb_wrapper wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                        <h1 style="text-align: center; color: #ffffff; font-weight:bold;"> Customer Says</h1>
                        <div class="separator"><span><i class="fa fa-circle"></i></span></div>
                        <div class="spacer-single"></div>
                    </div>
                </div>


                        <div id="testimonial-carousel" class="de_carousel  wow fadeInUp owl-carousel owl-theme animated"
                            data-wow-delay=".3s"
                            style="opacity: 1; display: block; visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">

                            <div class="owl-wrapper-outer">
                                <div class="owl-wrapper" style="width: 2340px; left: 0px; display: block;">

                                    <div class="owl-item" style="width: 585px;">
                                        <div class="col-md-6 item">
                                            <div class="de_testi">
                                                <blockquote>
                                                    <p><b>I wanted to thank you for your excellent service and for the
                                                        beautiful quality of all the furniture.
                                                        I wish more of the companies I have dealt with over the last few
                                                        months could have matched your customer service. All too often we
                                                        have been let down.
                                                        Once again many thanks and we will certainly be in touch with our
                                                        next refurbishment projects.</b></p>
                                                    <div class="de_testi_by">
                                                        Janhavi Chaphekar, Customer </div>
                                                </blockquote>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 585px;">
                                        <div class="col-md-6 item">
                                            <div class="de_testi">

                                                <blockquote>
                                                    <p><b>Vishwakarma has given us very good and very satisfied with the work.
                                                        Will work again in the future. Luxurious look and durability.</b></p>
                                                    <div class="de_testi_by">
                                                        KETAN R. SHETH, Customer </div>
                                                </blockquote>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="owl-controls clickable" style="display: none;">
                                <div class="owl-pagination">
                                    <div class="owl-page active">
                                        <span class=""></span>
                                    </div>
                                </div>
                            </div>

                        </div>




            </div>
        </div>
    </section> --}}



    <section class="bg-fixed vc_rows wpb_rows vc_rows-fluid call-to-action bg-color text-center vc_custom_1468069562513">
        <div class="no-padd">
            <div class="row">
                <div class="wpb_column vc_column_container col-md-8">
                    <div class="wpb_wrapper">
                        <div class="wpb_text_column wpb_content_element ">
                            <div class="wpb_wrapper">
                                <p style="text-align: center; font-size: 25px;"><strong>WE PROVIDE BEST INTERIOR DESIGNING SERVICES IN RAJKOT</strong></p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container col-md-4">
                    <div class="wpb_wrapper">

                        <a href="{{ route('contactus') }}" class="btn btn-line-black btn-big">Talk With Us</a>

                    </div>
                </div>
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
