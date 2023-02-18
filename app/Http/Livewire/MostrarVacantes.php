<?php

namespace App\Http\Livewire;

use App\Models\Vacante;
use Livewire\Component;

class MostrarVacantes extends Component
{

    protected $listeners = ["eliminarVacante"];

    public function render()
    {
        $vacantes = Vacante::where("user_id",auth()->user()->id)->paginate(5);
        return view('livewire.mostrar-vacantes',[
            "vacantes" => $vacantes
        ]);
    }

    public function eliminarVacante($id)
    {
        Vacante::find($id)->delete();
    }
}
