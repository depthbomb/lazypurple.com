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
			Your donation was not accepted!
		</p>
		<p>
			There was a problem processing your donation. Please try again later and if the problem persists contact <a href="https://steamcommunity.com/profiles/76561198123484662"><span class="mdi mdi-steam"></span> Serket</a> or <a href="https://steamcommunity.com/profiles/76561198043790590"><span class="mdi mdi-steam"></span> Strider</a> for alternate methods of donating.
		</p>
		<p class="has-margin-t-lg">
			<a href="{{ route('index') }}">Return to home</a>
		</p>
	</div>
</article>
@endsection