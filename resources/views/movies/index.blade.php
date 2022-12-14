@extends('layout.main')

@section('content')
    <div class="container mx-auto md:px-24 px-8 py-16">
        <div class="popoular-movies">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">popular movies</h2>
            <div class="grid grid-cols-1  sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                @foreach ($popularMovies as $movie)
            
                    <x-movie-card :movie="$movie" />
                @endforeach

            </div>
        </div>

        <div class="now-playing-movies py-24">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">now playing</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                @foreach ($nowPlayingMovies as $movie)
                    <x-movie-card :movie="$movie" />
                @endforeach

            </div>
        </div>
    </div>
@endsection