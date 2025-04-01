<div style="
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-end;
    /* border: 1px solid blue; */
    height: 300px;
    width: 300px;
    margin: 10px;
    padding: 10px;
    position: relative;
">

    <!-- Nome e imagem da Valquíria -->
    <div style="
        display: flex;
        position: relative;
        border: 1px solid gray;
        height: 280px;
        width: 100%;
        border-radius: 8px;
    ">
        <img src="{{ asset('imgs/' . $imagem) }}" alt="Imagem da Valquíria" class="img-fluid" 
            style="width: 100%;
            border: 0px solid #ccc;
            border-radius: 8px;">
    </div>

    <!-- Ícones de mana alinhados ao fundo da imagem -->
    <div style="
        position: absolute;
        width: 100%;
        bottom: 5px;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
        justify-content: center;
        /* border: 2px solid green; */
        gap: 5px; /* Espaçamento entre os ícones */
    ">
        @include('fichas.partials.CartaMana', ['imagem' =>'plains.jpg', 'valor' => '1', 'color' => '#FFF'])
        @include('fichas.partials.CartaMana', ['imagem' =>'island.jpg', 'valor' => '1', 'color' => 'blue'])
        @include('fichas.partials.CartaMana', ['imagem' =>'swamp.jpg', 'valor' => '1', 'color' => '#000'])
        @include('fichas.partials.CartaMana', ['imagem' =>'montain.jpg', 'valor' => '1', 'color' => 'red'])
        @include('fichas.partials.CartaMana', ['imagem' =>'forest.jpg', 'valor' => '1', 'color' => 'green'])
        @include('fichas.partials.CartaMana', ['imagem' =>'colorless.jpg', 'valor' => '1', 'color' => '#fff'])
    </div>

</div>
