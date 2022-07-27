<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Screen;

class Website extends Component
{
    public $currentScreen;
    public $screens;

    public function __construct()
    {
        $this->currentScreen = Screen::first();
        $this->screens = Screen::all();
    }

    public function render()
    {
        return view('livewire.website');
    }
}
