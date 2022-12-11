@extends('layout.main')

@section('content')
    <div class="container mx-auto md:px-24 px-8 py-16">
        <div class="popoular-tv">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">popular shows</h2>
            <div class="grid grid-cols-1  sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                @foreach ($popularTv as $tvshow)
                    <x-tv-card :tvshow="$tvshow" />
                @endforeach

            </div>
        </div>

        <div class="top-rated-tv py-24">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">top rated shows</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                @foreach ($topRatedTv as $tvshow)
                    <x-tv-card :tvshow="$tvshow" />
                @endforeach

            </div>
        </div>
    </div>
@endsection