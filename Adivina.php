<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Juego de Adivinar</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            background-color:rgb(255, 255, 255);
            padding: 30px;
        }

        .adivina {
            background-color: rgb(219, 219, 219);
            padding: 25px;
            border-radius: 10px;
            max-width: 400px;
            margin: auto;
            box-shadow: 0 0 20px rgb(75, 0, 0);
            text-align: center;
            font-size: 20px;
            font-weight: bold;
        }

        input[type=number] {
            padding: 10px;
            font-size: 20px;
            width: 80%;
            margin-bottom: 15px;
        }

        .resultado {
            font-weight: bold;
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <div class="adivina">
        <h2>¡Adivina el número!</h2>
        <p>Estoy pensando en un número del 1 al 10...</p>
        <form method="post" action="">
            <input type="number" name="numero" min="1" max="10" required>
            <br>
            <input type="submit" value="Adivinar">
        </form>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $numeroUsuario = $_POST["numero"];
                $numeroSecreto = rand(1, 10);

                echo "<p class='resultado'>Número secreto: $numeroSecreto</p>";

                if ($numeroUsuario == $numeroSecreto) {
                    echo "<p class='resultado' style='color: green;'>¡Felicidades! Adivinaste 🎉</p>";
                } else {
                    echo "<p class='resultado' style='color: red;'>Lo siento, no era ese 😞</p>";
                }
            }
        ?>
    </div>

</body>
</html>