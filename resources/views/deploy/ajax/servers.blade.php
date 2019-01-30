<div class="row">
	@foreach ($servers as $ip => $info)
	<div class="col-3">
		<div class="card border-primary">
			<div class="card-header text-white text-center bg-primary">
				{{ $info['hostname'] }}
			</div>
			<div class="card-body text-center">
				<p>
					{{ $info['map'] }}
				</p>
				<a href="{{ route('play', [urlencode($ip)]) }}" class="btn btn-primary btn-sm btn-block">
					Join - {{ $info['gq_numplayers'] }}/{{ $info['gq_maxplayers'] }}
				</a>
			</div>
		</div>
	</div>
	@endforeach
</div>