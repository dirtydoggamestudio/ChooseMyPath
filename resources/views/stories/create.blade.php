@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1>Create Your Story</h1>
                <br>
                {!! Form::open(['method'=>'POST', 'action'=>'StoryController@store']) !!}

                    <div class="form-group">
                        <h3>Title:</h3>
                        {{--{!! Form::label('title', '') !!}--}}
                        {!! Form::text('title', null, ['class' => 'form-control col-3', 'rows'=>4]) !!}
                    </div>
                <br>
                    <div class="form-group">
                        <h3>Description:</h3>
                        {{--{!! Form::label('title', '') !!}--}}
                        {!! Form::textarea('description', null, ['class' => 'form-control col-8', 'rows'=>6]) !!}
                    </div>

                <div class="form-group">
                    {!! Form::submit('Create Story', ['class' => 'btn btn-primary btn-lg']) !!}
                </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
