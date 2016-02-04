@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit House</div>
                <div class="panel-body">
                    {{-- <form class="form-horizontal" role="form" method="POST" action="{{ url('/houses') }}"> --}}
                    {!! Form::model($house, ['method' => 'PATCH','class' => 'form-horizontal','action' => ['HousesController@update', $house->id]]) !!}
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Category</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="category" value="{{ $house->category }}" >

                                @if ($errors->has('category'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('category') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Type</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="type" value="{{ $house->type }}">

                                @if ($errors->has('type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Title</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="title" value="{{ $house->title }}">

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('pirce') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Pirce</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="pirce" value="{{ $house->price }}">

                                @if ($errors->has('pirce'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pirce') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('currency_type') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Currency Type</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="currency_type" value="{{ $house->currency_type }}">

                                @if ($errors->has('currency_type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('currency_type') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('detail') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Detail</label>

                            <div class="col-md-6">
                                <input type="textarea" class="form-control" name="detail" value="{{ $house->detail }}">

                                @if ($errors->has('detail'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('detail') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i></i>Edit House
                                </button>
                            </div>
                        </div>
                    {{-- </form> --}}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection