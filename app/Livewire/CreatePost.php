<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class CreatePost extends Component
{

    public $open = false;
    public $title, $content;

    public function save()
    {

        Post::create([
            'title' => $this->title,
            'content' => $this->content
        ]);
        /*limpiar los campos del formulario después de guardar */
        $this->reset(['open', 'title', 'content']);

        /* Emitir evento a todos los componentes */
        //$this->dispatch('render');

        // Emitir evento a un componente específico
        $this->dispatch('show-posts', 'render');

        $this->dispatch('alert', 'El Post se creó satisfactoriamente');

    }


    public function render()
    {
        return view('livewire.create-post');
    }
}
