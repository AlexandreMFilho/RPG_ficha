<div 
    class="container"
    style="
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-around;
            border: 1px solid #ccc;
            padding: 15px;
            width: 400px;
            height: 80%;
            border-radius: 8px;
            box-sizing: border-box;
            overflow: auto; /* Adiciona barra de rolagem se o conteúdo ultrapassar o tamanho do contêiner */
        "
>
    <h4 style="color: brown; text-align: center; margin-bottom: 10px;">Atributos</h4>
    
    <button id="toggle-buttons" onclick="toggleButtons()" style="margin-bottom: 10px;">Esconder Botões</button>
    
    <table style="width: 100%; height: auto; border-collapse: collapse; word-wrap: break-word;">
        @if(isset($atributos) && count($atributos) > 0)
            @for ($i = 0; $i < count($atributos); $i += 2)
                <tr>
                    <td class="col" style="vertical-align: middle; padding-right: 10px; text-align: right;">
                        <strong>{{ $atributos[$i]['nomeAtributo'] }}:</strong>
                        <span id="valor-atributo-{{ $i }}">{{ $atributos[$i]['valorAtributo'] }}</span>
                        <button class="increment-decrement" onclick="incrementar({{ $i }})">+</button>
                        <button class="increment-decrement" onclick="decrementar({{ $i }})">-</button>
                    </td>
                    @if (isset($atributos[$i + 1]))
                        <td class="col" style="vertical-align: middle; padding-right: 10px; text-align: right;">
                            <strong>{{ $atributos[$i + 1]['nomeAtributo'] }}:</strong>
                            <span id="valor-atributo-{{ $i + 1 }}">{{ $atributos[$i + 1]['valorAtributo'] }}</span>
                            <button class="increment-decrement" onclick="incrementar({{ $i + 1 }})">+</button>
                            <button class="increment-decrement" onclick="decrementar({{ $i + 1 }})">-</button>
                        </td>
                    @else
                        <td class="col"></td>
                    @endif
                </tr>
            @endfor
        @else
            <tr>
                <td colspan="2" style="text-align: center;">No attributes available.</td>
            </tr>
        @endif
    </table>
</div>

<script>
    function incrementar(index) {
        const span = document.getElementById(`valor-atributo-${index}`);
        let valorAtual = parseInt(span.textContent);
        span.textContent = valorAtual + 1;
    }

    function decrementar(index) {
        const span = document.getElementById(`valor-atributo-${index}`);
        let valorAtual = parseInt(span.textContent);
        span.textContent = valorAtual - 1; // Remove a verificação para permitir valores negativos
    }

    function toggleButtons() {
        const buttons = document.querySelectorAll('.increment-decrement');
        const toggleButton = document.getElementById('toggle-buttons');
        buttons.forEach(button => {
            if (button.style.display === 'none') {
                button.style.display = 'inline-block';
                toggleButton.textContent = 'Esconder Botões';
            } else {
                button.style.display = 'none';
                toggleButton.textContent = 'Mostrar Botões';
            }
        });
    }
</script>

