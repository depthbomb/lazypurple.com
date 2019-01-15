<!doctype html>@include('components/credit')
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width,maximum-scale=1.0,minimum-scale=1.0,initial-scale=1.0,user-scalable=no">
		<title>{{ isset($pageTitle) ? htmlentities($pageTitle) . ' - ' . config('lazypurple.info.name') : config('lazypurple.info.name') }}</title>
		@include('components/head')
	</head>
	<body id="global-layout" class="{{ isset($bodyClass) ? $bodyClass : '🐐' }}">
		<div class="app container">
			@yield('content')
		</div>
	</body>
</html>