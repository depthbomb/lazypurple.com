<nav class="navbar is-primary" role="navigation">
	<div class="container">
		<div class="navbar-menu">
			<div class="navbar-start">
				<a class="navbar-item" href="{{ route('index') }}">
					<span class="mdi mdi-home"></span> Home
				</a>
				<div class="navbar-item has-dropdown is-hoverable">
					<a class="navbar-link">
						<span class="mdi mdi-server"></span> TF2 Servers
					</a>
					<div class="navbar-dropdown">
						<a class="navbar-item" href="/sourcebans">
							SourceBans
						</a>
						<div class="navbar-divider"></div>
						<a class="navbar-item" href="{{ route('play', [urlencode('192.223.26.238:27015')]) }}">
							Silly Server #1
						</a>
						<a class="navbar-item" href="{{ route('play', [urlencode('192.223.26.238:27016')]) }}">
							Silly Server #2
						</a>
						<a class="navbar-item" href="{{ route('play', [urlencode('192.223.26.238:27017')]) }}">
							The Lazy Pub
						</a>
						<a class="navbar-item" href="{{ route('play', [urlencode('192.223.26.238:27019')]) }}">
							Special Game Mode
						</a>
						<div class="navbar-divider"></div>
						<a class="navbar-item" href="https://steamcommunity.com/groups/LazyServers">
							Steam Group
						</a>
						<a class="navbar-item" href="https://discordapp.com/invite/3RApxhq">
							Discord Server
						</a>
						<a class="navbar-item" href="http://192.223.26.238/fastdl/">
							Fast DL
						</a>
					</div>
				</div>
				<div class="navbar-item has-dropdown is-hoverable">
					<a class="navbar-link">
						<span class="mdi mdi-emoticon-excited"></span> For the Fans
					</a>
					<div class="navbar-dropdown">
						<a class="navbar-item" href="https://www.youtube.com/user/XLazyPurpleX">
							YouTube
						</a>
						<a class="navbar-item" href="https://www.youtube.com/channel/UCxgH-FFZsG7H8Cn-v9NAshg">
							YouTube #2
						</a>
						<a class="navbar-item" href="https://discordapp.com/invite/mW5jSWd">
							Discord Server
						</a>
						<a class="navbar-item" href="https://twitter.com/LazyandPurple">
							Twitter
						</a>
						<a class="navbar-item" href="https://www.patreon.com/LazyPurple/overview">
							Patreon
						</a>
						<a class="navbar-item" href="https://steamcommunity.com/groups/LazyPurple">
							Steam Group
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</nav>