<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Illuminate\View\View;
use Livewire\Component;

class SearchDropdown extends Component
{
    public $search = '';

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|string
     */
    public function render()
    {
        return view('livewire.search-dropdown');
    }

    // Computed to field => $this->results
    public function getResultsProperty()
    {
        if (strlen($this->search) <= 2) {
            return [];
        }

        $results = Http::withToken(config('services.tmdb.token'))
            ->get("https://api.themoviedb.org/3/search/movie?query={$this->search}")
            ->json();

        return collect($results['results'])->take(10);
    }
}
