<?php

namespace App\Livewire;

use Livewire\Component;

class HeartToggle extends Component
{
    public $heartable;

    public function toggle()
    {
        if ($this->heartable->isHearted()) {
            $this->heartable->unheart();
        } else {
            $this->heartable->heart();
        }
    }

    public function render()
    {
        return view('livewire.heart');
    }
}
