@extends('layout')

@section('content')

<section id='news'>
	<div class='container'>
		<h1>Edit</h1>
		<hr class='light'>

		{!! Form::model($newspost, ['route' => ['news.update', $newspost->slug], 'method' => 'patch']) !!}
			<div class='form-group'>
				{!! Form::label('title', 'Title') !!}
				{!! Form::text('title', null, ['class' => 'form-control']) !!}
			</div>

			<div class='form-group'>
				{!! Form::label('content', 'Content') !!}
				{!! Form::textarea('content', null, ['class' => 'form-control']) !!}
			</div>

			<div class='form-group'>
				{!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
			</div>
		{!! Form::close() !!}

		@include('partials.errors')
	</div>

</section>

@stop