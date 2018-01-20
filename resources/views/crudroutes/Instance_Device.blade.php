{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('id_user', 'Id_user:') }}
			{{ Form::text('id_user') }}
		</li>
		<li>
			{{ Form::label('id_device', 'Id_device:') }}
			{{ Form::text('id_device') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}