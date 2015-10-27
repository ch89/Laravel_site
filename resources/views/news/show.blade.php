@extends('layout')

@section('content')

<section id='news'>
	<div class='container'>
		<h1>{{ $newspost->title }}</h1>

		<p class='news-content'>{{ $newspost->content }}</p>

		<a href="{{ route('news.index') }}" class='btn btn-primary'>Back to news</a>
	</div>
</section>

@stop