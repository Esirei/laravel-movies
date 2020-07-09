@extends('layouts.app')

@section('content')
  <div class="container mx-auto px-4 pt-16">
    <div class="popular-movies">
      <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
        Popular Movies
      </h2>

      <div class="grid grid-cols-5 gap-8">
        <div class="mt-8">
          <a href="#">
            <img src="{{ asset('images/parasite.jpg') }}" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-300">
          </a>
          <div class="mt-2">
            <a href="#" class="text-lg mt-2 hover:text-gray-300">Parasite</a>
            <div class="flex items-center text-gray-400 text-sm mt-1">
              <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
                <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78"/>
              </svg>
              <span class="ml-1">85%</span>
              <span class="mx-2">|</span>
              <span>Jul 09, 2020</span>
            </div>
            <div class="text-gray-400 text-sm">
              Action, Thriller, Comedy
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
