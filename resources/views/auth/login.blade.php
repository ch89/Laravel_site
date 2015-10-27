@extends('layout')

@section('content')

<div class="container">
	
	<h1>Login</h1>

	{!! Form::open() !!}
		<div class='form-group'>
			{!! Form::label('email', 'Email') !!}
			{!! Form::text('email', null, ['class' => 'form-control']) !!}
		</div>

		<div class='form-group'>
			{!! Form::label('password', 'Password') !!}
			{!! Form::password('password', ['class' => 'form-control']) !!}
		</div>

		<div class='form-group'>
			{!! Form::submit('Login', ['class' => 'btn btn-primary']) !!}
		</div>
	{!! Form::close() !!}

	@include('partials.errors')

</div>

@stop