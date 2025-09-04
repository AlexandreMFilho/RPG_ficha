<!-- resources/views/fichas/ModalListarFichas.blade.php -->
<div class="modal" id="modalListarFichas" tabindex="-1" aria-labelledby="modalListarFichasLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalListarFichasLabel">Selecionar Ficha</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="tipo" class="form-label">Tipo de Criatura</label>
                    <select id="tipo" class="form-select">
                        <option value="valquiria">Valquiria</option>
                        <option value="monstro">Monstro</option>
                        <option value="personagem">Personagem</option>
                    </select>
                </div>
                <table id="tableFichas" class="table">
                    <!-- A lista de fichas será carregada aqui -->
                </table>
            </div>
        </div>
    </div>
</div>
