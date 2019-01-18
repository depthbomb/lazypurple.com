@extends('layouts/global', ['pageTitle' => 'Donator Perks'])

@section('content')
<article class="message is-primary">
	<div class="message-header">
		<p>Donator Perks</p>
	</div>
	<div class="message-body content">
		{{--
			Hello, maintainer! This is where you would put the content of this page pertaining to donor perks and other info.
			this section requires basic HTML knowledge to make something pretty. If you are into more advanced HTML, you can further customize this page using the available CSS framework (Bulma, located here: https://bulma.io/documentation/).

			I've written up a little example down below that should help get you started.

			(This comment will not be visible to others, it will only appear here in this code.)
		--}}
		<h1 class="is-size-3">
			Available Perks
		</h1>

		<div class="columns">
			<div class="column">
				<h3>Server #1</h3>
				<ul>
					<li>Perk item</li>
					<li>Perk item</li>
					<li>Perk item</li>
					<li>Perk item</li>
					<li>Perk item</li>
					<li>Perk item</li>
				</ul>
			</div>
			<div class="column">
				<h3>Server #2</h3>
				<ul>
					<li>Perk item</li>
					<li>Perk item</li>
					<li>Perk item</li>
					<li>Perk item</li>
					<li>Perk item</li>
					<li>Perk item</li>
				</ul>
			</div>
			<div class="column">
				<h3>Server #3</h3>
				<ul>
					<li>Perk item</li>
					<li>Perk item</li>
					<li>Perk item</li>
					<li>Perk item</li>
					<li>Perk item</li>
					<li>Perk item</li>
				</ul>
			</div>
			<div class="column">
				<h3>Server #4</h3>
				<ul>
					<li>Perk item</li>
					<li>Perk item</li>
					<li>Perk item</li>
					<li>Perk item</li>
					<li>Perk item</li>
					<li>Perk item</li>
				</ul>
			</div>
		</div>

		{{-- <ul>
			<li>AFK Immunity</li>
			<ul>
				<li>Commands: none</li>
				<li>Description</li>
			</ul>
			<li>Be the Robot</li>
			<ul>Commands: /robot and /betherobot
				<li>Allows you to switch into the Mann VS Machine robot equivalent of your current class. To revert back simply use the command again.</li>
			</ul>
			<li>Bonus Round Immunity</li>
			<ul>Commands: none
				<li>Description</li>
			</ul>
			<li>Bumper Cars</li>
			<ul>Commands: 
				<li>Description</li>
			</ul>
			<li>Colored Name</li>
			<ul>Commands: none
				<li>Description</li>
			</ul>
			<li>Colorize Yourself</li>
			<ul>Commands: 
				<li>Description</li>
			</ul>
			<li>Footprints</li>
			<ul>Commands: 
				<li>Description</li>
			</ul>
			<li>Glowing Effect</li>
			<ul>Commands: 
				<li>Description</li>
			</ul>
			<li>Halloween Footprints</li>
			<ul>Commands: 
				<li>Description</li>
			</ul>
			<li>Heavy Cakes</li>
			<ul>Commands: 
				<li>Description</li>
			</ul>
			<li>Rainbow Outline</li>
			<ul>Commands: 
				<li>Description</li>
			</ul>
			<li>Reserved Slot</li>
			<ul>Commands: none
				<li>Description</li>
			</ul>
			<li>Resize Head & Body</li>
			<ul>Commands: 
				<li>Description</li>
			</ul>
			<li>Respawn Sound & Effect</li>
			<ul>Commands: 
				<li>Description</li>
			</ul>
			<li>Skeleton Sniper</li>
			<ul>Commands: 
				<li>Description</li>
			</ul>
			<li>Spakles</li>
			<ul>Commands: 
				<li>Description</li>
			</ul>
			<li>Stun Self</li>
			<ul>Commands: 
				<li>Description</li>
			</ul>
			<li>Taunt Speed</li>
			<ul>Commands: 
				<li>Description</li>
			</ul>
			<li>Unlimited Voice Commands</li>
			<ul>Commands: none
				<li>Description</li>
			</ul>
		</ul> --}}
		<hr>
		<a class="button is-success is-fullwidth is-large" href="/donate">
			Donate
		</a>
	</div>
</article>
@endsection