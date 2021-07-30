<?php
//arreglo con mensajes que puede recibir
$messages = [
    "1" => "Contraseña Incorrecta o Usuario no Existe",
    "2" => "No ha iniciado sesión"
];
?>
<!DOCTYPE html>
<html>
<head>
<title>Login | SERVICIOS INFORMATICOS</title>
    <meta name="description" content="Registro de Notas Escuela Rural Mixta Gualandayes" />
    <link rel="stylesheet" href="css/style.css" />

</head>
<aside class=sidebar>
                <nav class="menú"><ul center>
                <br>
                <br>
                <br>
                <section class="escudo"><li><img src="img\escudo2.png" alt=""></li></section>
                <br>
                <br>
                <center> <li><button type="button" class="btn btn-outline-success"><a href="http://localhost/Calificaciones2/portal%20chat/vistas/index.php">Chat comunidad educativa</a></button></li></center> 
                <br>
                <li><a href="http://localhost/Calificaciones2/"> Inicio </a> </li>
                <li><a href="http://localhost/Calificaciones2/Portal%20Notas/aplicacion/index.php"> Servicios Informaticos </a> </li>
                <li><a href="http://localhost/Calificaciones2/Formulario_contacto/Contacto.html">Contáctenos</a> </li>
                
            </ul>
            </nav>
        </aside>
<section class= cuerpo>
<body>
<div class="header">

        <h1>SERVICIOS INFORMATICOS - Escuela Rural Mixta Gualandayes</h1>

</div>

<div class="body">
    <div class="panel-login">
            <h4>Inicio de Sesion</h4>
            <form method="post" class="form" action="login_post.php">
                <label>Usuario</label><br>
                <input type="text" name="username">
                <br>
                <label>Contraseña</label><br>
                <input type="password" name="password">
                <br><br>
                <button type="submit">Entrar</button>
            </form>
        <?php
        if(isset($_GET['err']) && is_numeric($_GET['err']) && $_GET['err'] > 0 && $_GET['err'] < 3 )
            echo '<span class="error">'.$messages[$_GET['err']].'</span>';
        ?>
        </div>
</div>

</div>


              <center><p><a href="https://www.gobiernoenlinea.gov.co/" target="_blank"><img style="margin-left: 0px;" src="img\gob.col.png" alt="Gobierno en línea" width="57" height="50"></a> <a href="http://www.mineducacion.gov.co/" target="_blank"><img src="img\mineducacion.png" alt="Secretaría de Educación Colombia" width="224
                " height="50"></a><a href="http://www.icfes.gov.co" target="_blank"><img src="img/icfes.png" alt="ICFES" width="156" height="50" /></a> <a href="http://www.seduca.gov.co/" target="_blank"><img src="img\seduca.png" alt="Secretaria de Educación Antioquia" width="116" height="50"></a> <a href="http://www.envigado.gov.co/" target="_blank"><img src="img\envigado.png" alt="Alcaldía de Envigado" width="116" height="50"></a> <a href="http://www.envigado.edu.co/" target="_blank"><img src="img\sumamos.png" alt="Secretaría de Educación de Envigado" width="224" height="50"></a> </p></div><a href="https://www.mintic.gov.co/" target="_blank"><img style="margin-left: 0px;" src="img\mintic.png" alt="Mintic" width="224" height="50"></a>
              <p style="font-size:10px;">Institución Educativa Gualandayes |
               Dirección: Carrera 25A No.41bsur SUR 25 |  Teléfono: 3102506874 | Envigado -
               Antioquia - Colombia <br></center>

              </div>
              <p><center>&copy Derechos reservados 2021</center></p>
                <p><center> Jose Leal&reg - Jorge Restrepo&reg</center></p>
</body>
</section>

</html>