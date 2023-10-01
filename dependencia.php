<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/gracias.css">
    <link rel="icon" type="image/svg+xml" href="img/vita.svg">

    <title>Document</title>
</head>
<body>
    <div class="arriba">
        <input type="image"  class="im" src="img/return1.png" alt="" style="transform: rotate(300deg);" onclick="redi()">
        <h1>¡Califica tu experiencia!</h1>
    </div>

<div class="contenido">
<div class="titulo">
    <p>¿A qué coordinación iba dirigida tu solicitud?</p>
</div>
<form class="formulario" action="guardar_datos.php" method="POST">
    <button type="submit" name="cor" value="curriculo" class="botones bt_curriculo">
    <img src="img/curriculo.svg" alt="curriculo">
    <p>Coord. Currículo</p>
    </button>
    <button type="submit" name="cor" value="Pedagogia" class="botones bt_pedagogia">
    <img src="img/pedagogia.svg" alt="Pedagogia">
    <p>Coord. Pedagogía</p>
    </button>
    <button type="submit" name="cor" value="Académica" class="botones bt_academica">
    <img src="img/academica.svg" alt="Académica">
    <p>Coord. Académica</p>
    </button>
    <button type="submit" name="cor" value="Tecnologia" class="botones bt_tecnologia">
    <img src="img/tecnologia.svg" alt="Tecnologia">
    <p>Coord. Tecnología</p>
    </button>
    <button type="submit" name="cor" value="Evaluacion" class="botones bt_evaluacion">
    <img src="img/evaluacion.svg" alt="Evaluacion">
    <p>Coord. Evaluación </p>
    </button>
</form>
</div>
<footer >
    <p>Nos importa mucho saber cómo fue tu experiencia con nosotros y cómo podemos <strong> seguir mejorando.</strong></p>
</footer>
<script>
      function redi(){
          location.href="index.php";
          
      }
  </script>
  
</form>
</body>
</html>