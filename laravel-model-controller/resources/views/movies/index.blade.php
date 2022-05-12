@extends('layouts.main')

@section('title', 'Movies')

@section('main-content')
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>I miei Film</h1>
                    <p>
                        @dump($movie)
                    </p>
                </div>
            </div>
        </div>
    </main>
@endsection
    