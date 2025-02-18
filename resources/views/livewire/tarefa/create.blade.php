<div class="mt-5">

    @if (session()->has('success')) <!-- abre o if--> <!--esse if serve para emitir esse alerta caso dê sucesso -->
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif <!-- fecha o if-->

    <div class="card">
        <h5 class="card-header">Cadastro de Tarefas</h5>
        <div class="card-body">
            <form wire:submit.prevent='store'>
                <div class="mb-3"><!--mb = margin bottom-->
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Ex.: Tarefa"
                        wire:model.defer="nome"> <!-- lazy = atribuir o valor da variavel apos sair do campo-->
                </div>
                {{--  {{$nome}} serve para testar --}}

                <div class="mb-3">
                    <label for="data_hora">Data e Hora</label>
                    <input type="datetime-local" name="data_hora" id="data_hora" class="form-control"
                        wire:model.defer="data_hora">
                </div>
                <div class="mb-3">
                    <label for="descricao">Descrição</label>
                    <textarea class="form-control" name="descricao" id="descricao" wire:model.defer="descricao" rows="5"></textarea>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-success">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--parte de html da página create.php-->
