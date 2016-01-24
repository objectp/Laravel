@extends('masterHtml')


@section('content')

<h1>Houses</h1>

	@foreach ($houses as $house)
		<house>
		    {{-- three options two pass value through href --}}

			{{-- <h2><a href="/houses/{{ $house->id }}"> {{ $house->title }} </a></h2> --}}
			{{-- <h2><a href="{{ action('housesController@show', [$house->id])}}"> {{ $house->title }} </a></h2> --}}
			<h2><a href="{{ url('/houses', $house->id)}}"> {{ $house->title }} </a></h2>

			<div class="detail">{{ $house->detail }}</div>
		</house>
	@endforeach

@stop