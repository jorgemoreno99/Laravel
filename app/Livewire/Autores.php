<?php

namespace App\Livewire;

use Livewire\Component;

class Autores extends Component
{

    public $nombre;
    public $apellidos;
    // Funcion que carga el componente
    public function mount(){

    }

    public function agregarAutor(){

        $this->validate({
            'nombre' => 'required'
            'apellidos' => 'required'
        });

        $newAutor = Autor::create({
            'nombre' => $this->nombre
            'apellidos' => $this->apellidos

        });

        $this->nombre = '';
        $this->apellidos = '';

        $this->autores[] = $newAutor
    }


    public function render()
    {
        return view('livewire.autores');
    }
}
