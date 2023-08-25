<?php

namespace App\Livewire\Profile;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    public $avatar_type;

    #[Layout('components.layouts.app', [
        'wmenu' => 'profile'
    ])]

    public function render()
    {
        return view('livewire.profile.index');
    }
}
