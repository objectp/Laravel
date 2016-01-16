@extends('htmlMasterPage')

@section('content')

	@if(count($people))
		<h1>About</h1>
		<h3>People I like: </h3>

		<ul>
			@foreach($people as $person)

				<li> {{ $person }} </li>
			@endforeach
		</ul>
	@endif
@stop
