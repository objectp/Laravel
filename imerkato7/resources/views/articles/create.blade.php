@extends('layouts.app')

@section('content')
<div class="container spark-screen">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Write a New Article</div>

                {{-- <div class="panel-body">
                    Your Application's Landing Page.
                </div> --}}
                {!! Form::open(['url' => 'articles']) !!}

					@include ('articles.form', ['submitButtonText' => 'Add Article'])

				{!! Form::close() !!}

				
				@include ('errors.list')
            </div>
        </div>
    </div>
</div>
@endsection
