@extends('layouts.app')

@section('content')
<div class="container spark-screen">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>Edit {!! $article->title !!}</h1></div>

                {{-- <div class="panel-body">
                    You are logged in!
                </div> --}}
                {{-- form model binding is used to bind elequent with form so it auto fill the form change open to model--}}
				{{--{!! Form::open(['method' => 'PATCH', 'action' => ['ArticlesController@update', $article->id]]) !!} --}}
				{!! Form::model($article, ['method' => 'PATCH', 'action' => ['ArticlesController@update', $article->id]]) !!}

					@include ('articles.form', ['submitButtonText' => 'Update Article'])


				{!! Form::close() !!}


				@include('errors.list')
            </div>
        </div>
    </div>
</div>
@endsection