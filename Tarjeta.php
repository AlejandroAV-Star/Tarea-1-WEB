<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi Tarjeta en PHP</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            background-color: rgb(0, 0, 0)l;
            margin: 150px;
        }

        .tarjeta {
            background-color: rgb(255, 215, 215);
            padding: 20px;
            border-radius: 20px;
            max-width: 1000px;
            margin: auto;
            box-shadow: 0 0 25px rgba(47, 1, 53, 0.61);
            text-align: center;
            font-size: 40px;;
        }

        .mayor {
            color: green;
        }

        .menor {
            color: red;
        }
    </style>
</head>
<body>
    <?php
        $nombre = "Manuel";
        $apellido = "Abreu";
        $edad = 20;
        $carrera = "Desarrollo de Software";
        $universidad = "Instituto Tecnológico de las Americas";
    ?>

    <div class="tarjeta">
        <h2><?php echo $nombre . " " . $apellido; ?></h2>
        <p><strong>Edad:</strong> <?php echo $edad; ?> años</p>
        <p><strong>Carrera:</strong> <?php echo $carrera; ?></p>
        <p><strong>Universidad:</strong> <?php echo $universidad; ?></p>

        <?php
            if ($edad >= 18) {
                echo "<p class='mayor'>Eres mayor de edad</p>";
            } else {
                echo "<p class='menor'>Eres menor de edad</p>";
            }
        ?>
    </div>
</body>
</html>