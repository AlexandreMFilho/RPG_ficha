<div style="display:flex;flex-direction:row;
            /* justify-content:space-around;align-items:flex-start; */
            border:1px solid blue; height:300px;
            margin:10px;padding:10px;
            ">

    <!-- Nome e imagem da Valquíria -->
    <div style="
        display:flex;
        position:absolute;
        border:1px solid gray;
        height:280px;max-width:300px;
        border-radius: 8px;
        ">
            <img src="{{ asset('imgs/' . $imagem) }}"alt="Imagem da Valquíria" class="img-fluid" 
            style="width:280px;
            border: 0px solid #ccc;
            border-radius: 8px;
            ">
    </div>
    <div>

        @include('fichas.partials.CartaMana', ['imagem' =>'plains.jpg', 'valor' => '1'])
        @include('fichas.partials.CartaMana', ['imagem' =>'plains.jpg', 'valor' => '1'])
        @include('fichas.partials.CartaMana', ['imagem' =>'plains.jpg', 'valor' => '1'])
        @include('fichas.partials.CartaMana', ['imagem' =>'plains.jpg', 'valor' => '1'])
        @include('fichas.partials.CartaMana', ['imagem' =>'plains.jpg', 'valor' => '1'])
        @include('fichas.partials.CartaMana', ['imagem' =>'plains.jpg', 'valor' => '1'])
    </div>

           
</div>
    
                    <!-- Mana branca -->
                    <span><strong style="font-size:25px; color:white; text-shadow: 0 0 0.2em #000, 0 0 0.2em #FFF">1</strong></span>

                    <!-- Mana azul -->                    
                    <span><strong style="font-size:25px; color:white; text-shadow: 0 0 0.2em #000, 0 0 0.2em blue">1</strong></span>

                    <!-- Mana preta -->
                    <span><strong style="font-size:25px; color:white; text-shadow: 0 0 0.2em #000, 0 0 0.2em #000">1</strong></span>

                    <!-- Mana vermelha -->
                    <span><strong style="font-size:25px; color:white; text-shadow: 0 0 0.2em #000, 0 0 0.2em red">1</strong></span>

                    <!-- Mana verde -->
                    <span><strong style="font-size:25px; color:white; text-shadow: 0 0 0.2em #000, 0 0 0.2em green">1</strong></span>

                    <!-- Mana sem cor -->
                    <span><strong style="font-size:25px; color:white; text-shadow: 0 0 0.2em #000, 0 0 0.2em #fff">1</strong></span>