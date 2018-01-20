{{ Form::open(array('route' => 'meal.create', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('promotion', 'Promotion:') }}
			{{ Form::text('promotion') }}
		</li>
		<li>
			{{ Form::label('id_category', 'Id_category:') }}
			{{ Form::text('id_category') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}