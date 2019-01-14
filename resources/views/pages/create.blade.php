@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1>Create Your Story</h1>
                <br>
                {!! Form::open(['method'=>'POST', 'action'=>'PageController@store']) !!}

                    <div class="form-group">
                        <h3>Ask your readers a question:</h3>
                        {!! Form::text('question', null, ['class' => 'form-control col-3', 'rows'=>4]) !!}
                    </div>
                    <div class="form-group">
                        <h3>Explain the question:</h3>
                        {!! Form::textarea('explanation', null, ['class' => 'form-control col-8', 'rows'=>6]) !!}
                    </div>
                    <div class="form-group">
                        <h3>Enter Choice #1 for your readers:</h3>
                        {!! Form::text('choice1', null, ['class' => 'form-control col-3', 'rows'=>4]) !!}
                    </div>
                    <div class="form-group">
                        <h3>Enter Choice #2 for your readers:</h3>
                        {!! Form::text('choice2', null, ['class' => 'form-control col-3', 'rows'=>4]) !!}
                    </div>
                    <div class="form-group">
                        <h3>Enter the Youtube video ID:</h3>
                        {!! Form::text('choice2', null, ['class' => 'form-control col-3', 'rows'=>4]) !!}
                    </div>
                    <div class="form-group">
                        <h3>Enter the video start time:</h3>
                        {!! Form::text('video_start', null, ['class' => 'form-control col-3', 'rows'=>4]) !!}
                    </div>
                    <div class="form-group">
                        <h3>Enter the video stop time:</h3>
                        {!! Form::text('video_stop', null, ['class' => 'form-control col-3', 'rows'=>4]) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Add Page', ['class' => 'btn btn-primary btn-lg']) !!}
                    </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
