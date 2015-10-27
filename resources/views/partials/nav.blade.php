<nav class='navbar navbar-default navbar-fixed-top'>
	<div class='container'>
		<div class='navbar-header'>
			<button class='navbar-toggle' data-toggle='collapse' data-target='#navbar'>
				<span class='icon-bar'></span>
				<span class='icon-bar'></span>
				<span class='icon-bar'></span>
			</button>
			
			<a href='/' class='navbar-brand'><img src='/images/logo.png' alt='Logo'></a>
		</div>

		<div id='navbar' class='collapse navbar-collapse'>
			<ul class='nav navbar-nav'>
				<li><a href="{{ route('news.index') }}">News</a></li>
			</ul>

			<ul class='nav navbar-nav navbar-right'>
				@if(Auth::guest())
					<li><a href='/auth/login'>Login</a></li>
					<li><a href='#'>Register</a></li>
				@else
					<li class='dropdown'>
						<a href='#' class='dropdown-toggle' data-toggle='dropdown'>{{ Auth::user()->name }} <span class='caret'></span></a>

						<ul class='dropdown-menu'>
							<li><a href='/auth/logout'>Logout</a></li>
						</ul>
					</li>
				@endif
			</ul>
		</div>
	</div>
</nav>