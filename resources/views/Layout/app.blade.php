<!DOCTYPE html>
<html>
	<head>
		<link href="{{ URL::to('css/app.css')}}" rel="stylesheet">	
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<style type="text/css">
		body {
			padding: 20px;
		}
	</style>
</head>

<body>
	<div class="container">
		@component('navbar', ["current" => $current] )
		@endcomponent('navbar')
		<main role="main">
			@hasSection('body')
				@yield('body')
			@endif
		</main>
	</div>

	<script src="{{ asset('js\app.js') }}" type="text/javascript"></script>
</body>
</html>