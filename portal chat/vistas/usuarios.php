<?php 
  session_start();
  include_once "../modelo/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
?>
<?php include_once "header.php"; ?>
<link rel="stylesheet" href="../css/template.css">
<link rel="stylesheet" href="../css/modal.css">
<section class= cuerpo>
<body>
  <div class="wrapper">
    <section class="users">
      <header>
        <div class="content">
          <?php 
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
          <img src="../modelo/images/<?php echo $row['img']; ?>" alt="">
          <div class="details">
            <span><?php echo $row['fname']. " " . $row['lname'] ?></span>
            <p><?php echo $row['status']; ?></p>
          </div>
        </div>
        <a href="../modelo/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout">Cerrar sesión</a>
      </header>
      <div class="search">
        <span class="text">Personas Conectadas </span>
        <input type="text" placeholder="Busca usuario...">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">buscar</button>
      </div>
      <div class="users-list">
  
      </div>
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

  <script src="../js/usuarios.js"></script>

</body>
</section>
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
     
</html>
