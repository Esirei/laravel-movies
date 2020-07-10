<div class="relative mt-3 md:mt-0">
  <input type="text" placeholder="Search" wire:model.debounce.500ms="search"
         class="text-sm bg-gray-800 rounded-full w-64 px-4 py-1 pl-8 focus:shadow-outline focus:outline-none">

  @if(strlen($search) > 2)
    <div class="absolute bg-gray-800 rounded w-64 mt-4 text-sm">
      @if(count($this->results) > 0)
        <ul>
          @foreach($this->results as $result)
            <li class="border-b border-gray-700">
              <a href="{{ route('movies.show', $result['id']) }}" class="block hover:bg-gray-700 px-3 py-3">
                {{ $result['title'] }}
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
