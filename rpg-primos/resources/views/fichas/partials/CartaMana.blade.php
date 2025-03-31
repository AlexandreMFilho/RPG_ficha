<div style="position: relative; display: inline-block; margin-bottom: 10px; padding: 1.5px">

    <img src="{{ asset('imgs/'.$imagem) }}" alt="Mana Planície" class="img-fluid" 
        style="width: 40px; border: 0px solid #ccc;
        ">
    
    <!-- Mana branca -->
    <span style="
        position: absolute;
        bottom: 0;
        top: 10px;
        left: 50%;
        transform: translateX(-50%);
        font-size: 25px;
        color: white;
        text-shadow: 0 0 0.2em #000, 0 0 0.2em {{$color}};
        font-weight: bold;
    ">
        {{$valor}}
    </span>

</div>
