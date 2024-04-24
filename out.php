<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Datos del Formulario</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        h1 {
            margin: 0;
            font-size: 24px;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        p {
            font-size: 18px;
            line-height: 1.6;
        }

        pre {
            background-color: #f5f5f5;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            white-space: pre-wrap;
        }

        a {
            text-decoration: none;
            color: #0074D9;
        }

        .subtitulo {
            font-size: 20px;
            margin-top: 10px;
        }

        .separador {
            margin-top: 20px;
            border-top: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <header>
        <h1>Datos del Formulario</h1>
    </header>

    <div class="container">
        <?php
        session_start();

        if (isset($_SESSION["datos_guardados"])) 
        {
            $datos = $_SESSION["datos_guardados"];
            echo "<p>A continuación se muestran los datos que proporcionaste:</p>";
            $lineas = explode("\n", $datos);
            foreach ($lineas as $linea) {
                if (!empty($linea)) {
                    echo "<p class='subtitulo'>$linea</p>";
                }
            }
        } else
        {
            echo "<p>No se encontraron datos para mostrar.</p>";
        }
        ?>

        <div class="separador"></div>

        <p><a href="formulario.html">Volver al Formulario</a></p>
    </div>
</body>
</html>
