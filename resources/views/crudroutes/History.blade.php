{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('id_user', 'Id_user:') }}
			{{ Form::text('id_user') }}
		</li>
		<li>
			{{ Form::label('id_restaurant', 'Id_restaurant:') }}
			{{ Form::text('id_restaurant') }}
		</li>
		<li>
			{{ Form::label('id_order', 'Id_order:') }}
			{{ Form::text('id_order') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}