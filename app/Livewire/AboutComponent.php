<?php

namespace App\Livewire;

use Livewire\Component;

class AboutComponent extends Component
{
    public function render()
    {
        return view('livewire.about-component')->layout('master');
    }
}
