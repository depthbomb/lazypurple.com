{{-- 
	This is the server "gate". An interstitial page that will transition the user to the server.
	It uses the Steam Browser Protocol to run the "connect" command. It will automatically run TF2
	and connect to the server specified when the game loads. Neat, huh?
--}}
@extends('layouts/simple', ['pageTitle' => 'Connecting to ' . $data['name']])

@push('head:js')
<script type="text/javascript">
	setTimeout(function() {
		window.location.href = "{{ $data['connect_url'] }}";
	}, (11*1000));
</script>
@endpush

@section('content')
<article class="message is-primary has-margin-t-xl">
	<div class="message-header">
		<p>Connecting to {{ $data['name'] }}</p>
	</div>
	<div class="message-body">
		<p>
			You are on your way to <strong>{{ $data['name'] }}</strong>!
		</p>
		<p>
			You will automatically be connected in 10 seconds. If you are not connected by that time, click the button below to join manually.
		</p>
		<div class="columns is-centered has-margin-t-lg">
			<div class="column is-half">
				<a href="{{ $data['connect_url'] }}" class="button is-primary is-fullwidth is-medium">
					Play
				</a>
				<a href="{{ route('index') }}" class="button is-fullwidth is-small has-margin-t-sm">
					Return to home
				</a>
			</div>
		</div>
	</div>
</article>
@endsection