<div style="position: relative; display: inline-block; margin-bottom: 10px; padding: 1.5px">

    <img src="{{ asset('imgs/'.$imagem) }}" alt="Mana {{$imagem}}" class="img-fluid" 
        style="width: 40px; border: 0px solid #ccc;">
    
    <!-- Mana branca -->
    <span style="
        position: absolute;
        top: 0;
        left: 50%;
        transform: translateX(-50%);
        font-size: 26px;
        font-weight: bold;
        transition: color 0.9s ease;
        text-align: center;
        color: {{$color}};
        text-shadow: 0 0 0.3em {{$color}}, 0 0 0.3em {{$color}};
        -webkit-text-stroke: 1px black;
    " 
    onmouseover="
    this.style.color='white';
    this.style.textShadow='0 0 0.2em {{$color}}, 0 0 0.3em {{$color}}';
    "
    onmouseout="
    this.style.color='{{$color}}';
    this.style.textShadow='0 0 0.2em {{$color}}, 0 0 0.3em {{$color}}';
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
           border-radius: 8px; 
           padding: 20px; 
           z-index: 1000; 
           box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); 
           display: flex; 
           flex-direction: column; 
           align-items: center;
           background-color: rgba(255, 255, 255, 0.5);
        ">
        <img id="modalImage" src="" alt="Imagem Mana" style="width: 200px; height: auto; margin-top: 15px;"/>
        <button class="btn btn-danger" style="font-weight: bold; border: 1px solid black; position:absolute; right: 5px ; top: 5px   ;" onclick="closeDialog()">x</button>
        <div style="display: flex; flex-direction: column; align-items: center; margin-bottom: 50px; position: absolute; text-align: center;color: {{$color}};">
            <p style="font-size: 16px; margin-top: 25px;margin-bottom: 30px; color: black; background-color: rgba(255, 255, 255, 0.73); z-index: 999; font-weight: bold;">Ajustar Valor de Mana:</p>
            <p id="modalValue" style="font-size: 50px; font-weight: bold; margin-bottom: 50px; color: black; text-shadow: 0 0 0.2em {{$color}}, 0 0 0.3em {{$color}};">{{$valor}}</p>
            <div style="display: flex; align-items: center; margin-bottom:  40px; gap: 10px; justify-content: space-around; width:120%">
                <button class="btn btn-light" style="font-weight: bold;border: 1px solid black " onclick="incrementValue()">+</button>
                <button class="btn btn-light" style="font-weight: bold;border: 1px solid black " onclick="decrementValue()">-</button>
            </div>
            <button class="btn btn-light" style="font-weight: bold; border: 1px solid black" onclick="closeDialog()">Close</button>
        </div>
    </div>
</div>

<script>
let currentSpan;
let currentModal;

function openDialog(span, imagem, color, valor) {
    currentSpan = span;
    currentModal = document.getElementById('manaOverlay');
    
    document.getElementById('modalValue').innerText = valor;

    const modalImage = document.getElementById('modalImage');
    modalImage.src = "{{ asset('imgs') }}/" + imagem;

    currentModal.style.display = 'block';
}

function closeDialog() {
    currentModal.style.display = 'none';
}

function incrementValue() {
    let currentValue = parseInt(currentSpan.innerText);
    currentSpan.innerText = currentValue + 1;
    document.getElementById('modalValue').innerText = currentSpan.innerText;
}

function decrementValue() {
    let currentValue = parseInt(currentSpan.innerText);
    if (currentValue > 0) {
        currentSpan.innerText = currentValue - 1;
        document.getElementById('modalValue').innerText = currentSpan.innerText;
    }
}
</script>
