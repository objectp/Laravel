@extends('masterHtml')


@section('content')

<h1>{{ $house->title }}</h1>

	<house>
		{{ $house->detail }}

	</house>
		

@stop