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
					<p class='news-date'>Posted by {{ $newspost->author }} on {{ $newspost->created_at }}</p>
					<p class='news-content'>{{ $newspost->content }}</p>
					<a href="{{ route('news.show', $newspost->slug) }}" class='btn btn-primary'>Read more</a>

					@if(Auth::check())
						<div>
							<a href="{{ route('news.edit', $newspost->slug) }}">Edit</a> |
							<a href="{{ route('news.edit', $newspost->slug) }}">Delete</a>
						</div>
					@endif

					<hr>
				</div>
			@endforeach
		@else
			<p class='empty'>No news have been posted</p>
		@endif

		@if(Auth::check())
			<a href="{{ route('news.create') }}" class='btn btn-primary'>Create</a>
		@endif

	</div>
</section>

@stop