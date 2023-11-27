<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PostFormPublishing extends Component
{
    public $state = [];

    public function updatedState()
    {
        $this->emit('mergeState', $this->state);
    }

    public function submit()
    {
        $this->emit('store');
    }

    public function render()
    {
        return view('livewire.post-form-publishing');
    }
}
