<div style="position: relative; display: inline-block; margin-bottom: 10px; padding: 1.5px">

    <img src="{{ asset('imgs/'.$imagem) }}" alt="Mana {{$imagem}}" class="img-fluid" 
        style="width: 40px; border: 0px solid #ccc;">
    
    <!-- Mana branca -->
    <span style="
        position: absolute;
        bottom: 0;
        top: 0px;
        left: 50%;
        transform: translateX(-50%);
        font-size: 26px;
        font-weight: bold;
        transition: color 0.9s ease;
        text-align: center;
        color: {{$color}};
        text-shadow: 0 0 0.3em {{$color}}, 0 0 0.3em {{$color}}, 0 0 0.3em {{$color}}, 0 0 0.3em {{$color}};
        
        -webkit-text-stroke: 1px black;
    " 
    onmouseover="
    this.style.color='white'
    this.fontSize='100px';
    this.style.textShadow: 0 0 0.2em {{$color}}, 0 0 0.3em {{$color}}, 0 0 0.3em {{$color}}, 0 0 0.3em {{$color}};
    "
    onmouseout="
    this.style.color='{{$color}}';
    this.fontSize='26px';
    this.style.textShadow: 0 0 0.2em {{$color}}, 0 0 0.3em {{$color}}, 0 0 0.3em {{$color}}, 0 0 0.3em {{$color}};

    "
    onclick="openDialog(this, '{{$imagem}}', '{{$color}}', '{{$valor}}')">
        {{$valor}}
    </span>

</div>

<!-- Modal -->
<div id="manaOverlay" style="display: none;
position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); z-index: 999;">
    <div 
        id="manaDialog" 
        style="
           position: fixed; 
           top: 50%; 
           left: 50%; 
           transform: translate(-50%, -50%); 
           background: {{$color}}; 
           border-radius: 8px; 
           padding: 20px; 
           z-index: 1000; 
           box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); 
           display: flex; 
           flex-direction: column; 
           align-items: center;
           background-color: rgba(255, 255, 255, 0.5);
        ">
        <img id="modalImage" src="" alt="Imagem Mana" style="width: 200px; height: auto; margin-top: 15px; position:absolute"/>
        <div style="margin-bottom: 50px;">
            <p style="margin-bottom: 15px;">Ajustar Valor de Mana: {{$imagem}}</p>
            <p id="modalValue" style="font-size: 24px; font-weight: bold; margin-bottom: 50px; color:white">{{$valor}}</p>
            <div style="display: flex; align-items: center; margin-bottom: 30px;">
                <button onclick="incrementValue()">+</button>
                <button onclick="decrementValue()">-</button>
            </div>
            <button onclick="closeDialog()">Close</button>

        </div>
    </div>
</div>

<script>
let currentSpan;
let currentModal;

function openDialog(span, imagem, color, valor) {
    // Selecionar o modal e atualizar as informações
    currentSpan = span;
    currentModal = document.getElementById('manaOverlay');
    
    // Atualiza o valor no modal
    document.getElementById('modalValue').innerText = valor;

    // Atualiza a imagem do modal
    const modalImage = document.getElementById('modalImage');
    modalImage.src = "{{ asset('imgs') }}/" + imagem; // Atualiza a fonte da imagem no modal

    // Exibir o modal
    currentModal.style.display = 'block';
}

function closeDialog() {
    // Esconde o modal
    currentModal.style.display = 'none';
}

function incrementValue() {
    let currentValue = parseInt(currentSpan.innerText);
    currentSpan.innerText = currentValue + 1;
    document.getElementById('modalValue').innerText = currentSpan.innerText; // Atualiza o valor no modal
}

function decrementValue() {
    let currentValue = parseInt(currentSpan.innerText);
    if (currentValue > 0) { // Prevent negative values
        currentSpan.innerText = currentValue - 1;
        document.getElementById('modalValue').innerText = currentSpan.innerText; // Atualiza o valor no modal
    }
}

</script>