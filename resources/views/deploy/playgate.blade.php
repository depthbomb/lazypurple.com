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
<div class="mt-5 card border border-primary">
	<div class="card-header text-white bg-primary">
		Connecting to {{ $data['name'] }}
	</div>
	<div class="card-body">
		<p class="lead">
			You are on your way to <strong>{{ $data['name'] }}</strong>!
		</p>
		<p>
			You will automatically be connected in 10 seconds. If you are not connected by that time, click the button below to join manually.
		</p>
		<div class="row">
			<div class="col-lg-8 mx-auto">
				<a href="{{ $data['connect_url'] }}" class="btn btn-primary btn-block btn-lg">
					Play
				</a>
				<a href="{{ route('index') }}" class="mt-1 btn btn-block btn-sm">
					Return to home
				</a>
			</div>
		</div>
	</div>
</div>
@endsection