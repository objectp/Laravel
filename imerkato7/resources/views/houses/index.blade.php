@extends('layouts.app')

@section('content')
	<div class="container spark-screen">
	    <div class="row">
	        <div class="col-md-10 col-md-offset-1">
	            <div class="panel panel-default">
	                <div class="panel-heading">Houses</div>

						@foreach ($houses as $house)
							<house>
							    {{-- three options two pass value through href --}}

								{{-- <h2><a href="/houses/{{ $house->id }}"> {{ $house->title }} </a></h2> --}}
								{{-- <h2><a href="{{ action('housesController@show', [$house->id])}}"> {{ $house->title }} </a></h2> --}}
								<h2><a href="{{ url('/houses', $house->id)}}"> {{ $house->title }} </a></h2>

								<div class="detail">{{ $house->detail }}</div>
							</house>
						@endforeach
		
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
@endsection