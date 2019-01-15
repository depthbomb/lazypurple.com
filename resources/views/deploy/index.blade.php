@extends('layouts/global', ['pageTitle' => 'Home'])

@section('content')
<div class="columns">
	<div class="column">
		<a class="button is-primary is-huge is-slanted is-fullwidth" href="{{ route('serverinfo') }}">
			<span class="slanted-content has-text-weight-bold">
				<span class="mdi mdi-information"></span> Rules &amp; Info
			</span>
		</a>
	</div>
	<div class="column">
		<a class="button is-primary is-huge is-slanted is-fullwidth" href="{{ route('donate') }}">
			<span class="slanted-content has-text-weight-bold">
				<span class="mdi mdi-heart"></span> Donate
			</span>
		</a>
	</div>
</div>
@endsection