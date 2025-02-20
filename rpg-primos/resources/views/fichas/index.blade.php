<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrossel Circular</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
        }

        .carousel-container {
            position: relative;
            width: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .carousel {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 20px;
            width: 100%;
            overflow: hidden;
        }

        .carousel img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            transition: transform 0.5s ease-in-out;
        }

        .center-image {
            width: 120px;
            height: 120px;
            z-index: 2;
            border: 4px solid white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        .carousel-buttons {
            position: absolute;
            width: 100%;
            display: flex;
            justify-content: space-between;
        }

        .carousel-buttons button {
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            font-size: 20px;
            border-radius: 50%;
        }

        .carousel-buttons button:hover {
            background-color: rgba(0, 0, 0, 0.9);
        }
    </style>
</head>
<body>

    <div class="carousel-container">
        <div class="carousel-buttons">
            <button onclick="rotateLeft()">◀</button>
        </div>

        <div class="carousel">
            @foreach(array_slice($imagens, 0, 3) as $index => $imagem)
                <img src="{{ $imagem }}" class="{{ $index == 1 ? 'center-image' : 'side-image' }}">
            @endforeach
        </div>

        <div class="carousel-buttons">
            <button onclick="rotateRight()">▶</button>
        </div>
    </div>

    <script>
        let images = @json($imagens);
        let visibleIndexes = [0, 1, 2]; // Apenas 3 imagens visíveis por vez

        function rotateLeft() {
            visibleIndexes.push(visibleIndexes.shift()); // Move o primeiro para o final
            updateImages();
        }

        function rotateRight() {
            visibleIndexes.unshift(visibleIndexes.pop()); // Move o último para o início
            updateImages();
        }

        function updateImages() {
            let imgElements = document.querySelectorAll(".carousel img");

            imgElements.forEach((img, index) => {
                img.src = images[visibleIndexes[index]];

                // Destaca o elemento central
                if (index === 1) {
                    img.classList.add("center-image");
                } else {
                    img.classList.remove("center-image");
                }
            });
        }
    </script>

</body>
</html>
