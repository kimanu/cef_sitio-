<!DOCTYPE html>
<html class="no-js">
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>CEF Consultoría</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/style.min.css">
  </head>
  <body>
    <div class="main">
      <header class="main_head">
        <div class="wrapper">
          <div class="logo"><a href="index.html">C.E.F.</a></div>
          <div class="caption">
            <span class="naranja">CONSULTORES<br>
            DE EMPRESAS<br></span>
            <span class="blanco">FAMILIARES<br></span>
            <span class="naranja">&amp; ASOCIADOS</span>
          </div>
        </div>
      </header>
      <nav class="main_nav">
        <div class="wrapper">
          <ul>
            <li><a href="index.html">Inicio</a></li>
            <li><a href="nosotros.html">Nosotros</a></li>
            <li><a href="cuestionario.php"> Diagnostico</a></li>
            <li><a href="http://www.cef.mx/blog/"> Blog</a></li>
            <li><a href="servicios.html">Servicios</a>
            <li> <a href="contacto.php"> Contacto</a></li>
            <li><a href="https://www.facebook.com/consultoriaef" target="blank"><img src="img/fb.png" alt=""></a></li>
            <li><a href="https://twitter.com/cef_mx" target="blank"><img src="img/tw.png" alt=""></a></li>
          </ul>
        </div>
      </nav>
      <?php
        if (isset($_POST['enviar'])) {
        $email = 'kim_kula@hotmail.com';
        /*$email = 'sinnerei@gmail.com';*/
        $subject = "Cuestionario";
        $mensaje.= 'Datos' . "\n\n";
        $mensaje.= 'Nombre de la empresa: ' . $_POST['empresa'] . "\n";
        $mensaje.= 'Nombre del participante: ' . $_POST['participante'] . "\n";
        $mensaje.= 'Cargo en la empresa: ' . $_POST['cargo'] . "\n";
        $mensaje.= 'Giro comercial: ' . $_POST['giro'] . "\n";
        $mensaje.= 'Domicilio: ' . $_POST['domicilio'] . "\n";
        $mensaje.= 'Número telefónico: ' . $_POST['tel'] . "\n";
        $mensaje.= 'Correo electrónico: ' . $_POST['mail'] . "\n";
        $mensaje.= "\n\n";
        $mensaje.= 'Respuestas del cuestionario' . "\n\n";
        $mensaje.= 'Pregunta 1: ' . $_POST['question1'] . "\n";
        $mensaje.= 'Pregunta 2: ' . $_POST['question2'] . "\n";
        $mensaje.= 'Pregunta 3: ' . $_POST['question3'] . "\n";
        $mensaje.= 'Pregunta 4: ' . $_POST['question4'] . "\n";
        $mensaje.= 'Pregunta 5: ' . $_POST['question5'] . "\n";
        $mensaje.= 'Pregunta 6: ' . $_POST['question6'] . "\n";
        $mensaje.= 'Pregunta 7: ' . $_POST['question7'] . "\n";
        $mensaje.= 'Pregunta 8: ' . $_POST['question8'] . "\n";
        $mensaje.= 'Pregunta 9: ' . $_POST['question9'] . "\n";
        $mensaje.= 'Pregunta 10: ' . $_POST['question10'] . "\n";
        $mensaje.= 'Pregunta 11: ' . $_POST['question11'] . "\n";
        $mensaje.= 'Pregunta 12: ' . $_POST['question12'] . "\n";
        $mensaje.= 'Pregunta 13: ' . $_POST['question13'] . "\n";
        $mensaje.= 'Pregunta 14: ' . $_POST['question14'] . "\n";
        $mensaje.= 'Pregunta 15: ' . $_POST['question15'] . "\n";
        
        
        $headers = 'De: '.$_POST['participante'];
        if (mail($email, $subject, $mensaje, $headers)) { ?>
      <script>
        function redireccionar() { document.location.href='cuestionario.php' }
        alert ("Mensaje enviado");
        setTimeout ('redireccionar()', 100);
      </script>
      <?php }
        else { ?>
      <script>
        function redireccionar() { document.location.href='cuestionario.php' }
        alert ("El mensaje no pudo ser enviado");
        setTimeout ('redireccionar()', 100);
      </script>
      <?php }
        } else { ?>
      <form class="cuestionario" name="datos" method="POST" action="">
        <fieldset class="bdata">
          <legend>
            <h1>Datos de la empresa</h1>
          </legend>
          <br>
          <input class="emp-info" type="text" required placeholder="Nombre de la empresa" name="empresa">
          <input class="emp-info" type="text" required placeholder="Nombre del participante" name="participante">
          <input class="emp-info" type="text" required placeholder="Cargo en la empresa" name="cargo">
          <input class="emp-info" type="text" required placeholder="Giro comercial" name="giro">
          <input class="emp-info" type="text" required placeholder="Domicilio" name="domicilio">
          <input class="emp-info" type="tel" required placeholder="Número telefónico" name="tel">
          <input class="emp-info" type="email" required placeholder="Correo electrónico" name="mail">
          <br>
          <div class="validinfo">Siguiente</div>
        </fieldset>
        <fieldset class="questions">
          <legend class="cuestype" data-type="1">
            <h1>Cuestionario: <progress class="progreso" value="0" max="15"></progress></h1>
          </legend>
          <fieldset>
            <legend>
              <h1>Instrucciones</h1>
            </legend>
            <p class="inst">
              Para evaluar el nivel de desarrollo de la Empresa Familiar, se plantean <strong>Quince preguntas</strong> divididas en tres temas, que califican de acuerdo a la percepción del empresario:
              <br><br>
              <strong>1 Totalmente en desacuerdo 2 En desacuerdo 3 Indeciso 4 De acuerdo 5 Totalmente de acuerdo. </strong>
              <br><br>
              Es importante contestar con objetividad, ya que de lo contrario, no se obtendría información confiable.
            </p>
          </fieldset>
          <ul class="bquestions">
            <li class="showed" style="display: list-item;">
              <p class="question"><label>¿Existe una visión compartida del negocio entre familia y empresa?</label><br></p>
              <p class="answer"><input required type="number" min="1" max="5" class="question1" name="question1"></p>
            </li>
            <li>
              <p class="question"><label>¿Los proyectos de largo plazo de la empresa toman en cuenta las circunstancias de la familia?</label><br></p>
              <p class="answer"><input required type="number" min="1" max="5" class="question2" name="question2"></p>
            </li>
            <li>
              <p class="question"><label>¿La familia cuenta con un Consejo de Familia para tratar formalmente temas de la empresa?</label><br></p>
              <p class="answer"><input required type="number" min="1" max="5" class="question3" name="question3"></p>
            </li>
            <li>
              <p class="question"><label>¿Existe un plan de sucesión escrito? (NO TESTAMENTO)?</label><br></p>
              <p class="answer"><input required type="number" min="1" max="5" class="question4" name="question4"></p>
            </li>
            <li>
              <p class="question"><label>¿Los fundadores de la empresa tienen un plan de vida para después del retiro?</label><br></p>
              <p class="answer"><input required type="number" min="1" max="5" class="question5" name="question5"></p>
            </li>
            <li>
              <p class="question"><label>¿Existe un consejo de administración, dónde se incluyen miembros ajenos a la familia?</label><br></p>
              <p class="answer"><input required type="number" min="1" max="5" class="question6" name="question6"></p>
            </li>
            <li>
              <p class="question"><label>¿Profesionales ajenos a la familia ocupan altos cargos en la empresa?</label><br></p>
              <p class="answer"><input required type="number" min="1" max="5" class="question7" name="question7"></p>
            </li>
            <li>
              <p class="question"><label>¿Existe un plan estratégico de largo plazo por escrito?</label><br></p>
              <p class="answer"><input required type="number" min="1" max="5" class="question8" name="question8"></p>
            </li>
            <li>
              <p class="question"><label>¿Existe definición de puestos y funciones, incluyendo a los miembros de la familia?</label><br></p>
              <p class="answer"><input required type="number" min="1" max="5" class="question9" name="question9"></p>
            </li>
            <li>
              <p class="question"><label>¿Los ascensos están basados en méritos y habilidades, con compensaciones de mercado?</label><br></p>
              <p class="answer"><input required type="number" min="1" max="5" class="question10" name="question10"></p>
            </li>
            <li>
              <p class="question"><label>¿La empresa ha sido valuada y se revisa su valor periódicamente?</label><br></p>
              <p class="answer"><input required type="number" min="1" max="5" class="question11" name="question11"></p>
            </li>
            <li>
              <p class="question"><label>¿Se mantiene actualizado la emisión y registro de acciones?</label><br></p>
              <p class="answer"><input required type="number" min="1" max="5" class="question12" name="question12"></p>
            </li>
            <li>
              <p class="question"><label>¿La información financiera se presenta a familiares, socios y accionistas?</label><br></p>
              <p class="answer"><input required type="number" min="1" max="5" class="question13" name="question13"></p>
            </li>
            <li>
              <p class="question"><label>¿El fundador sabe cómo hará la sucesión de la propiedad y la administración?</label><br></p>
              <p class="answer"><input required type="number" min="1" max="5" class="question14" name="question14"></p>
            </li>
            <li>
              <p class="question"><label>¿El fundador está seguro de la conformidad de sus sucesores al transferir su patrimonio?</label><br></p>
              <p class="answer"><input required type="number" min="1" max="5" class="question15" name="question15"></p>
            </li>
          </ul>
        </fieldset>
        <div class="semaforo_rojo">
          <img src="img/1.png">
        </div>
        <div class="semaforo_amarillo">
          <img src="img/2.png">
        </div>
        <div class="semaforo_verde">
          <img src="img/3.png">
        </div>
        <fieldset class="enviaresp">
          <div class="nextq">Siguiente</div>
          <input type="submit" value="Enviar respuestas" class="sansw" name="enviar">
        </fieldset>
      </form>
      <?php } ?>
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    <script src="js/actions.js"></script>
  </body>
</html>