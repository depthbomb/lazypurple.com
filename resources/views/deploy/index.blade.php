@extends('layouts/global', ['pageTitle' => 'Home'])

@section('content')
	<div class="row">
		<div class="col-lg-6">
			<a class="py-3 btn btn-primary btn-block btn-lg is-slanted" href="{{ route('serverinfo') }}">
				<span class="slanted-content h1 mb-0">
					<span class="mdi mdi-information"></span> Rules &amp; Info
				</span>
			</a>
		</div>
		<div class="col-lg-6">
			<a class="py-3 btn btn-primary btn-block btn-lg is-slanted" href="{{ route('donate') }}">
				<span class="slanted-content h1 mb-0">
					<span class="mdi mdi-heart"></span> Donate
				</span>
			</a>
		</div>
	</div>
@endsection