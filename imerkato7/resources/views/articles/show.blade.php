@extends('layouts.app')

@section('content')
<div class="container spark-screen">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>{{ $article->title }}</h1></div>

                {{-- <div class="panel-body">
                    Your Application's Landing Page.
                </div> --}}


				<article>
					{{ $article->body }}

				</article>
            </div>
        </div>
    </div>
</div>
@endsection