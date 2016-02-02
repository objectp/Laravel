
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create House</div>

                <div class="panel-body">
                    
                        {!! csrf_field() !!}

                              <div class="panel-heading">Insert new house</div>

                        {!! Form::open(['url' => 'houses']) !!}
            
                              @include ('houses.form', ['submitButtonText' => 'Add House'])

                        {!! Form::close() !!}


                        @include('errors.list')
            
                      </div>
                 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection





{{-- $table->increments('id');
            $table->integer('user_id');
            $table->string('user_username');
            $table->string('user_email');
            $table->string('country');
            $table->string('state');
            $table->string('city');

            $table->string('category');
            $table->string('type');
            $table->string('title');
            $table->decimal('price', 5,2);
            $table->string('currency_type');
            $table->text('detail');
            $table->string('contact_imerkato');
            $table->string('contact_phone');
            $table->string('image_path');

            $table->string('thumb_path');
            $table->timestamps(); --}}