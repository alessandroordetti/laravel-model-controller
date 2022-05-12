@extends('layouts.main')

@section('title', 'Movies')

@section('main-content')
    <main>
        <div class="container">
            <div class="row">
                @foreach ($movies as $movie)
                    <div class="col-3 mb-5">
                        <h3>{{$movie->title}}</h3>
                        <h3>{{$movie->original_title}}</h3>
                        <h4>{{$movie->date}}</h4>
                        <h5>{{$movie->vote}}</h5>
                    </div>
                @endforeach 
            </div>
        </div>
    </main>
@endsection
    