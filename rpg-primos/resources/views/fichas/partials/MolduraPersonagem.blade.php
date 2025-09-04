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
        @include('fichas.partials.CartaMana', ['imagem' =>'plains.jpg', 'valor' => '1', 'color' => 'rgb(255, 255, 255)'])
        @include('fichas.partials.CartaMana', ['imagem' =>'island.jpg', 'valor' => '1', 'color' => 'rgb(34, 56, 255)'])
        @include('fichas.partials.CartaMana', ['imagem' =>'swamp.jpg', 'valor' => '1', 'color' => 'rgb(104, 104, 104)'])
        @include('fichas.partials.CartaMana', ['imagem' =>'montain.jpg', 'valor' => '1', 'color' => 'rgb(255, 45, 45)'])
        @include('fichas.partials.CartaMana', ['imagem' =>'forest.jpg', 'valor' => '1', 'color' => 'rgb(45, 255, 94)'])
        @include('fichas.partials.CartaMana', ['imagem' =>'colorless.jpg', 'valor' => '1', 'color' => 'rgba(255, 255, 255, 0.34)'])
    </div>

</div>
