<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contenedor en HTML y PHP</title>
    <style>
        /* Estilo básico para el contenedor */
        .container {
            width: 50%;
            margin: 0 auto;
            padding: 20px;
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .message {
            font-size: 1.5rem;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="message">
            <?php
                // Mensaje generado desde PHP
                $message = "¡Hola! Este es un mensaje desde PHP dentro de un contenedor HTML.";
                echo $message;
            ?>
        </div>
    </div>
</body>
</html>
