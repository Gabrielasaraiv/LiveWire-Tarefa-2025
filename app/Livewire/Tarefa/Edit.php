<?php

namespace App\Livewire\Tarefa;

use App\Models\Tarefa;
use Livewire\Component;

class Edit extends Component
{
    public $tarefaId;
    public $nome;
    public $data_hora;
    public $descricao;

    protected $listeners = ['editarTarefa'];

    public function render()
    {
        return view('livewire.tarefa.edit');
    }

    public function editarTarefa($tarefaId){
        $tarefa = Tarefa::find($tarefaId);

        if($tarefa){
            $this->tarefaId = $tarefa->id;
            $this->nome = $tarefa->nome;
            $this->data_hora = $tarefa->data_hora;
            $this->descricao = $tarefa->descricao;

            $this->dispatch('openEditModal');
        }
    }
}
