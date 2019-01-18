{{-- 
	This is the page users will land on when their donation has gone through. Feel free to edit this to your liking.
	I have already set up a basic template.
--}}
@extends('layouts/simple', ['pageTitle' => 'Success'])

@section('content')
<article class="message is-success has-margin-t-xl">
	<div class="message-header">
		<p>Success</p>
	</div>
	<div class="message-body">
		<p>
			Your donation has been accepted!
		</p>
		<p>
			Please allow up to an hour for the servers to refresh. If you have not received your perks within an hour please contact <a href="https://steamcommunity.com/profiles/76561198123484662"><span class="mdi mdi-steam"></span> Serket</a> or <a href="https://steamcommunity.com/profiles/76561198043790590"><span class="mdi mdi-steam"></span> Strider</a>.
		</p>
		<p class="has-margin-t-lg">
			<a href="{{ route('index') }}">Return to home</a>
		</p>
	</div>
</article>
@endsection