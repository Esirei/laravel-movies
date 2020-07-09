@extends('layouts.app')

@section('content')
  <div class="movie-info border-b border-gray-800">
    <div class="container mx-auto px-4 py-16 flex">
      <img src="{{ asset('images/parasite.jpg') }}" alt="parasite" style="width: 24rem">
      <div class="ml-24">
        Details here...
      </div>
    </div>
  </div>
  <!-- end of movie-info -->
@endsection
