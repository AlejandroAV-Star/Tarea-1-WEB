<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora en PHP</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            background-color:rgb(233, 252, 255);
            padding: 30px;
            font-size: 30px;
        }

        .calculadora {
            background-color: rgb(236, 228, 255);
            padding: 25px;
            border-radius: 10px;
            max-width: 400px;
            margin: auto;
            box-shadow: 0 0 20px rgba(80, 0, 0, 0.1);
            text-align: center;
            font-weight: bold;
        }

        input, select {
            padding: 8px;
            margin: 10px 0;
            width: 80%;
            font-size: 20px;
        }

        .resultado {
            font-weight: bold;
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <div class="calculadora">
        <h2>Calculadora Básica</h2>
        <form method="post" action="">
            <label for="num1">Número 1:</label>
            <input type="number" name="num1" id="num1" required>

            <label for="num2">Número 2:</label>
            <input type="number" name="num2" id="num2" required>

            <label for="operacion">Operación:</label>
            <select name="operacion" id="operacion">
                <option value="suma">Suma</option>
                <option value="resta">Resta</option>
                <option value="multiplicacion">Multiplicación</option>
                <option value="division">División</option>
            </select>

            <input type="submit" value=" ➕➖Calcular✖️➗">
        </form>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $num1 = $_POST["num1"];
                $num2 = $_POST["num2"];
                $operacion = $_POST["operacion"];
                $resultado = "";

                switch ($operacion) {
                    case "suma":
                        $resultado = $num1 + $num2;
                        break;
                    case "resta":
                        $resultado = $num1 - $num2;
                        break;
                    case "multiplicacion":
                        $resultado = $num1 * $num2;
                        break;
                    case "division":
                        if ($num2 != 0) {
                            $resultado = $num1 / $num2;
                        } else {
                            $resultado = "Error: división por cero";
                        }
                        break;
                }

                echo "<p class='resultado'>Resultado: $resultado</p>";
            }
        ?>
    </div>

</body>
</html>
