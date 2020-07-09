@extends('layouts.app')

@section('content')
  <section class="movie-info border-b border-gray-800">
    <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
      <img src="{{ asset('images/parasite.jpg') }}" alt="parasite" class="w-96">

      <div class="md:ml-24">
        <h2 class="text-4xl font-semibold">Parasite (2019)</h2>
        <div class="flex flex-wrap items-center text-gray-400 text-sm">
          <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
            <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78"/>
          </svg>
          <span class="ml-1">85%</span>
          <span class="mx-2">|</span>
          <span>Jul 09, 2020</span>
          <span class="mx-2">|</span>
          <span>Action, Thriller, Comedy</span>
        </div>

        <p class="text-gray-300 mt-8">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit in ipsa maxime nihil vero? Aliquid, corporis
          eius eum labore libero molestias quas quibusdam reiciendis repellat. Aut hic libero nisi tempora.
        </p>

        <div class="mt-12">
          <h4 class="text-white font-semibold">Featured Cast</h4>
          <div class="flex mt-4">
            <div>
              <div>Bong Joon-ho</div>
              <div class="text-sm text-gray-400">Screenplay, Director, Story</div>
            </div>

            <div class="ml-8">
              <div>Han Jin-won</div>
              <div class="text-sm text-gray-400">Screenplay</div>
            </div>
          </div>
        </div>

        <div class="mt-12">
          <button
            class="flex items-center bg-orange-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-orange-600 transition ease-in-out duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current w-6">
              <path
                d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-3 18v-12l10 6-10 6z"/>
            </svg>
            <span class="ml-2">Play Trailer</span>
          </button>
        </div>
      </div>
    </div>
  </section>
  <!-- end of movie-info -->

  <section class="movie-cast border-b border-gray-800">
    <div class="container mx-auto px-4 py-16">
      <h2 class="text-4xl font-semibold">Cast</h2>

      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
        <div class="mt-8">
          <a href="#">
            <img src="{{ asset('images/actor1.jpg') }}" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-300">
          </a>
          <div class="mt-2">
            <a href="#" class="text-lg mt-2 hover:text-gray-300">Real Name</a>
            <p class="text-gray-400 text-sm mt-1">
              John Smith
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end of movie-cast -->

  <section class="movie-images border-b border-gray-800">
    <div class="container mx-auto px-4 py-16">
      <h2 class="text-4xl font-semibold">Images</h2>

      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
        <div class="mt-8">
          <a href="#">
            <img src="{{ asset('images/image1.jpg') }}" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-300">
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- end of movie-images -->
@endsection
