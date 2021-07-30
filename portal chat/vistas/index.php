<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: usuarios.php");
  }
?>

<?php include_once "header.php"; ?>
<style>


 
</style>
<section class= cuerpo>
<body>
  
<div class="body">
    <div class="panel">
           <h1 class="text-center">Escuela Rural Mixta Gualandayes</h1>
       
        <br>
        <hr>
        <p class="text-center"><strong>Integrantes GRUPO </strong><br><br>
        <br>
        </div>
</div>

  

  <div class="wrapper">
    <section class="form signup">
      <header><center>REGISTRO CHAT</center></header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>* Nombre</label>
            <input type="text" name="fname" placeholder="Nombres " required>
          </div>
          <div class="field input">
            <label>* Apellido</label>
            <input type="text" name="lname" placeholder="Apellidos " required>
          </div>
        </div>
        <div class="field input">
          <label>* Dirección de correo electrónico</label>
          <input type="text" name="email" placeholder="Introduce correo electrónico" required>
        </div>
        <div class="field input">
          <label>* Contraseña</label>
          <input type="password" name="password" placeholder="Introduzca nueva contraseña" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>*Foto</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Crear">
        </div>
      </form>
      <div class="link">Inscribiste!<br> <a href="login.php">Inicia sesión ahora</a></div>
    </section>
    
   
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
  <script src="../js/signup.js"></script>

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
