<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/gracias.css">
    <link rel="icon" type="image/svg+xml" href="img/vita.svg">
    <title>Document</title>

</head>
<body>
<div class="arriba" >
        <h1>¡Califica tu experiencia!</h1>
</div>

<div class="contenido">
<div class="titulo" style="margin-top: 200px;">
    <p>¿Cuál es tu rol dentro de la institución?</p>
</div>
    
<form class="formulario" action="guardar_datos.php" method="POST">
    <button type="submit" name="rol" value="profesor" class="botones bt_profesor">
        <img src="img/maestro.svg" alt="Profesor">
        <p>Profesor/a</p>
    </button>
    <button type="submit" name="rol" value="estudiante" class="botones bt_estudiante">
        <img src="img/estudiante.svg" alt="Estudiante">
        <p>Estudiante</p>
    </button>
</form>
</div>
    <footer >
        
        <p>Nos importa mucho saber cómo fue tu experiencia con nosotros y cómo podemos <strong> seguir mejorando.</strong></p>
    
       </footer>


</body>
</html>