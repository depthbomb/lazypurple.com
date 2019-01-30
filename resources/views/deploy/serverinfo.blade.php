@extends('layouts/global', ['pageTitle' => 'Rules'])

{{--
	Hello, maintainer! This is where you would put the content of this page pertaining to server rules and server info.
	this section requires basic HTML knowledge to make something pretty. If you are into more advanced HTML, you can further
	customize this page using the available CSS framework (Bootstrap, located here: https://getbootstrap.com/docs/4.2/getting-started/introduction/).

	I've written up a little example down below that should help get you started.

	(This comment will not be visible to others, it will only appear here in this code.)
--}}

@section('content')
<div class="mx-auto mb-5" style="width: 85%;">
	<div id="servers">
		<h3 class="mb-0 text-white text-center">
			Loading&hellip;
		</h3>
	</div>
</div>
<div class="container">
	<div class="card border border-primary">
		<div class="card-header text-white bg-primary">
			Rules &amp; Server Info
		</div>
		<div class="card-body">
			<h1>
				Server Info
			</h1>
			<p>
				Coming real soon!
			</p>
			<h1>
				Server Rules
			</h1>
			<ul>
				<li>Rule 1</li>
				<li>Rule 2</li>
				<li>Rule 3</li>
				<ul>
					<li>Nested rule 3 item</li>
				</ul>
				<li>Rule 4</li>
			</ul>
		</div>
	</div>
</div>
@endsection