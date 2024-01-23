@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach($movies as $movie)
                <div class="col-3">
                    <div class="card mt-3">
                        <div class="card-body">
                            <div class="card-title">
                                <h6 class="text-center fw-bold">{{ $movie->original_title }}</h6>
                            </div>
                            <div class="card-subtitle">
                                <p class="mt-3 fst-italic mb-0">Nazionalita': {{ $movie->nationality }}</p>
                                <p class="fst-italic">Data di uscita: {{ $movie->date }}</p>
                                <p class="text-end fst-italic m-0">Voto: {{ $movie->vote }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection