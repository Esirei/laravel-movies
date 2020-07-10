<?php

namespace App\Http\Livewire;

use Illuminate\View\View;
use Livewire\Component;

class SearchDropdown extends Component
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return View|string
     */
    public function render()
    {
        return view('livewire.search-dropdown');
    }
}
