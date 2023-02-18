<?php

namespace App\Http\Livewire;

use App\Models\Vacante;
use Livewire\Component;
use App\Models\Categoria;
use Illuminate\Support\Carbon;

class MostrarVacante extends Component
{
    public $vacante;

    public function render()
    {
        return view('livewire.mostrar-vacante'/* ,[
            "categoria" => $this->categoria
        ] */);
    }
}
