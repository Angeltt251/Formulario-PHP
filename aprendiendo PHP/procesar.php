<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <h1>Resultados del formulario</h1>
    <?php
    // CON EL METODO POST CAPTURAMOS LOS DATOS DEL FORMULARIO
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];

    // MENSAJE PEESONALIZADO
    echo "<p>Hola, <strong>$nombre</strong>. Tienes <strong>$edad</strong> años.</p>";

    
    if ($edad < 18) {
        echo "<p>Eres menor de edad. aprovecha que despues te viene el sufrimiento llamado trabajo</p>"; // COMENTARIO SI ERE MENOR DE EDAD
    } else {
        echo "<p>Eres adulto. ya estas grande anda a trabajar flojo mrd</p>"; // COMENTARIO SI ERES MAYOR DE EDAD
    }
    ?>
    <br>
    <a href="index.php">Volver al formulario</a>
    <div>
    <p>bueno creo que le hagarro el hilo a esto de las paginas jajaja</p> 
    </div>
</body>
</html>
