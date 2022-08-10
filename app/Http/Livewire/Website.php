<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Screen;
use Route;

class Website extends Component
{
    public $currentScreen;
    public $screens;
    public $showSplash;

    public function mount()
    {
        $screen = Route::current()->parameter('screen');
        $this->currentScreen = $screen ? Screen::whereTitle($screen)->first() : Screen::first();
        $this->screens = Screen::all();

        $this->showSplash = $this->currentScreen->id === $this->screens->first()->id;
    }

    public function render()
    {
        return view('livewire.website');
    }
}
