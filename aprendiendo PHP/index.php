<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario PHP</title>
</head>
<body>
    <h1>¡Bienvenido!</h1>
    <p>Completa el formulario y presiona enviar:</p>
    <form action="procesar.php" method="POST"> 
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" required><br><br>
        
        <label for="edad">Edad:</label><br>
        <input type="number" id="edad" name="edad" required><br><br>
        
        <input type="submit" value="Enviar">
    </form>
</body>
</html>

