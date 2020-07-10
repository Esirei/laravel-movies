<div class="mt-8">
  <a href="#">
    <img src="https://image.tmdb.org/t/p/w500/{{ $movie['poster_path'] }}" alt="parasite"
         class="hover:opacity-75 transition ease-in-out duration-300">
  </a>
  <div class="mt-2">
    <a href="#" class="text-lg mt-2 hover:text-gray-300">{{ $movie['title'] }}</a>
    <div class="flex items-center text-gray-400 text-sm mt-1">
      <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78"/>
      </svg>
      <span class="ml-1">{{ $movie['vote_average'] * 10 }}%</span>
      <span class="mx-2">|</span>
      <span>{{ carbon($movie['release_date'])->format('M d, Y') }}</span>
    </div>
    <div class="text-gray-400 text-sm">
      @foreach($movie['genre_ids'] as $id)
        @if(!$loop->last)
          {{ $genres->get($id) }},
        @else
          {{ $genres->get($id) }}
        @endif
      @endforeach
    </div>
  </div>
</div>
