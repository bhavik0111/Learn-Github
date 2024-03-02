@extends('front.layout.app')
@section('content')
<section id="subheader" data-speed="8" data-type="background" class="padding-top-bottom" style="background-position: 50% 0px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{$service->title}}</h1>
                <ul class="crumb">
                    <li><a rel="v:url" property="v:title" href="{{ route('home') }}">Home</a></li> <b>/</b>
                    <li><a rel="v:url" property="v:title" href="#">Service</a></li> <b>/</b>
                    <li class="active">{{$service->title}}</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<div id="content">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<ul id="services-list">
                    @foreach($services as $serv)
                        <li id="post-{{$serv->id}}" @if($service->id == $serv->id) class="active" @endif><a href="{{ route('service',$serv->id) }} ">{{$serv->title}}</a></li>
                    @endforeach
		        </ul>
			</div>
			<div class="col-md-9">
                    <p>{{$service->title}}</p>
                    <p>{{$service->description}}</p>
            </div>
		</div>
	</div>
</div>
@endsection
