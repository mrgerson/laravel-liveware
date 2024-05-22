<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class ShowPosts extends Component
{
    public $search;
    public $sort = 'id';
    public $direction = 'desc';

    /* se carga cada vez que hay un cambio en el DOM */
    public function render()
    {
        $posts = Post::where('title', 'like', '%' . $this->search . '%')
            ->orwhere('content', 'like', '%' . $this->search . '%')
            ->orderBy($this->sort, $this->direction)
            ->get();

        return view('livewire.show-posts', compact('posts'))->layout('layouts.app');
    }

    /* funciones sobre el Dom */
    public function handleorden($sort)
    {
        if ($this->sort == $sort) {
            $this->direction = ($this->direction == 'desc') ? 'asc' : 'desc';
        } else {
            $this->sort = $sort;
            $this->direction = 'asc';
        }
    }
}
