<div 
    class="container"
    style="
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-around;
            border: 1px solid #ccc;
            padding: 15px;
            width: 280px;
            height: 80%;
            border-radius: 8px;
            box-sizing: border-box;
            overflow: auto; /* Adiciona barra de rolagem se o conteúdo ultrapassar o tamanho do contêiner */
        "
>
    <h4 style="color: brown; text-align: center; margin-bottom: 10px;">Atributos</h4>
    
    <table style="width: 100%; height: auto; border-collapse: collapse; word-wrap: break-word;">
        @if(isset($atributos) && count($atributos) > 0)
            @for ($i = 0; $i < count($atributos); $i += 2)
                <tr>
                    <td class="col" style="vertical-align: middle; padding-right: 10px;">
                        <strong>{{ $atributos[$i]['nomeAtributo'] }}:</strong>
                        {{ $atributos[$i]['valorAtributo'] }}
                    </td>
                    @if (isset($atributos[$i + 1]))
                        <td class="col" style="vertical-align: middle; padding-right: 10px;">
                            <strong>{{ $atributos[$i + 1]['nomeAtributo'] }}:</strong>
                            {{ $atributos[$i + 1]['valorAtributo'] }}
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
