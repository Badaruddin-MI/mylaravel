<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" href="{!! asset('css/a.css') !!}" media="screen">
</head>
<body>
	<header>
		@include('layout.header')
	</header>
<div class="vid-container">
  <div class="inner-container">
     <div class="box">
	<ul>
		@section('sidebar')
		<li>HTML</li>
		<li>CSS</li>
		<li>JS</li>
		@show
	</ul>

	<footer>
		@yield('content')
	</footer>
     </div>
  </div>
</div>
</body>
</html>