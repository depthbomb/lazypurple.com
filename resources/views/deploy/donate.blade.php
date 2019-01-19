@extends('layouts/global', ['pageTitle' => 'Donor Perks'])

{{--
	Hello, maintainer! This is where you would put the content of this page pertaining to donor perks and other info.
	this section requires basic HTML knowledge to make something pretty. If you are into more advanced HTML, you can further customize this page using the available CSS framework (Bootstrap, located here: https://getbootstrap.com/docs/4.2/getting-started/introduction/).

	I've written up a little example down below that should help get you started.

	(This comment will not be visible to others, it will only appear here in this code.)
--}}

@section('content')
<div class="card border border-primary">
	<div class="card-header bg-primary text-white">
		Donor Perks
	</div>
	<div class="card-header">
		<ul class="nav nav-tabs card-header-tabs" role="tablist">
			<li class="nav-item">
				<a class="nav-link active" data-toggle="tab" href="#s1" role="tab">The Silly Servers</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#s2" role="tab">The Lazy Pub Server</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#s3" role="tab">The MvM Server</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#s4" role="tab">The Special Server</a>
			</li>
		</ul>
	</div>
	<div class="card-body">
		<div class="tab-content">
			<div class="tab-pane fade show active" id="s1" role="tabpanel">
				<ul>
					<li>AFK Immunity</li>
					<li>Be the Robot</li>
					<li>Bonus Round Immunity</li>
					<li>Bumper Car</li>
					<li>Colored Name</li>
					<li>Colorize Yourself</li>
					<li>Glowing Effect</li>
					<li>Halloween Footprints</li>
					<li>Heavy Cakes</li>
					<li>Rainbow Glow</li>
					<li>Reserved Slot</li>
					<li>Resize Head & Body</li>
					<li>Respawn Sound & Effect</li>
					<li>Skeleton Sniper</li>
					<li>Sparkly Head & Feet</li>
					<li>Stun Self</li>
					<li>Taunt Speed</li>
					<li>Unlimited Voice Commands</li>
				</ul>
			</div>
			<div class="tab-pane fade" id="s2" role="tabpanel">
				<ul>
					<li>AFK Immunity</li>
					<li>Colored Name</li>
					<li>Reserved Slot</li>
				</ul>
			</div>
			<div class="tab-pane fade" id="s3" role="tabpanel">
				<ul>
					<li>Be the Robot</li>
					<li>Colored Name</li>
					<li>Colorize Yourself</li>
					<li>Glowing Effect</li>
					<li>Halloween Footprints</li>
					<li>Heavy Cakes</li>
					<li>Rainbow Glow</li>
					<li>Respawn Sound & Effect</li>
					<li>Skeleton Sniper</li>
					<li>Sparkly Head & Feet</li>
					<li>Taunt Speed</li>
					<li>Unlimited Voice Commands</li>
				</ul>
			</div>
			<div class="tab-pane fade" id="s4" role="tabpanel">
				<ul>
					<li>AFK Immunity</li>
					<li>Be the Robot</li>
					<li>Colored Name</li>
					<li>Glowing Effect</li>
					<li>Reserved Slot</li>
					<li>Resize Head</li>
					<li>Respawn Sound & Effect</li>
					<li>Skeleton Sniper</li>
					<li>Taunt Speed</li>
					<li>Unlimited Voice Commands</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="card-body">
		<a class="btn btn-success btn-block btn-lg" href="/donate">
			Donate
		</a>
	</div>
	<div class="card-body">
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Perk</th>
					<th>Command(s)</th>
					<th>Description</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>AFK Immunity</td>
					<td>None</td>
					<td>Self-explanatory</td>
				</tr>
				<tr>
					<td>Be the Robot</td>
					<td><kbd>/robot</kbd> or <kbd>/betherobot</kbd></td>
					<td>Allows you to switch into the Mann VS Machine robot equivalent of your current class. To revert back simply use the command again.</td>
				</tr>
				<tr>
					<td>Bonus Round Immunity</td>
					<td>None</td>
					<td>Self-explanatory</td>
				</tr>
				<tr>
					<td>Bumper Car</td>
					<td>Command</td>
					<td>Description</td>
				</tr>
				<tr>
					<td>Colored Name</td>
					<td>Command</td>
					<td>Description</td>
				</tr>
				<tr>
					<td>Colorize Yourself</td>
					<td>Command</td>
					<td>Description</td>
				</tr>
				<tr>
					<td>Glowing Effect</td>
					<td>Command</td>
					<td>Description</td>
				</tr>
				<tr>
					<td>Halloween Footprints</td>
					<td>Command</td>
					<td>Description</td>
				</tr>
				<tr>
					<td>Heavy Cakes</td>
					<td>Command</td>
					<td>Description</td>
				</tr>
				<tr>
					<td>Rainbow Glow</td>
					<td>Command</td>
					<td>Description</td>
				</tr>
				<tr>
					<td>Reserved Slot</td>
					<td>Command</td>
					<td>Description</td>
				</tr>
				<tr>
					<td>Resize Head & Body</td>
					<td>Command</td>
					<td>Description</td>
				</tr>
				<tr>
					<td>Respawn Sound & Effect</td>
					<td>Command</td>
					<td>Description</td>
				</tr>
				<tr>
					<td>Skeleton Sniper</td>
					<td>Command</td>
					<td>Description</td>
				</tr>
				<tr>
					<td>Sparkly Head & Feet</td>
					<td>Command</td>
					<td>Description</td>
				</tr>
				<tr>
					<td>Stun Self</td>
					<td>Command</td>
					<td>Description</td>
				</tr>
				<tr>
					<td>Taunt Speed</td>
					<td>Command</td>
					<td>Description</td>
				</tr>
				<tr>
					<td>Unlimited Voice Commands</td>
					<td>Command</td>
					<td>Description</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
@endsection