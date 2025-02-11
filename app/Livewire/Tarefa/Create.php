<?php

namespace App\Livewire\Tarefa;

use Livewire\Component;

class Create extends Component
{
    public $nome;
    public $data_hora;
    public $descricao;

    public function render()
    {
        return view('livewire.tarefa.create');
    }

    public function store(){
        dd($this->nome, $this->data_hora, $this->descricao); 
        // this serve para dizer que as variaveis estao sendo acessadas dentro da função
        //dd é tipo um return. ele para a programação e mostra o que tem dentro 
    }
}
// lógica da tarefa