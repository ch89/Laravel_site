@extends('layout')

@section('content')

<section id='home'>
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
</section>

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

<section id='references'>
	<div class='container-fluid'>
		<div class="row">
			<div class="col-sm-6 col-lg-4">
				<img src='/images/1.jpg'>

				<div class='caption'>
					<h2>Caption</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni, doloremque.</p>
				</div>
			</div>
			<div class="col-sm-6 col-lg-4">
				<img src='/images/2.jpg'>

				<div class='caption'>
					<h2>Caption</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni, doloremque.</p>
				</div>
			</div>
			<div class="col-sm-6 col-lg-4">
				<img src='/images/3.jpg'>

				<div class='caption'>
					<h2>Caption</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni, doloremque.</p>
				</div>
			</div>
			<div class="col-sm-6 col-lg-4">
				<img src='/images/4.jpg'>

				<div class='caption'>
					<h2>Caption</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni, doloremque.</p>
				</div>
			</div>
			<div class="col-sm-6 col-lg-4">
				<img src='/images/5.jpg'>

				<div class='caption'>
					<h2>Caption</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni, doloremque.</p>
				</div>
			</div>
			<div class="col-sm-6 col-lg-4">
				<img src='/images/6.jpg'>

				<div class='caption'>
					<h2>Caption</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni, doloremque.</p>
				</div>
			</div>
		</div>
</section>

<section id="contact">
	<div class="container-fluid">
		<div class="row">
			<div class="info col-sm-6">
				<h2>Contact</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, impedit.</p>

				<ul>
					<li>
						<i class='fa fa-envelope-o fa-2x'></i>
						<span>lorem@ipsum.com</span>
					</li>
					<li>
						<i class='fa fa-map-marker fa-2x'></i>
						<span>Loremsvägen 6A, 392 31 Kalmar</span>
					</li>
					<li>
						<i class='fa fa-phone fa-2x'></i>
						<span>0480-478 32</span>
					</li>
					<li>
						<i class='fa fa-fax fa-2x'></i>
						<span>0480-652 79</span>
					</li>
				</ul>
			</div>
			<div class="map col-sm-6">Right</div>
		</div>
	</div>
</section>

@stop