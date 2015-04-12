<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>CEF Consultoría</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/style.min.css">

        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
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
                        <li><a href="cuestionario.html"> Diagnostico</a></li>
                        <li><a href="http://www.cef.mx/blog/"> Blog</a></li>
                        <li><a href="servicios.html">Servicios</a>
                        <li> <a href="contacto.php"> Contacto</a></li>
                        <li><a href="https://www.facebook.com/cef.consultoria?fref=ts" target="blank"><img src="img/fb.png" alt=""></a></li>
                        <li><a href="https://twitter.com/cef_mx" target="blank"><img src="img/tw.png" alt=""></a></li>
                    </ul>
                </div>
            </nav>
            <div class="main_body" align="center">
                <div class="wrapper clearfix">
                    <header class="int_head">
                        <div class="int_id" align="center"><img src="img/publicacionesImg.jpg" alt="Nosotros"><span>Contacto</span></div>
                    </header>
                    <?php
                        if (isset($_POST['enviar'])) {
                        $email = 'info@cef.mx';
                        /*$email = 'sinnerei@gmail.com';*/
                        $subject = "Datos de contacto";
                        $mensaje.= 'Datos' . "\n\n";
                        $mensaje.= 'Nombre de la empresa: ' . $_POST['nombre'] . "\n";
                        $mensaje.= 'Número telefónico: ' . $_POST['tel'] . "\n";
                        $mensaje.= 'Correo electrónico: ' . $_POST['mail'] . "\n";

                        $headers = 'De: '.$_POST['Contacto CEF'];
                        if (mail($email, $subject, $mensaje, $headers)) { ?>
                        <script>
                        function redireccionar() { document.location.href='contacto.php' }
                        alert ("Mensaje enviado");
                        setTimeout ('redireccionar()', 100);
                        </script>
                        <?php }
                        else { ?>
                        <script>
                        function redireccionar() { document.location.href='contacto.php' }
                        alert ("El mensaje no pudo ser enviado");
                        setTimeout ('redireccionar()', 100);
                        </script>
                        <?php }
                    } else {?>
                    <form class="contactform" name="datos" method="POST" action="" >
                        <fieldset>
                            <label>Contáctanos:</label><br>
                            <input type="text" required placeholder="Nombre" name="nombre" >
                            <input type="tel" required placeholder="Número telefónico" name="tel">
                            <input type="email" required placeholder="Correo electrónico" name="mail">
                            <input type="submit" value="Enviar" name="enviar">
                            <br>
                            
                        </fieldset>
                    </form>
                    <?php } ?>
                </div>
            </div>
        </div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
        <script src="js/main.min.js"></script>
    </body>
</html>