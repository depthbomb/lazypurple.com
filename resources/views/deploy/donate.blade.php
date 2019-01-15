@extends('layouts/global', ['pageTitle' => 'Donor Perks'])

@section('content')
<article class="message is-primary">
	<div class="message-header">
		<p>Donor Perks</p>
	</div>
	<div class="message-body content">
		{{--
			Hello, maintainer! This is where you would put the content of this page pertaining to donor perks and other info.
			this section requires basic HTML knowledge to make something pretty. If you are into more advanced HTML, you can further
			customize this page using the available CSS framework (Bulma, located here: https://bulma.io/documentation/).

			I've written up a little example down below that should help get you started.

			(This comment will not be visible to others, it will only appear here in this code.)
		--}}
		<h1 class="is-size-3">
			Available Perks
		</h1>
		<ul>
			<li>Perk 1</li>
			<li>Perk 2</li>
			<li>Perk 3</li>
			<ul>
				<li>Nested perk 3 item</li>
			</ul>
			<li>Perk 4</li>
		</ul>
		<hr>
		<a class="button is-success is-fullwidth is-large" href="/donate">
			Donate
		</a>
	</div>
</article>
@endsection