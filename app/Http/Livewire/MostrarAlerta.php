<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MostrarAlerta extends Component
{
    public $messages;
    public function render()
    {
        return view('livewire.mostrar-alerta');
    }
}
