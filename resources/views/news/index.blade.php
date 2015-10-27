@extends('layout')

@section('content')

<section id='news'>
	<div class='container'>
		<h1>News</h1>
		<hr class='light'>

		@if($news->count())
			@foreach($news as $newspost)
				<div class='news-post'>
					<h2>{{ $newspost->title }}</h2>
					<p class='news-date'>Posted by Ludde on {{ $newspost->created_at }}</p>
					<p class='news-content'>{{ $newspost->content }}</p>
					<a href="{{ route('news.show', $newspost->slug) }}" class='btn btn-primary'>Read more</a>
					<hr>
				</div>
			@endforeach
		@else
			<p>No news have been posted</p>
		@endif

		<a href="{{ route('news.create') }}" class='btn btn-primary'>Create</a>

	</div>
</section>

@stop