<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de control</title>
    <link rel="stylesheet" href="Diseños.css">
    <link rel="shortcut icon" href="Imágenes/solo-logo-sf.png" type="image/x-icon">
</head>

<body>
    <div class="Reloj">
        <h1>
            <?php
            header("Refresh:1");
            date_default_timezone_set('America/New_York');

            echo date("h:i:s a");
            ?>
        </h1>
    </div>
</body>

</html>