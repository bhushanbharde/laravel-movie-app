@extends('layout.main')

@section('content')
    <div class="container mx-auto md:px-24 px-8 py-16">
        <div class="popoular-actors">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">popular actors</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                @foreach ($popularActors as $actor)
                    <div class="actor mt-8">
                        <a href="/actors/{{ $actor['id'] }}">
                            <img src="{{ $actor['profile_path']}}" 
                                alt="proflie-pic"
                                class="hover:opacity-75 transition ease-in-out duration-150"
                            >
                        </a>
                        <div class="mt-2">
                            <a href="/actors/{{ $actor['id'] }}" class="text-lg hover:text-gray-300">{{ $actor['name'] }}</a>
                            <div class="text-sm truncate text-gray-400">{{ $actor['known_for'] }}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="page-load-status my-8">
            <div class="flex justify-center">
                <div class="infinite-scroll-request spinner my-12 text-4xl">&nbsp;</div>
            </div>
            {{-- <p class="infinite-scroll-error">Error</p> --}}
            <p class="infinite-scroll-last">End of content</p>
        </div>

        {{-- <div class="flex justify-between mt-16">
            @if ($previous)
                <a href="/actors/page/{{ $previous }}" class="mt-4">Prev</a>
            @else
                <div></div>
            @endif

            @if ($next)
                <a href="/actors/page/{{ $next }}" class="mt-4">Next</a>
            @endif
            
        </div> --}}
    </div>
@endsection

@section('scripts')
    <script src="https://unpkg.com/infinite-scroll@4/dist/infinite-scroll.pkgd.js"></script>

    <script>
        let elem = document.querySelector('.grid');
        let infScroll = new InfiniteScroll( elem, {
            // options
            path: '/actors/page/@{{#}}',
            append: '.actor',
            status: '.page'
        });
    </script>
@endsection