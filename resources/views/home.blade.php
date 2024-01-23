@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach($movies as $movie)
                <div class="col-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">
                                <h6>{{ $movie->original_title }}</h6>
                            </div>
                            <div class="card-subtitle">
                                <p class="text-end">Nazionalita': {{ $movie->nationality }}</p>
                                <p class="text-end">Data di uscita: {{ $movie->date }}</p>
                                <p class="text-end">Voto: {{ $movie->vote }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection