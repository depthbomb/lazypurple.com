{{-- 
	This is the page users will land on when their donation has failed.
	You should add some useful info here to help the user solve the problem.
--}}
@extends('layouts/simple', ['pageTitle' => 'An error has occurred'])

@section('content')
<article class="message is-danger has-margin-t-xl">
	<div class="message-header">
		<p>An error has occurred</p>
	</div>
	<div class="message-body">
		<p>
			There was a problem processing your donation. It might be a good idea to contact a staff member to help solve this issue.
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