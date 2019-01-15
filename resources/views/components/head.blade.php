<meta name="description" content="{{ config('lazypurple.info.description') }}">
<meta name="theme-color" content="#4b06a1">
<meta name="url" content="{{ route('index') }}">
<meta name="referrer" content="unsafe-url">
<link rel="canonical" content="{{ route('index') }}">

<meta name="google" content="notranslate">

<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-title" content="{{ config('lazypurple.info.name') }}">
<meta name="apple-mobile-web-app-status-bar-style" content="black">

<meta name="application-name" content="{{ config('lazypurple.info.name') }}">
<meta name="msapplication-starturl" content="{{ route('index') }}">
<meta name="msapplication-tooltip" content="{{ config('lazypurple.info.description') }}">
<meta name="msapplication-TileColor" content="#4b06a1">
<meta name="msapplication-navbutton-color" content="#4b06a1">

<meta property="og:site_name" content="{{ config('lazypurple.info.name') }}">
<meta property="og:locale" content="en_US">

<!--[if lt IE 9]><link rel="shortcut icon" type="image/x-icon" href="{{ bust('/favicon.ico') }}">-->
<link rel="icon" type="image/ico" href="{{ bust('/favicon.ico') }}">

<link rel="stylesheet" href="{{ rev('/assets/css/app.css') }}" type="text/css">
@stack('head:css')
@stack('head:js')