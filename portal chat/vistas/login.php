<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: usuarios.php");
  }
?>

<?php include_once "header.php"; ?>
<section class= cuerpo>
  
<div class="body">
    <div class="panel">
           <h1 class="text-center">Escuela Rural Mixta Gualandayes</h1>
       
        <br>
        <hr>
        <p class="text-center"><strong>Integrantes GRUPO </strong><br>
        <br>
        </div>
</div>
  
<body>
  <div class="wrapper">
    <section class="form login">
      <header> CHAT EDUCATIVO EN LINEA</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Correo electrónico</label>
          <input type="text" name="email" placeholder="Introduce tu correo electrónico" required>
        </div>
        <div class="field input">
          <label>Contraseña</label>
          <input type="password" name="password" placeholder="Ingresa tu contraseña" required>
          <i class="fas fa-eye"></i>
        </div>
        <b>
   <center> <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
      Aceptar términos y condiciones
      </label></center>
   <b>
        <div class="field button">
          <input type="submit" name="submit" value="Iniciar Chat">
        </div>
      </form>
      <div class="link">Eres Nuevo?<br> <a href="index.php">Regístrate</a></div>
    </section>
    
   <center>&copy Derechos reservados JORGE RESTREPO 2021</center> 
   <b>
   <b>
  </div>
  <center><p><a href="https://www.gobiernoenlinea.gov.co/" target="_blank"><img style="margin-left: 0px;" src="img\gob.col.png" alt="Gobierno en línea" width="57" height="50"></a> <a href="http://www.mineducacion.gov.co/" target="_blank"><img src="img\mineducacion.png" alt="Secretaría de Educación Colombia" width="224
                " height="50"></a><a href="http://www.icfes.gov.co" target="_blank"><img src="img/icfes.png" alt="ICFES" width="156" height="50" /></a> <a href="http://www.seduca.gov.co/" target="_blank"><img src="img\seduca.png" alt="Secretaria de Educación Antioquia" width="116" height="50"></a> <a href="http://www.envigado.gov.co/" target="_blank"><img src="img\envigado.png" alt="Alcaldía de Envigado" width="116" height="50"></a> <a href="http://www.envigado.edu.co/" target="_blank"><img src="img\sumamos.png" alt="Secretaría de Educación de Envigado" width="224" height="50"></a> </p></div><a href="https://www.mintic.gov.co/" target="_blank"><img style="margin-left: 0px;" src="img\mintic.png" alt="Mintic" width="224" height="50"></a>
              <p style="font-size:10px;">Institución Educativa Gualandayes |
               Dirección: Carrera 25A No.41bsur SUR 25 |  Teléfono: 3102506874 | Envigado -
               Antioquia - Colombia <br></center>

              </div>
              <p><center>&copy Derechos reservados 2021</center></p>
                <p><center> Jose Leal&reg - Jorge Restrepo&reg</center></p>
 
  
  <script src="../js/pass-show-hide.js"></script>
  <script src="../js/login.js"></script>

</body>
<div class="social">
                  <ul>
                    <li>
                      <a href="https://www.facebook.com/" target="_blank">
                        <img src="img\facebook.png" alt="facebook" class="img-responsive img32">
                      </a>
                    </li>
                    <li>
                      <a href="https://www.youtube.com/" target="_blank">
                        <img src="img\youtube.png" alt="YouTube" class="img-responsive img32">
                      </a>
                    </li>
                    <li>
                      <a href="https://www.instagram.com/" target="_blank">
                        <img src="img\instagram.png" alt="Instagram" class="img-responsive img32">
                      </a>
                    </li>
                    <li>
                      <a href="https://twitter.com/" target="_blank">
                        <img src="img\twitter.png" alt="Twitter" class="img-responsive img32">
                      </a>
                    </li>
                    <li>
                      <a href="https://www.linkedin.com/" target="_blank">
                        <img src="img\linked.png" alt="linkedin" class="img-responsive img32">
                      </a>
                    </li>
                    <li>
                      <a href="https://www.pinterest.com/" target="_blank">
                        <img src="img\pinterest.png" alt="pinterest" class="img-responsive img32">
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
     
</section>

</html>
