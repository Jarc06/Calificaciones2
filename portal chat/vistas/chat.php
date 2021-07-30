<?php 
  session_start();
  include_once "../modelo/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
?>
<?php include_once "header.php"; ?>

</html>
<section class= cuerpo>
<body>
  <div class="wrapper">
    <section class="chat-area">
      <header>
        <?php 
          $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
          $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");
          if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
          }else{
            header("location: usuarios.php");
          }
        ?>
        <a href="usuarios.php" class="back-icon"> <svg xmlns="" width="30" height="30" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
    </svg></a>
        <img src="../modelo/images/<?php echo $row['img']; ?>" alt="">
        <div class="details">
          <span><?php echo $row['fname']. " " . $row['lname'] ?></span>
          <p><?php echo $row['status']; ?></p>
        </div>
      </header>
      <div class="chat-box">

      </div>
      <form action="#" class="typing-area">
        <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
        <input type="text" name="message" class="input-field" placeholder="Nuevo Mensaje." autocomplete="off">
      <button class="btn btn-outline-success" type="submit">Enviar</button>
      </form>
    </section>
  </div>
  

  <script src="../js/chat.js"></script>

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
