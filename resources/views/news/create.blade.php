@extends('layout')

@section('content')

<section id='news'>
	<div class='container'>
		<h1>Create</h1>

		{!! Form::open(['route' => 'news.store']) !!}
			<div class='form-group'>
				{!! Form::label('title', 'Title') !!}
				{!! Form::text('title', null, ['class' => 'form-control']) !!}
			</div>

			<div class='form-group'>
				{!! Form::label('content', 'Content') !!}
				{!! Form::textarea('content', null, ['class' => 'form-control']) !!}
			</div>

			<div class='form-group'>
				{!! Form::submit('Add', ['class' => 'btn btn-primary']) !!}
			</div>
		{!! Form::close() !!}

		@include('partials.errors')
	</div>

</section>

@stop