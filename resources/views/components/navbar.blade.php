<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
	<div class="container">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item">
				<a class="nav-link" href="{{ route('index') }}"><span class="mdi mdi-home"></span> Home</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown">
					<span class="mdi mdi-server"></span> TF2 Servers
				</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="/sourcebans">SourceBans</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="{{ route('play', [urlencode('192.223.26.238:27015')]) }}">Silly Server #1</a>
					<a class="dropdown-item" href="{{ route('play', [urlencode('192.223.26.238:27016')]) }}">Silly Server #2</a>
					<a class="dropdown-item" href="{{ route('play', [urlencode('192.223.26.238:27017')]) }}">The Lazy Pub</a>
					<a class="dropdown-item" href="{{ route('play', [urlencode('192.223.26.238:27018')]) }}">Special Game Mode</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="https://steamcommunity.com/groups/LazyServers">Steam Group</a>
					<a class="dropdown-item" href="https://discordapp.com/invite/3RApxhq">Discord Server</a>
					<a class="dropdown-item" href="http://192.223.26.238/fastdl/">Fast DL</a>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown">
					<span class="mdi mdi-emoticon-excited"></span> For the Fans
				</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="https://www.youtube.com/user/XLazyPurpleX">YouTube</a>
					<a class="dropdown-item" href="https://www.youtube.com/channel/UCxgH-FFZsG7H8Cn-v9NAshg">YouTube #2</a>
					<a class="dropdown-item" href="https://discordapp.com/invite/mW5jSWd">Discord Server</a>
					<a class="dropdown-item" href="https://twitter.com/LazyandPurple">Twitter</a>
					<a class="dropdown-item" href="https://www.patreon.com/LazyPurple/overview">Patreon</a>
					<a class="dropdown-item" href="https://steamcommunity.com/groups/LazyPurple">Steam Group</a>
				</div>
			</li>
		</ul>
	</div>
</nav>