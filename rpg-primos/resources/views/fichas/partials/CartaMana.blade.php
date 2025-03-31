<div style="position: relative; display: inline-block; margin-bottom: 10px;
    padding:1.5px">

    <img src="{{ asset('imgs/'.$imagem) }}" alt="Mana Planície" class="img-fluid" 
        style="width: 40px; border: 0px solid #ccc;">
    
    <!-- Mana branca -->
    <span style="
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        align-items: flex-start; /* Alinha ao topo */
        justify-content: center; /* Mantém centralizado horizontalmente */
        padding-top: 3px; /* Ajuste fino para melhor posicionamento */
        font-size: 25px;
        color: white;
        text-shadow: 0 0 0.2em #000, 0 0 0.2em #FFF;
        font-weight: bold;
    ">
        {{$valor}}
    </span>

</div>
