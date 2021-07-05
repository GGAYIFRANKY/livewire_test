<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Search extends Component
{


    public $searchTerm;

    public function render()
    {   

        $searchTerm = '%'. $searchTerm . '%';

        return view('livewire.search');
    }
}
