<?php
/**
 *
 * Description
 *
 * @package        Consonance
 * @category       View
 * @author         Michael Akanji <matscode@gmail.com> {@link http://michaelakanji.com}
 * @date           2017-10-18
 *
 */
?>
<html>

	<head>
		<title>Consonance - @yield('title')</title>

		@push('metas')
		{{--Default Meta Data--}}
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		@endpush

		@push('styles')
		{{--Default CSS Files--}}
		<link rel="stylesheet" href="/css/bootstrap.css">
		<link rel="stylesheet" href="/css/font-awesome.min.css">
		<link rel="stylesheet" href="/css/style.css">
		{{--Using png as a fix for favicon ico format--}}
		<link rel="icon" href="/images/logo-32x33.png">
		@endpush

		@push('scripts')
		{{--Default Javascript Files--}}
		<script src="/js/jquery-3.1.1.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
		<script src="/js/angular.min.js"></script>
		<script src="/js/holder.min.js"></script>
		@endpush

		@push('scripts')
		{{--HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries--}}
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		@endpush

		{{--Additional Meta Data Current--}}
		@stack('metas')
		{{-- CSS Definitions --}}
		@stack('styles')
		{{-- Client Side Scripts--}}
		@stack('scripts')

	</head>

	<body>
		{{--bring in the nav bar--}}
		@include('Elements.navigation')

		<div class="container">

			@yield('content')

		</div>

		{{--call on footer--}}
		@include('Elements.footer')
	</body>
</html>