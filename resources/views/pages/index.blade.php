@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1>Stories</h1>
                @if($stories)
                    @foreach($stories as $story)
                        <hr>
                        <h5>Title: {{ $story->title }}</h5>
                        <p>Description: {{ $story->description }}</p>
                        <hr>
                        <br>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
@endsection
