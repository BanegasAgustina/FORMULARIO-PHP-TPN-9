<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Suscripción</title>
    <link rel="stylesheet" href="f.css">
</head>
<body>
    <div class="container">
        <h2>Formulario de Suscripción</h2>
        <form action="rform.php" method="post" name="frmSuscripcion">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            
            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" required>
            
            <label for="edad">Edad:</label>
            <input type="number" id="edad" name="edad" required>
            
            <label for="dni">DNI:</label>
            <input type="text" id="dni" name="dni" required>
            
            <label for="fechaNacimiento">Fecha de Nacimiento:</label>
            <input type="date" id="fechaNacimiento" name="fechaNacimiento" required>
            
            <label for="genero">Género:</label>
            <select id="genero" name="genero" required>
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
                <option value="Otro">Otro</option>
            </select>
            
            <label for="lugarNacimiento">Lugar de Nacimiento:</label>
            <input type="text" id="lugarNacimiento" name="lugarNacimiento" required>
            
            <label for="direccion">Dirección:</label>
            <input type="text" id="direccion" name="direccion" required>
            
            <label for="intereses">Intereses y/o Hobbies:</label>
            <textarea id="intereses" name="intereses" rows="4" required></textarea>
            
            <label for="comentarios">Comentarios:</label>
            <textarea id="comentarios" name="comentarios" rows="4"></textarea>
            
            <input type="submit" value="Suscribirse">
        </form>
    </div>
</body>
</html>
