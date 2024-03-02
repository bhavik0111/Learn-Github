@extends('front.layout.app')
@section('content')



<section id="subheader" data-speed="8" data-type="background" class="padding-top-bottom" style="background-position: 50% 0px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>3 bhk flats</h1>
                <ul class="crumb">
                    <li><a rel="v:url" property="v:title" href="{{ route('home') }}">Home</a></li> <b>/</b>
                    <li><a rel="v:url" property="v:title" href="#">Service</a></li> <b>/</b>
                    <li class="active">3 bhk flats</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<div id="content">
	<div class="container">
        {{-- <h2>Comming soon...</h2> --}}
        <div id="gallery" class="gallery full-gallery de-gallery pf_full_width wow fadeInUp animated" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp; position: relative; height: 448.782px;">
            @foreach ($flats as $flat)
                <div class="item {{ $flat->flats_type }} ">
                    <div class="picframe">

                        <div class="row">
                            <div class="column">
                                <div class="img-parent">
                                    <div>
                                        {{-- <a href="{{ asset($flat->image) }}" data-fancybox="preview" data-width="1500" data-height="1000" > --}}
                                        <img src="{{ asset($flat->image) }}">
                                        {{-- </a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
