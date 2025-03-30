<!-- The Modal -->
<div class="modal fade" id="rolarDadosModal">
    <div class="modal-dialog modal-xl">
        <div class="modal-content content-box">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Rolar Dados</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="d-flex flex-wrap justify-content-center">
                    <div class="d-flex flex-column align-items-center m-2">
                        <label for="rolarD2">D2</label>
                        <button class="btn btn-primary" id="rolarD2">Rolar</button>
                        <p id="resultadoRolarD2">0</p>
                    </div>
                    <div class="d-flex flex-column align-items-center m-2">
                        <label for="rolarD4">D4</label>
                        <button class="btn btn-primary" id="rolarD4">Rolar</button>
                        <p id="resultadoRolarD4">0</p>
                    </div>
                    <div class="d-flex flex-column align-items-center m-2">
                        <label for="rolarD6">D6</label>
                        <button class="btn btn-primary" id="rolarD6">Rolar</button>
                        <p id="resultadoRolarD6">0</p>
                    </div>
                    <div class="d-flex flex-column align-items-center m-2">
                        <label for="rolarD8">D8</label>
                        <button class="btn btn-primary" id="rolarD8">Rolar</button>
                        <p id="resultadoRolarD8">0</p>
                    </div>
                    <div class="d-flex flex-column align-items-center m-2">
                        <label for="rolarD10">D10</label>
                        <button class="btn btn-primary" id="rolarD10">Rolar</button>
                        <p id="resultadoRolarD10">0</p>
                    </div>
                    <div class="d-flex flex-column align-items-center m-2">
                        <label for="rolarD12">D12</label>
                        <button class="btn btn-primary" id="rolarD12">Rolar</button>
                        <p id="resultadoRolarD12">0</p>
                    </div>
                    <div class="d-flex flex-column align-items-center m-2">
                        <label for="rolarD20">D20</label>
                        <button class="btn btn-primary" id="rolarD20">Rolar</button>
                        <p id="resultadoRolarD20">0</p>
                    </div>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>


<script>
    function rolarDado(valorMaximo, idResultado) {
        const resultado = Math.floor(Math.random() * valorMaximo) + 1;
        document.getElementById(idResultado).innerText = `${resultado}`;
    }

    document.getElementById('rolarD2').addEventListener('click', () => rolarDado(2, 'resultadoRolarD2'));
    document.getElementById('rolarD4').addEventListener('click', () => rolarDado(4, 'resultadoRolarD4'));
    document.getElementById('rolarD6').addEventListener('click', () => rolarDado(6, 'resultadoRolarD6'));
    document.getElementById('rolarD8').addEventListener('click', () => rolarDado(8, 'resultadoRolarD8'));
    document.getElementById('rolarD10').addEventListener('click', () => rolarDado(10, 'resultadoRolarD10'));
    document.getElementById('rolarD12').addEventListener('click', () => rolarDado(12, 'resultadoRolarD12'));
    document.getElementById('rolarD20').addEventListener('click', () => rolarDado(20, 'resultadoRolarD20'));
</script>