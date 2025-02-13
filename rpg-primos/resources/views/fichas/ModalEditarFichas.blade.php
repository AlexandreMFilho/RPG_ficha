<!-- resources/views/fichas/ModalEditarFicha.blade.php -->
<div class="modal" id="editarFichaModal" tabindex="-1" aria-labelledby="editarFichaModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editarFichaModalLabel">Editar Ficha de {{ $criatura->nome }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('ficha.update', $criatura->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" value="{{ $criatura->nome }}">
                    </div>

                    <div class="mb-3">
                        <label for="hp" class="form-label">HP</label>
                        <input type="number" class="form-control" id="hp" name="hp" value="{{ $criatura->hp }}">
                    </div>

                    <div class="mb-3">
                        <label for="mana" class="form-label">Mana</label>
                        <input type="number" class="form-control" id="mana" name="mana" value="{{ $criatura->mana }}">
                    </div>

                    <button type="submit" class="btn btn-success">Salvar alterações</button>
                </form>
            </div>
        </div>
    </div>
</div>
