<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PostFormBody extends Component
{
    public $state = [];

    protected $rules = [
        'state.body' => 'required'
    ];

    protected $messages = [
        'state.body.required' => 'The body is required.'
    ];

    public function updatedState()
    {
        $this->emit('mergeState', $this->state);
    }

    public function submit()
    {
        $this->validate();

        $this->emit('goToStep', 3);
    }

    public function render()
    {
        return view('livewire.post-form-body');
    }
}
