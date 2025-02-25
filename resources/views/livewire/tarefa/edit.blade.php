<div wire:ignore.self class="modal fade" id="editModal" tabindex="1" aria-labelledby="editModalLabel" aria-hidden="true"
    wire:Listener="hideModal">
    {{-- modal é a janelinha de informações que aparece na tela --}}
    {{-- wire:ignore.self serve para a janelinha aparecer sobre a tela e tudo escrito em baixo, 
aparecer dentro da modal, caso não use, a tela vai ficar cinza --}}
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar Tarefa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">Nome</label>
                    <input type="text" class="form-control" wire:model="nome">
                </div>
                <div class="mb-3">
                    <label class="form-label">Data e Hora</label>
                    <input type="datetime" class="form-control" wire:model="data_hora">
                </div>
                <div class="mb-3">
                    <label class="form-label">Descrição</label>
                    <textarea class="form-control" wire:model="descricao" id="descricao" name="descricao" rows="3"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" wire:click="salvar">Salvar</button>
            </div>
        </div>
    </div>
</div>

