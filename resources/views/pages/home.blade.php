@extends('layout')

@section('content')

<div id='carousel' class='carousel slide'>
	<ol class='carousel-indicators'>
		<li data-target='#carousel' data-slide-to='0' class='active'></li>
		<li data-target='#carousel' data-slide-to='1'></li>
	</ol>

	<div class='carousel-inner'>
		<div class='item active'>
			<div class='carousel-caption'>
				<h1>Quality <span>products</span></h1>
				<p>Lorem Ipsum är en utfyllnadstext från tryck- och förlagsindustrin. Lorem ipsum har varit standard ända sedan 1500-talet.</p>
				<p><a href='#' class='btn btn-custom'>Details</a></p>
			</div>
		</div>
		<div class='item'>
			<div class='carousel-caption'>
				<h1>Low <span>prices</span></h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam aliquam consequuntur nisi, magni, modi perferendis quod quo earum est maxime!</p>
				<p><a href='#' class='btn btn-custom'>Details</a></p>
			</div>
		</div>
	</div>

	<a class="carousel-control left" href="#carousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="carousel-control right" href="#carousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div>

<section id='services'>
	<div class='container'>

		<h1>Services</h1>
		<hr class='light'>

		<div class='row'>
			<div class='col-sm-6 col-lg-3'>
				<i class='fa fa-tablet fa-4x'></i>
				<h2>Responsive design</h2>
				<p>Lorem Ipsum är en utfyllnadstext.</p>
			</div>
			<div class='col-sm-6 col-lg-3'>
				<i class='fa fa-code fa-4x'></i>
				<h2>Web development</h2>
				<p>Lorem Ipsum är en utfyllnadstext.</p>
			</div>
			<div class='col-sm-6 col-lg-3'>
				<i class='fa fa-camera-retro fa-4x'></i>
				<h2>Photography</h2>
				<p>Lorem Ipsum är en utfyllnadstext.</p>
			</div>
			<div class='col-sm-6 col-lg-3'>
				<i class='fa fa-newspaper-o fa-4x'></i>
				<h2>Up to date</h2>
				<p>Lorem Ipsum är en utfyllnadstext.</p>
			</div>
		</div>
	</div>
</section>

@stop