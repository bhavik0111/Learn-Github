<footer>
    @php
        $global = getSetting();
        $logos = getLogo();
    @endphp
    <section id="clients" class="section-bg">
        <div class="container">
            <div class="section-header" style="text-align: center;">
                <h2>OUR PARTNER</h2>
            </div>
            <div class="row no-gutters clients-wrap clearfix wow fadeInUp "
                style="visibility: visible; animation-name: fadeInUp;">
                @foreach ($logos as $logo)
                    <div class="col-lg-4 col-md-4 col-xs-12" style=" text-align: center;">
                        <div class="client-logo" style="padding:20px">
                            @if ($logo->link)
                                <a href="{{ $logo->link }}" target="_blank"><img src="{{ asset($logo->image) }}"></a>
                            @else
                                <img src="{{ asset($logo->image) }}" class="img-fluid" id="my-img">
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <div class="container footer-padding">
        <div class="row">
            <div class="col-md-3 col-sm-12">
                <div id="text-2" class="widget widget_text">
                    <h3>Our Location</h3>
                    <div>
                        {{-- {!! $global->google_map !!} --}}
                        <iframe src="{!! $global->google_map !!}" width="100%" frameborder="0" allowfullscreen
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div id="text-5" class="widget widget_text">
                    <h3>Working Hours</h3>
                    <div class="textwidget">
                        {{-- <p>Monday - Friday: 10am - 7pm</p>
                        <p>Saturday: 10am - 2pm</p>
                        <p>Sunday:Closed</p> --}}
                        {!! $global->working_time !!}
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div id="text-4" class="widget widget_text">
                    <h3>Our Services</h3>
                    <div class="textwidget">
                        @foreach ($services as $service)
                            <a href="{{ route('service', $service->id) }}">{{ $service->title }} </a>
                            <br>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div id="text-3" class="widget widget_text" style="padding-bottom: 0px;">
                    <h3>Contact Us</h3>
                    <div class="textwidget">
                        <address>
                            <span>
                                <strong>Rajkot Address :</strong>
                                <a href="https://www.google.com/maps/place/22%C2%B018'03.5%22N+70%C2%B045'46.5%22E/@22.300537,70.762917,18z/data=!4m4!3m3!8m2!3d22.3009722!4d70.7629167?hl=en&entry=ttu" target="_blank">{{ $global->address }}</a>

                            </span>
                            <span>
                                <strong>Gandhidham Address :</strong> {{ $global->address2 }}
                            </span>
                            <span>
                                <strong>Phone :</strong> <a href="call:{{ $global->phone_no }}">
                                    {{ $global->phone_no }}</a> | <a href="call:{{ $global->mobile_no }}">
                                    {{ $global->mobile_no }}</a>

                            </span>
                            <span>
                                <strong>Email :</strong> <a
                                    href="mailto:{{ $global->email }}">{{ $global->email }}</a>
                            </span>
                            {{-- <span>
                                <strong>Web :</strong>
                                <a target="_blank" href="#" rel="noopener">http://vishwakarmafurniture.com</a>
                            </span> --}}
                        </address>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="subfooter">
        <div class="container">
            <div class="row">

                <div class="col-sm-6"> © Copyright 2017 - VISHWAKARMAFURNITURE | Website Designed by ---</a>
                </div>

                <div class="col-md-6 text-right">
                    <div class="social-icons">

                        {{ __('GET CONNECT WITH US') }} <br>

                        <a target="_blank" href="{{ $global->facebook }}">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a target="_blank" href="{{ $global->instagram }}">
                            <i class="fa fa-instagram"></i>
                        </a>
                        <a target="_blank" href="{{ $global->youtube }}">
                            <i class="fa fa-youtube"></i>
                        </a>
                        {{-- <a target="_blank" href="#">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a target="_blank" href="#">
                            <i class="fa fa-rss"></i>
                        </a>
                        <a target="_blank" href="#">
                            <i class="fa fa-google-plus"></i>
                        </a>
                        <a target="_blank" href="#">
                            <i class="fa fa-github"></i>
                        </a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
