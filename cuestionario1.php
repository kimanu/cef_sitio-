<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>CEF Consultoría</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/style.min.css">
        <link rel="stylesheet" href="css/diego.css">

       

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
                        <li><a href="../index.html">Inicio</a></li>
                        <li><a href="nosotros.html">Nosotros</a></li>
                        <li><a href="cuestionario1.php"> Diagnostico</a></li>
                        <li><a href="http://www.cef.mx/blog/"> Blog</a></li>
                        <li><a href="servicios.html">Servicios</a>
                        <li> <a href="contacto.php">"> Contacto</a></li>
                        <li><a href="https://www.facebook.com/cef.consultoria?fref=ts" target="blank"><img src="../img/fb.png" alt=""></a></li>
                        <li><a href="https://twitter.com/cef_mx" target="blank"><img src="../img/tw.png" alt=""></a></li>
                    </ul>
                </div>
            </nav>
            <div class="main_body">
                <div class="wrapper clearfix">
                    <header class="int_head">
                        <div class="int_id"><img src="img/publicacionesImg.jpg" alt="Nosotros"><span>Diagnóstico de empresa</span></div>
                    </header>
                    <?php
                        if (isset($_POST['enviar'])) {
                        $email = 'francisco@cef.mx';
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
                        $mensaje.= 'Pregunta 16: ' . $_POST['question16'] . "\n";
                        $mensaje.= 'Pregunta 17: ' . $_POST['question17'] . "\n";
                        $mensaje.= 'Pregunta 18: ' . $_POST['question18'] . "\n";
                        $mensaje.= 'Pregunta 19: ' . $_POST['question19'] . "\n";
                        $mensaje.= 'Pregunta 20: ' . $_POST['question20'] . "\n";
                        $mensaje.= 'Pregunta 21: ' . $_POST['question21'] . "\n";
                        $mensaje.= 'Pregunta 22: ' . $_POST['question22'] . "\n";
                        $mensaje.= 'Pregunta 23: ' . $_POST['question23'] . "\n";
                        $mensaje.= 'Pregunta 24: ' . $_POST['question24'] . "\n";
                        $mensaje.= 'Pregunta 25: ' . $_POST['question25'] . "\n";
                        $mensaje.= 'Pregunta 26: ' . $_POST['question26'] . "\n";
                        $mensaje.= 'Pregunta 27: ' . $_POST['question27'] . "\n";
                        $mensaje.= 'Pregunta 28: ' . $_POST['question28'] . "\n";
                        $mensaje.= 'Pregunta 29: ' . $_POST['question29'] . "\n";

                        $headers = 'De: '.$_POST['participante'];
                        if (mail($email, $subject, $mensaje, $headers)) { ?>
                        <script>
                        function redireccionar() { document.location.href='cuestionario1.php' }
                        alert ("Mensaje enviado");
                        setTimeout ('redireccionar()', 100);
                        </script>
                        <?php }
                        else { ?>
                        <script>
                        function redireccionar() { document.location.href='cuestionario1.php' }
                        alert ("El mensaje no pudo ser enviado");
                        setTimeout ('redireccionar()', 100);
                        </script>
                        <?php }
                    } else {?>
                    <form class="cuestionario" name="datos" method="POST" action="">
                    	<fieldset>
                    		<legend><h1>Instrucciones</h1></legend>
                    		<p class="inst">
                    			Para evaluar el nivel de desarrollo de la Empresa Familiar, se plantean <strong>treinta preguntas</strong> divididas en tres temas, que califican de acuerdo a la percepción del empresario:
                    			<br><br>
                    			<strong>Considerando 1 como el valor más bajo y 5 como el más alto.</strong>
                    			<br><br>
                    			Es importante contestar con objetividad, ya que de lo contrario, no se obtendría información confiable.
                    		</p>
                    	</fieldset>
                    	<fieldset class="bdata">
                    		<legend><h1>Datos de la empresa</h1></legend><br>
                    		<input type="text" required placeholder="Nombre de la empresa" name="empresa">
                    		<input type="text" required placeholder="Nombre del participante" name="participante">
                    		<input type="text" required placeholder="Cargo en la empresa" name="cargo">
                    		<input type="text" required placeholder="Giro comercial" name="giro">
                    		<input type="text" required placeholder="Domicilio" name="domicilio">
                    		<input type="tel" required placeholder="Número telefónico" name="tel">
                    		<input type="email" required placeholder="Correo electrónico" name="mail">
                    		<br>
                    	</fieldset>
                    	<fieldset >
                    		<legend class="cuestype" data-type="1"><h1>Cuestionario: <progress class="progreso" value="0" max="29"></progress></h1></legend>
                    		<ul class="bquestions jorge">
                    			<li><p class="question"><label>¿La empresa es un medio para mejorar la condición de vida de la familia?</label><br></p>
                    			<p class="answer"><input type="number" required min="1" max="5" name="question1"></p></li>

                    			<li><p class="question"><label>¿Los miembros de la familia que ingresan a la empresa lo hacen de manera voluntaria?</label><br></p>
                    			<p class="answer"><input type="number" required min="1" max="5" name="question2"></p></li>

                    			<li><p class="question"><label>¿Los miembros de la familia que participan en la empresa familiar tienen experiencia Profesional previa en otras empresas?</label><br></p>
                    			<p class="answer"><input type="number" required min="1" max="5" name="question3"></p></li>

                    			<li><p class="question"><label>¿Se tiene una visión compartida del negocio entre familia y empresa?</label><br></p>
                    			<p class="answer"><input type="number" required min="1" max="5" name="question4"></p></li>

                    			<li><p class="question"><label>¿Hay compromiso por parte de los miembros de la familia hacia el proyecto de largo plazo de la empresa?</label><br></p>
                    			<p class="answer"><input type="number" required min="1" max="5" name="question5"></p></li>

                    			<li><p class="question"><label>¿Los proyectos de largo plazo de la empresa toman en cuenta las circunstancias familiares?</label><br></p>
                    			<p class="answer"><input type="number" required min="1" max="5" name="question6"></p></li>

                    			<li><p class="question"><label>¿Se tiene un Consejo de Familia para tratar temas relacionados con la empresa?</label><br></p>
                    			<p class="answer"><input type="number" required min="1" max="5" name="question7"></p></li>

                    			<li><p class="question"><label>¿Los miembros de la familia dirimen por si mismos las diferencias que surgen con relación a la empresa?</label><br></p>
                    			<p class="answer"><input type="number" required min="1" max="5" name="question8"></p></li>

                    			<li><p class="question"><label>¿Se tiene un plan de sucesión escrito?</label><br></p>
                    			<p class="answer"><input type="number" required min="1" max="5" name="question9"></p></li>

                    			<li><p class="question"><label>¿Los fundadores de la empresa tienen un plan de vida para después del retiro?</label><br></p>
                    			<p class="answer"><input type="number" required min="1" max="5" name="question10"></p></li>

                    			<li><p class="question"><label>¿Las promociones se basan en méritos y habilidades con relación al perfil del puesto, y son remunerados con compensaciones de mercado?</label><br></p>
                    			<p class="answer"><input type="number" required min="1" max="5" name="question11"></p></li>

                    			<li><p class="question"><label>¿El fundador ha hecho un presupuesto para el retiro que contemple a su pareja?</label><br></p>
                    			<p class="answer"><input type="number" required min="1" max="5" name="question12"></p></li>

                    			<li><p class="question"><label>¿El fundador cuenta con los mecanismos legales idóneos para suceder su patrimonio?</label><br></p>
                    			<p class="answer"><input type="number" required min="1" max="5" name="question13"></p></li>

                    			<li><p class="question"><label>¿Se mantiene actualizado la emisión y registro de acciones?</label><br></p>
                    			<p class="answer"><input type="number" required min="1" max="5" name="question14"></p></li>

                    			<li><p class="question"><label>¿La familia tiene un acuerdo de compraventa de acciones que todos comprenden y aceptan?</label><br></p>
                    			<p class="answer"><input type="number" required min="1" max="5" name="question15"></p></li>

                    			<li><p class="question"><label>¿Se presenta la información financiera a familiares, socios y accionistas?</label><br></p>
                    			<p class="answer"><input type="number" required min="1" max="5" name="question16"></p></li>

                    			<li><p class="question"><label>¿El fundador ha determinado cuándo y cómo se retirará de la empresa?</label><br></p>
                    			<p class="answer"><input type="number" required min="1" max="5" name="question17"></p></li>

                    			<li><p class="question"><label>¿El fundador sabe cómo hará la sucesión de la propiedad y la administración?</label><br></p>
                    			<p class="answer"><input type="number" required min="1" max="5" name="question18"></p></li>

                    			<li><p class="question"><label>¿El fundador ha contemplado las implicaciones de su decisión al hacer el plan de sucesión?</label><br></p>
                    			<p class="answer"><input type="number" required min="1" max="5" name="question19"></p></li>

                    			<li><p class="question"><label>¿El fundador está seguro de la conformidad de sus sucesores al transferir su patrimonio?</label><br></p>
                    			<p class="answer"><input type="number" required min="1" max="5" name="question20"></p></li>

                    			<li><p class="question"><label>¿El ambiente empresarial fomenta el desarrollo de los jóvenes de la familia?</label><br></p>
                    			<p class="answer"><input type="number" required min="1" max="5" name="question21"></p></li>

                    			<li><p class="question"><label>¿En el consejo de administración, se incluyen a miembros ajenos a la familia?</label><br></p>
                    			<p class="answer"><input type="number" required min="1" max="5" name="question22"></p></li>

                    			<li><p class="question"><label>¿Se delega responsabilidades para la toma de decisiones?</label><br></p>
                    			<p class="answer"><input type="number" required min="1" max="5" name="question23"></p></li>

                    			<li><p class="question"><label>¿Los puestos directivos de la empresa los ejercen profesionales ajenos a la familia?</label><br></p>
                    			<p class="answer"><input type="number" required min="1" max="5" name="question24"></p></li>

                    			<li><p class="question"><label>¿Se tiene por escrito algún plan estratégico de largo plazo?</label><br></p>
                    			<p class="answer"><input type="number" required min="1" max="5" name="question25"></p></li>

                    			<li><p class="question"><label>¿Las metas de la empresa son definidas y evaluadas?</label><br></p>
                    			<p class="answer"><input type="number" required min="1" max="5" name="question26"></p></li>

                    			<li><p class="question"><label>¿Se cuenta por escrito con organigrama y profesiogramas que incluyan los puestos y las funciones, de los miembros de la familia?</label><br></p>
                    			<p class="answer"><input type="number" required min="1" max="5" name="question27"></p></li>

                    			<li><p class="question"><label>¿En la empresa se cuenta con políticas de contratación para familiares?</label><br></p>
                    			<p class="answer"><input type="number" required min="1" max="5" name="question28"></p></li>

                    			<li><p class="question"><label>¿Los miembros de la familia son evaluados en su desempeño laboral?</label><br></p>
                    			<p class="answer"><input type="number" required min="1" max="5" name="question29"></p></li>
                    		</ul>
                    	</fieldset>
                    	<fieldset class="enviaresp jorge">
                    		<div class="nextq">Siguiente</div>
                    		<input type="submit" value="Enviar respuestas" class="sansw" name="enviar">
                    	</fieldset>
                    </form>
                    <?php } ?>
                </div>
            </div>
        </div>
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
         <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <script src="js/main.min.js"></script>
        <script src="js/diego.js"></script>
    </body>
</html>
