<div style="display: flex;
        align-items: center;
        height: 80%;
        width: 260px;
        /* border: 3px solid blue; */
        
        ">

                        <canvas style =" " id="myChart"></canvas>

                        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

                        <script>
                        const ctx = document.getElementById('myChart');
                        
                        new Chart(ctx, {
                            type: 'radar',
                            data: {
                            labels: ['', '', '', '', ''],
                            datasets: [{
                                backgroundColor: 'rgba(55, 0, 255, 0.72)',
                                label: '',
                                data: [10/*branco*/, 100/*azul*/, 10/*preto*/, 10/*vermelho*/, 10/*verde*/],
                                borderWidth: 3
                            }]
                            },
                            options: {
                                plugins: {
                                    legend: {
                                        display: false
                                    }
                                }
                            }
                        });
                        </script>

                        <img src="{{ asset('imgs/Branca.png') }}" alt="Imagem da Valquíria" class="img-fluid" 
                            style="width:40px;
                            border: 0px solid #ccc;
                            border-radius: 8px;
                            margin-left:-140px;
                            margin-top:-80px;
                            position:relative;
                            top:-60px;
                            ">

                        <img src="{{ asset('imgs/Azul.png') }}" alt="Imagem da Valquíria" class="img-fluid" 
                            style="width:40px;
                            border: 0px solid #ccc;
                            border-radius: 8px;
                            margin-left:50px;
                            margin-top:60px;
                            margin-left:60px;
                            position:relative;
                            top:-60px;
                            ">

                        <img src="{{ asset('imgs/Preta.png') }}" alt="Imagem da Valquíria" class="img-fluid" 
                            style="width:40px;
                            border: 0px solid #ccc;
                            border-radius: 8px;
                            margin-left:0;
                            margin-bottom:-280px;
                            margin-left:-80px;
                            position:relative;
                            top:-60px;
                            ">
                        
                        <img src="{{ asset('imgs/Vermelha.png') }}" alt="Imagem da Valquíria" class="img-fluid" 
                            style="width:40px;
                            border: 0px solid #ccc;
                            border-radius: 8px;
                            margin-left:0;
                            margin-bottom:-280px;
                            margin-left:-165px;
                            position:relative;
                            top:-60px;
                            ">

                        <img src="{{ asset('imgs/Verde.png') }}" alt="Imagem da Valquíria" class="img-fluid" 
                            style="width:40px;
                            border: 0px solid #ccc;
                            border-radius: 8px;
                            margin-bottom:-60px;
                            margin-left:-75px;
                            position:relative;
                            top:-60px;
                            ">
                            
        </div>