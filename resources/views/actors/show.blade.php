@extends('layout.main')

@section('content')
    <div class="movie-info border-b border-gray-800 ">
        <div class="container mx-auto md:px-24 px-4 py-16 flex flex-col md:flex-row">
            <div class="flex-none">
                <img src="{{$actor['profile_path']}}" alt="" class="w-full md:w-76">
                <ul class="flex items-center mt-4">
                    
                    @if ($social['facebook'])
                        <li class="ml-6">
                            <a href="{{$social['facebook']}}" title="">Fb</a>
                        </li>
                    @endif

                    @if ($social['instagram'])
                        <li class="ml-6">
                            <a href="{{$social['instagram']}}" title="">Insta</a>
                        </li>
                    @endif

                    @if ($social['twitter'])
                        <li class="ml-6">
                            <a href="{{$social['twitter']}}" title="">Tw</a>
                        </li>
                    @endif
                    @if ($actor['homepage'])
                        <li class="ml-6">
                            <a href="{{$actor['homepage']}}" title="">Web</a>
                        </li>
                    @endif
                </ul>
            </div>
            <div class="md:ml-24">
                <h2 class="text-4xl font-semibold">{{ $actor['name'] }}</h2>
                <div class="mt-2">
                    <div class="flex flex-wrap items-center to-gray-400 text-sm mt-1">
                        <span>
                            
                        </span>
                        <span class="">{{ $actor['birthday'] }} ({{$actor['age']}} years old) in {{ $actor['place_of_birth'] }}</span>

                    <p class="text-gray-300 mt-8">
                        {{ $actor['biography'] }}
                    </p>

                    <h4 class="font-semibol mt-12">Known For</h4>

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-8">
                        @foreach ($knownForMovies as $movie)
                            <div class="mt-4">
                                <a href="{{ $movie['linkToPage'] }}">
                                    <img src="{{$movie['poster_path']}}" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
                                </a>
                                <a href="" class="text-sm leading-normal text-gray-400 hover:text-white mt-1">{{$movie['title']}} </a>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="credits border-b border-gray-800">
        <div class="container mx-auto md:px-24 px-4 py-16">
            <h2 class="text-4xl font-semibold">Credits</h2>
            <ul class="list-disc leading-loose pl-5 mt-8">
                @foreach ($credits as $credit)
                    <li>{{ $credit['release_year'] }} &middot; <strong>{{ $credit['title'] }}</strong> as {{ $credit['character'] }}</li>
                @endforeach
            </ul>
        </div>
    </div>

@endsection
