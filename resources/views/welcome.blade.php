@extends('layouts.app')

@section('content')

        
    <div class="container mt-4">
        <div class="row d-flex gap-3">
            @forelse ($movies as $movie)
                <div class="col-3 card pt-4 pb-4">
                    <h3>{{ $movie->title }}</h3>
                    <p>{{ $movie->original_title }}</p>
                    <span class="mt-2">{{ $movie->nationality }}</span>
                    <span class="mt-2">{{ $movie->date }}</span>
                    <span class="mt-2">{{ $movie->vote }}</span>
                </div>
            @endforeach
        </div>
    </div>

@endsection