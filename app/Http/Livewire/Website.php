<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Screen;
use Route;

class Website extends Component
{
    public $currentScreen;
    public $prevScreen;
    public $nextScreen;
    public $screens;
    public $isLanding;

    public function mount()
    {
        $screen = Route::current()->parameter('screen');
        $this->currentScreen = $screen
            ? Screen::withoutGlobalScopes()
                ->whereSlug($screen)
                ->first()
            : Screen::first();
        $this->screens = Screen::all();

        if ($this->currentScreen && !$this->currentScreen->hidden) {
            $this->prevScreen = $this->screens->find($this->currentScreen->id - 1);
            $this->nextScreen = $this->screens->find($this->currentScreen->id + 1);
        }

        $this->isLanding = $this->currentScreen->id === $this->screens->first()->id;
    }

    public function render()
    {
        return view('livewire.website');
    }
}
