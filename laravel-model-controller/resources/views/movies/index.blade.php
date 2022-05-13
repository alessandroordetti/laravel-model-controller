@extends('layouts.main')

@section('title', 'Movies')

@section('main-content')
    <main>
        <div class="container">
            <div class="row">
                @foreach ($movies as $movie)
                        <div class="card col-3 mb-5">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{$movie->title}}</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate laudantium modi hic tempora tenetur quam! Quaerat et, consequatur iste rem facere expedita, ducimus earum velit dignissimos consectetur enim adipisci delectus.</p>
                                <a href="#" class="btn btn-primary">{{$movie->original_title}}</a>
                            </div>
                        </div>
                @endforeach 
            </div>
        </div>
    </main>
@endsection
    