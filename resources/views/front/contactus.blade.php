@extends('front.layout.app')
@section('content')
@php
    $global = getSetting();
@endphp
    <section id="subheader" data-speed="8" data-type="background" class="padding-top-bottom" style="background-image: url({{ asset('front/images/subheader.jpg') }}); background-position: 50% 0px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Contact With Vishwakarma</h1>
                    <ul class="crumb">
                        <li><a rel="v:url" property="v:title" href="{{ route('home') }}">Home</a></li> <b>/</b>
                        <li class="active">Contact With Vishwakarma</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-fixed vc_rows wpb_rows vc_rows-fluid vc_custom_1468218635763">
        <div class="container">
            <div class="row">
                <div class="wpb_column vc_column_container col-md-12">
                    <div class="wpb_wrapper">
                        <div class="wpb_text_column wpb_content_element ">
                            <div class="wpb_wrapper">
                                <p>Vishwakarma has a versatile body of work ranging from architecture and interiors of residences and corporate offices to institutional, retail and hospitality spaces. Our designers strive constantly to create Interior Graphics that stand out with its distinct approach towards design, detailing and the know-how of Ultra Modern technology.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-fixed vc_rows wpb_rows vc_rows-fluid vc_custom_1468218626051">
        <div class="container">
            <div class="row">
                <div class="wpb_column vc_column_container col-md-8">
                    <div class="wpb_wrapper">
                        <h3 style=""> SEND US MESSAGE </h3>
                        <div class="vc_empty_space" style="height: 10px"><span class="vc_empty_space_inner"></span></div>
                        <div role="form" class="wpcf7" id="wpcf7-f283-p256-o1" lang="en-US" dir="ltr">
                            <div class="screen-reader-response">
                                <p role="status" aria-live="polite" aria-atomic="true"></p>
                                <ul></ul>
                            </div>
                            <div>
                                <span class="wpcf7-form-control-wrap your-name">
                                <!-- (FOR MSG) -->
                                    @if (session()->has('msg'))
                                        <div class="alert alert-success" style="text-colour : black">
                                            {{ session()->get('msg') }}
                                        </div>
                                    @endif
                                <!-- (END MSG) -->
                                </span>
                            </div>
                            <form action="{{ route('contact_mail_send') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-4">
                                        <div>
                                            <span class="wpcf7-form-control-wrap your-name">
                                                <input size="40" name="name"
                                                    class="wpcf7-form-control wpcf7-text  @error('name') is-invalid @enderror"
                                                    aria-required="true" autocomplete="off" placeholder="Your Name*"
                                                    value="{{ old('name') }}" type="text"/>

                                                    @error('name'){{--  --}}
                                                        <div class="invalid-feedback" style="color: #ff0000">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                            </span>
                                        </div>
                                        <div>
                                            <span class="wpcf7-form-control-wrap your-email">
                                                <input size="40" name="email"
                                                    class="wpcf7-form-control wpcf7-email  @error('email') is-invalid @enderror"
                                                    aria-required="true" autocomplete="off" placeholder="Your Email*"
                                                    value="{{ old('email') }}" type="email"  />

                                                    @error('email')
                                                        <div class="invalid-feedback" style="color: #ff0000">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                            </span>
                                        </div>
                                        <div>
                                            <span class="wpcf7-form-control-wrap your-number">
                                                <input size="40" name="phone"
                                                    class="wpcf7-form-control wpcf7-text  @error('phone') is-invalid @enderror"
                                                    aria-required="true" autocomplete="off" placeholder="Your Phone*"
                                                    value="{{ old('phone') }}" type="number"  />

                                                    @error('phone')
                                                        <div class="invalid-feedback" style="color: #ff0000">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div>
                                            <span class="wpcf7-form-control-wrap message">
                                                <textarea name="messages" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea @error('messages') is-invalid @enderror" autocomplete="off"
                                                placeholder="Your Message*" >{{ old('messages') }}</textarea>

                                                @error('messages')
                                                    <div class="invalid-feedback" style="color: #ff0000">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <p id="submit">
                                            <input class="wpcf7-form-control wpcf7-submit has-spinner" type="submit" value="Send Message" /><span class="wpcf7-spinner"></span>
                                        </p>
                                    </div>
                                </div>
                                <div class="wpcf7-response-output" aria-hidden="true"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container col-md-4 vc_custom_1467975343902">
                    <div class="wpb_wrapper">
                        <h3 style=""> CONTACT INFO</h3>

                        <div class="wpb_text_column wpb_content_element ">
                            <div class="wpb_wrapper">
                                <address>
                                    <div>{{ $global->address }}</div>
                                    <div><strong>Phone:</strong>{{ $global->phone_no }} | {{ $global->mobile_no }}</div>
                                    <div><strong>Email:</strong><a href="mailto:{{ $global->email }}">{{ $global->email }}</a></div>
                                    {{-- <div><strong>Web:</strong><a href="#">http://vishwakarmafurniture.com</a></div> --}}
                                </address>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-fixed vc_rows wpb_rows vc_rows-fluid vc_custom_1468218626051">
        <div class="contact-map">
            {{-- {!! $global->google_map !!} --}}
            <iframe src="{!! $global->google_map !!}" width="100%" height="500" frameborder="0" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>


@endsection
