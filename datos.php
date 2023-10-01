<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/css.css">
    <link rel="icon" type="image/svg+xml" href="img/vita.svg">
    
</head>
<body>
    <div class="arriba">
        <input type="image"  class="im" src="img/return1.png" alt="" style="transform: rotate(300deg);" onclick="redi()">
        <h1>¡Califica tu experiencia!</h1>
    </div>
    <script>
        function validarFormulario() {
          // Obtener las opciones seleccionadas de cada grupo de checkboxes
          var grupo1 = document.querySelectorAll('input[name="grupo1[]"]:checked');
          var grupo2 = document.querySelectorAll('input[name="grupo2[]"]:checked');
          var grupo3 = document.querySelectorAll('input[name="grupo3[]"]:checked');
      
          // Verificar si se ha seleccionado al menos una opción en cada grupo
          if (grupo1.length === 0 || grupo2.length === 0 || grupo3.length === 0) {
            alert('Debes seleccionar al menos una opción en cada grupo.');
            return false; // Cancelar el envío del formulario
          }
        }
      
        function habilitarBoton() {
          var grupo1 = document.querySelectorAll('input[name="grupo1[]"]:checked');
          var grupo2 = document.querySelectorAll('input[name="grupo2[]"]:checked');
          var grupo3 = document.querySelectorAll('input[name="grupo3[]"]:checked');
          var botonEnviar = document.getElementById('botonEnviar');
      
          // Habilitar o deshabilitar el botón de acuerdo a las opciones seleccionadas
          if (grupo1.length > 0 && grupo2.length > 0 && grupo3.length > 0) {
            botonEnviar.disabled = false;
          } else {
            botonEnviar.disabled = true;
          }
        }
      </script>
      
      <form class="formulario" action="guardar_datos.php" method="post" onsubmit="return validarFormulario()">
        <div class="contenidoo">
            <div class="sesion1">
            <p>¿Qué tan satisfecho estás con la atención y amabilidad del personal?</p> 
            <div class="botones" id="p1">
              <label class="button-like-checkbox">
                <input type="checkbox" name="grupo1[]" value="Insatisfecho" onclick="deseleccionarOtros(this)">
                <span class="checkbox-label" id="tm">Insatisfecho</span>
              </label>
              <label class="button-like-checkbox">
                <input type="checkbox" name="grupo1[]" value="Neutral" onclick="deseleccionarOtros(this)">
                <span class="checkbox-label" id="tm">Neutral</span>
              </label>
              <label class="button-like-checkbox">
                <input type="checkbox" name="grupo1[]" value="Satisfecho" onclick="deseleccionarOtros(this)">
                <span class="checkbox-label" id="tm">Satisfecho</span>
              </label>
            </div>
          </div>
          <div class="sesion2">
            <p>¿En qué medida logramos resolver tu inquietud o necesidad?</p>
            <div class="botones"> 
              <label class="button-like-checkbox">
                <input type="checkbox" name="grupo2[]" value="No resuelta" onclick="deseleccionarOtros(this)">
                <span class="checkbox-label">No resuelta</span>
              </label>
              <label class="button-like-checkbox">
                <input type="checkbox" name="grupo2[]" value="Parcialmente resuelta" onclick="deseleccionarOtros(this)">
                <span class="checkbox-label">Parcialmente<br> resuelta</span>
              </label>
              <label class="button-like-checkbox">
                <input type="checkbox" name="grupo2[]" value="Completamente resuelta" onclick="deseleccionarOtros(this)">
                <span class="checkbox-label">Completamente<br> resuelta</span>
              </label>
            </div>
            </div>
            <div class="sesion3">
            <p>¿Cómo calificarías tu experiencia en nuestras oficinas?<p>
            <div class="botones" id="p1">
              <label class="button-like-checkbox">
                <input type="checkbox" name="grupo3[]" value="Mala" onclick="deseleccionarOtros(this)">
                <span class="checkbox-label" id="tm">Mala</span>
              </label>
              <label class="button-like-checkbox">
                <input type="checkbox" name="grupo3[]" value="Regular" onclick="deseleccionarOtros(this)">
                <span class="checkbox-label " id="tm" >Regular</span>
              </label>
              <label class="button-like-checkbox">
                <input type="checkbox" name="grupo3[]" value="Buena" onclick="deseleccionarOtros(this)">
                <span class="checkbox-label" id="tm">Buena</span>
              </label>
            </div>
          </div>
          </div>
        <div class="conenviar">
          <input class="enviar" id="botonEnviar" name="enviar" type="submit" value="Finalizar" disabled>
        </div>
      </form>
      <script>
        function deseleccionarOtros(checkbox) {
        const grupo = checkbox.getAttribute('name');
        const checkboxes = document.getElementsByName(grupo);
  
        for (let i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i] !== checkbox) {
            checkboxes[i].checked = false;
            }
        }
        }
  
      </script>
      
      <script>
        // Llamar a la función habilitarBoton() cada vez que se haga clic en un checkbox
        var checkboxes = document.querySelectorAll('input[type="checkbox"]');
        for (var i = 0; i < checkboxes.length; i++) {
          checkboxes[i].addEventListener('click', habilitarBoton);
        }
      </script>
      <script>
        // Llamar a la función habilitarBoton() cada vez que se haga clic en un checkbox
        var checkboxes = document.querySelectorAll('input[type="checkbox"]');
        for (var i = 0; i < checkboxes.length; i++) {
          checkboxes[i].addEventListener('click', habilitarBoton);
        }
      </script>
      <script>
      function redi(){
          location.href="dependencia.php";
          
      }
  </script>
    
    <footer >
        
        <p>Nos importa mucho saber cómo fue tu experiencia con nosotros y cómo podemos <strong> seguir mejorando.</strong></p>
    
    </footer>
    
</body>
</html>