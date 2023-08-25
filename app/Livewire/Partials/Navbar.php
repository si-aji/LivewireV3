<?php

namespace App\Livewire\Partials;

use Livewire\Component;

class Navbar extends Component
{
    public $wmenu;

    public function render()
    {
        \Log::debug("Debug on Navbar Render", [
            'wmenu' => $this->wmenu
        ]);

        return view('livewire.partials.navbar');
    }
}
