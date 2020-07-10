@extends('layouts.app')

@section('content')
  <section class="movie-info border-b border-gray-800">
    <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
      <img src="https://image.tmdb.org/t/p/w500/{{ $movie['poster_path'] }}" alt="{{ $movie['title'] }}" class="w-96">

      <div class="md:ml-24">
        <h2 class="text-4xl font-semibold">{{ $movie['title'] }}</h2>
        <div class="flex flex-wrap items-center text-gray-400 text-sm">
          <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
            <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78"/>
          </svg>
          <span class="ml-1">{{ $movie['vote_average'] * 10 }}%</span>
          <span class="mx-2">|</span>
          <span>{{ carbon($movie['release_date'])->format('M d, Y') }}</span>
          <span class="mx-2">|</span>
          <span>
            @foreach($movie['genres'] as $genre)
              @if(!$loop->last)
                {{ $genre['name'] }},
              @else
                {{ $genre['name'] }}
              @endif
            @endforeach
          </span>
        </div>

        <p class="text-gray-300 mt-8">
          {{ $movie['overview'] }}
        </p>

        <div class="mt-12">
          <h4 class="text-white font-semibold">Featured Crew</h4>
          <div class="flex mt-4 flex-wrap">
            @foreach(collect($movie['credits']['crew'])->slice(0, 2) as $crew)
              <div class="mr-8">
                <div>{{ $crew['name'] }}</div>
                <div class="text-sm text-gray-400">{{ $crew['job'] }}</div>
              </div>
            @endforeach
          </div>
        </div>

        @if(count($movie['videos']['results']) > 0)
          <div class="mt-12">
            <a href="https://youtube.com/watch?v={{ $movie['videos']['results'][0]['key'] }}" target="_blank"
               class="flex inline-flex items-center bg-orange-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-orange-600 transition ease-in-out duration-300">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current w-6">
                <path
                  d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-3 18v-12l10 6-10 6z"/>
              </svg>
              <span class="ml-2">Play Trailer</span>
            </a>
          </div>

          <div class="fixed top-0 left-0 w-full h-full flex items-center shadow-lg overflow-y-auto" style="background-color: rgba(0,0,0,0.5)">
            <div class="container mx-auto lg:px-32 rounded-lg overflow-y-auto">
              <div class="bg-gray-900 rounded">
                <div class="flex justify-end pr-4 pt-2">
                  <button class="text-3xl leading-none hover:text-gray-300">&times;</button>
                </div>
                <div class="modal-body px-8 py-8">
                  <div class="responsive-container overflow-hidden relative" style="padding-top: 56.25%">
                    <iframe src="https://youtube.com/watch?v={{ $movie['videos']['results'][0]['key'] }}" height="560" width="315" style="border: 0" allow="autoplay; encrypted-media" allowfullscreen
                            class="responsive-iframe absolute top-0 left-0 w-full h-full"></iframe>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endif
      </div>
    </div>
  </section>
  <!-- end of movie-info -->

  <section class="movie-cast border-b border-gray-800">
    <div class="container mx-auto px-4 py-16">
      <h2 class="text-4xl font-semibold">Cast</h2>

      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
        @foreach(collect($movie['credits']['cast'])->slice(0, 10) as $cast)
          <div class="mt-8">
            <a href="#">
              <img src="https://image.tmdb.org/t/p/w300/{{ $cast['profile_path'] }}" alt="{{ $cast['name'] }}" class="hover:opacity-75 transition ease-in-out duration-300">
            </a>
            <div class="mt-2">
              <a href="#" class="text-lg mt-2 hover:text-gray-300">{{ $cast['name'] }}</a>
              <p class="text-gray-400 text-sm mt-1">
                {{ $cast['character'] }}
              </p>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>
  <!-- end of movie-cast -->

  <section class="movie-images border-b border-gray-800">
    <div class="container mx-auto px-4 py-16">
      <h2 class="text-4xl font-semibold">Images</h2>

      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
        @foreach($movie['images']['backdrops'] as $image)
          <div class="mt-8">
            <a href="#">
              <img src="https://image.tmdb.org/t/p/w500/{{ $image['file_path'] }}" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-300">
            </a>
          </div>
        @endforeach
      </div>
    </div>
  </section>
  <!-- end of movie-images -->
@endsection
