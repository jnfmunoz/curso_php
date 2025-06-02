<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios</title>
</head>
<body>
    <!-- <form action="procesar.php" method="GET"> -->
    <form action="procesar.php" method="POST" enctype="multipart/form-data">
        <label>
            Nombre:
            <input type="text" name="name">
        </label>
        <br>
        <br>
        <label>
            Edad:
            <input type="number" name="edad">
        </label>
        <br>
        <p>Sexo: </p>
        <label>
            <input type="radio" name="sexo" value="Masculino">
            Masculino:
        </label>
        <label>
            <input type="radio" name="sexo" value="Femenino">
            Femenino:
        </label>
        <br>
        <p>Roles: </p>
        <label>
            <input type="checkbox" name="roles[]" value="Administrador">
            Administrador
        </label>
        <label>
            <input type="checkbox" name="roles[]" value="Editor">
            Editor
        </label>
        <label>
            <input type="checkbox" name="roles[]" value="Moderador">
            Moderador
        </label>
        <br>
        <br>
        <label>
            Imagen
            <input type="file" name="image" src="" alt="">
        </label>
        <br>
        <br>
        <button type="submit">Enviar</button>
        
    </form>
</body>
</html>
