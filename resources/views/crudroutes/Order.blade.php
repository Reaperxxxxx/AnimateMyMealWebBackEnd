{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('id_instance', 'Id_instance:') }}
			{{ Form::text('id_instance') }}
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