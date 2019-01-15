@extends('layouts/global', ['pageTitle' => 'Rules'])

@section('content')
<article class="message is-primary">
	<div class="message-header">
		<p>Rules &amp; Server Info</p>
	</div>
	<div class="message-body content">
		{{--
			Hello, maintainer! This is where you would put the content of this page pertaining to server rules and server info.
			this section requires basic HTML knowledge to make something pretty. If you are into more advanced HTML, you can further
			customize this page using the available CSS framework (Bulma, located here: https://bulma.io/documentation/).

			I've written up a little example down below that should help get you started.

			(This comment will not be visible to others, it will only appear here in this code.)
		--}}
		<h1 class="is-size-3">
			Server Info
		</h1>
		<p>
			Lorem ipsum dolor sit amet consectetur adipisicing elit. At, necessitatibus sunt sit aliquid autem nostrum doloribus quas odio qui in adipisci, iure sint illo quibusdam quis laboriosam eveniet id expedita saepe. Autem eaque quidem velit animi neque quasi asperiores, saepe fugit maiores nemo, nisi laudantium dicta consequuntur corporis deleniti odio! Quam quod numquam tenetur consectetur cumque ipsam magnam qui amet rerum quibusdam, enim deserunt hic, sequi voluptatibus asperiores pariatur debitis corrupti minima eligendi aliquid libero ex fugiat nesciunt. Blanditiis placeat modi mollitia praesentium quas veniam. Reprehenderit explicabo dolorum eaque mollitia repellat sapiente aliquam, nobis, et ullam iste numquam. In, consequatur?
		</p>
		<h1 class="is-size-3">
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
</article>
@endsection