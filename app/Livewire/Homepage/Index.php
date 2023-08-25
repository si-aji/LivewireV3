<?php

namespace App\Livewire\Homepage;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    #[Layout('components.layouts.app', [
        'wmenu' => 'home'
    ])]
    public function render()
    {
        return view('livewire.homepage.index');
    }
}
