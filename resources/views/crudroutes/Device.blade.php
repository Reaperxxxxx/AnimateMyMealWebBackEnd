{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('id_restaurant', 'Id_restaurant:') }}
			{{ Form::text('id_restaurant') }}
		</li>
		<li>
			{{ Form::label('id_employee', 'Id_employee:') }}
			{{ Form::text('id_employee') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}