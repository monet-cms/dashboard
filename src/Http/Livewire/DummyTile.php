<?php

namespace Monet\Framework\Dashboard\Http\Livewire;

use Livewire\Component;

class DummyTile extends Component
{
    public $position;

    public function mount(string $position)
    {
        $this->position = $position;
    }

    public function render()
    {
        return view('monet.dashboard::livewire.dummy-tile');
    }
}