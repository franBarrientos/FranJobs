<?php

namespace App\Http\Livewire;

use App\Models\Vacante;
use App\Notifications\NuevoCandidato;
use Livewire\Component;
use Livewire\WithFileUploads;

class PostularVacante extends Component
{
    use WithFileUploads;
    public $cv;
    public $vacante;
    protected $rules = [
        "cv" => "required|mimes:pdf"
    ];

    public function mount(Vacante $vacante)
    {
        $this->vacante = $vacante;
    }

    public function postularme()
    {
        $datos = $this->validate();
        $cv = $this->cv->store("public/cv");
        $nombreImagen = str_replace("public/cv/", "", $cv);
        
        $this->vacante->candidatos()->create([
            "user_id" => auth()->user()->id,
            "cv" => $nombreImagen
        ]);
        $this->vacante->reclutador->notify(new NuevoCandidato($this->vacante->id, $this->vacante->titulo, auth()->user()->id));


        session()->flash("mensaje","Your information was successfully submitted, Good Luck!");
        return redirect()->back();
    }

    public function render()
    {
        return view('livewire.postular-vacante');
    }
}
