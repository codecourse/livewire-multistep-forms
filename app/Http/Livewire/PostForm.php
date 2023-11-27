<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostForm extends Component
{
    public $post;

    public $state = [];

    public $step = 1;

    protected $listeners = [
        'goToStep',
        'mergeState',
        'store'
    ];

    public function mount(Post $post)
    {
        $this->state = $post->withoutRelations()->toArray();
    }

    public function store()
    {
        if ($this->post) {
            $this->post->update(
                collect($this->state)->except(['created_at', 'updated_at'])
                    ->toArray()
            );

            return;
        }

        Post::create($this->state);
    }

    public function mergeState($state)
    {
        $this->state = array_merge($this->state, $state);
    }

    public function goToStep($step)
    {
        $this->step = $step;
    }

    public function render()
    {
        return view('livewire.post-form');
    }
}
