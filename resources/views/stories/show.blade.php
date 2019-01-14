@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <h1>{{ $story->title }}</h1>
                <p>{{ $story->description }}</p>

                @if($pages)
                    <h3>Pages</h3>
                    @foreach($pages as $page)
                        <p>ID: {{ $page->id }} <br>
                            # {{ $page->page_no }} <br>
                            {{ $page->question }}</p>
                    @endforeach

                @else
                <p>You don't have any pages yet.</p>

                @endif

                {!! Form::open(['method'=>'POST', 'action'=>'PageController@store']) !!}

                {!! Form::hidden('story_id', $story->id) !!}
                {!! Form::hidden('author', $story->user->name) !!}
                {!! Form::hidden('author', $story->user->name) !!}

                <div class="form-group">
                    {!! Form::submit('Add a Page', ['class' => 'btn btn-primary btn-lg']) !!}
                </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
