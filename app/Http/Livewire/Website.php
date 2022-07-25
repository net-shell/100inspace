<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Screen;

class Website extends Component
{
    public $screen;

    public function __construct()
    {
        $this->screen = Screen::first();
    }

    public function render()
    {
        return view('livewire.website');
    }
}
