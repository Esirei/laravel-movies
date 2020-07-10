<div class="relative mt-3 md:mt-0" x-data="{ isOpen: true }" @click.away="isOpen = false">
  <input type="text" placeholder="Search" wire:model.debounce.500ms="search" @focus="isOpen = true"
         class="text-sm bg-gray-800 rounded-full w-64 px-4 py-1 pl-8 focus:shadow-outline focus:outline-none">

  <div wire:loading class="absolute inset-y-0 right-0 mr-4">
    <div class="spinner h-full"></div>
  </div>

  @if(strlen($search) > 2)
    <div class="absolute bg-gray-800 rounded w-64 mt-4 text-sm" x-show="isOpen" @keydown.escape.window="isOpen = false">
      @if(count($this->results) > 0)
        <ul>
          @foreach($this->results as $result)
            <li class="border-b border-gray-700">
              <a href="{{ route('movies.show', $result['id']) }}" class="block hover:bg-gray-700 px-3 py-3 flex items-center">
                @if($result['poster_path'])
                  <img src="https://image.tmdb.org/t/p/w92{{ $result['poster_path'] }}" alt="{{ $result['title'] }}" class="h-12">
                @else
                  <img src="https://via.placeholder.com/50x75" alt="{{ $result['title'] }}" class="h-12">
                @endif
                <span class="ml-4">{{ $result['title'] }}</span>
              </a>
            </li>
          @endforeach
        </ul>
      @else
        <div class="px-3 py-3">No Results for "{{ $search }}"</div>
      @endif
    </div>
  @endif
</div>
