<div id="app">
	<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
		<div class="container">
			<a class="navbar-brand" href="{{ url('/') }}">
				{{ config('app.name', 'Laravel') }}
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<!-- Left Side Of Navbar -->
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="{{ route('products.index') }}"><i class="fa fa-book mr-1"></i>商品一覧</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="{{ route('categories.index') }}"><i class="fa fa-book mr-1"></i>カテゴリから探す</a>
					</li>

				</ul>

				<!-- Right Side Of Navbar -->
				<ul class="navbar-nav ml-auto">
					<!-- Authentication Links -->

					<!-- 検索フォーム -->
						<li class="nav-item">
							<form method="GET" action="{{ route('products.index') }}" class="form-inline my-2 my-lg-0">
								<input class="form-control mr-sm-2" name="search" type="search" placeholder="キーワードから探す" aria-label="Search">
								<button class="btn btn-outline-success my-2 my-sm-0" type="submit">商品検索</button>
							</form>
						</li>
					<!-- 検索フォーム end -->

					@guest
						<li class="nav-item">
							<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
						</li>
						@if (Route::has('register'))
							<li class="nav-item">
								<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
							</li>
						@endif
					@else
						<li class="nav-item dropdown">
							<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
								{{ Auth::user()->name }} <span class="caret"></span>
							</a>

							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="{{ route('logout') }}"
									onclick="event.preventDefault();
													document.getElementById('logout-form').submit();">
									{{ __('Logout') }}
								</a>

								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									@csrf
								</form>
							</div>
						</li>
					@endguest

				</ul>
			</div>
		</div>
	</nav>

	<main class="py-4">
		@yield('content')
	</main>
</div>