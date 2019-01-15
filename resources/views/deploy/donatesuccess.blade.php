{{-- 
	This is the page users will land on when their donation has gone through. Feel free to edit this to your liking.
	I have already set up a basic template.
--}}
@extends('layouts/simple', ['pageTitle' => 'Thank you for your donation!'])

@section('content')
<article class="message is-success has-margin-t-xl">
	<div class="message-header">
		<p>Thank you for your donation!</p>
	</div>
	<div class="message-body">
		<p>
			Thank you for your donation!
		</p>
		<p>
			Some useful info or anything else you wanna say.
		</p>
		<p class="has-margin-t-lg">
			<a href="{{ route('index') }}">Return to home</a>
		</p>
	</div>
</article>
@endsection