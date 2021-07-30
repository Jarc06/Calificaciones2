<?php
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $dbname = "chatapp";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Error de conexión. Base de datos no existe".mysqli_connect_error();
  }
?>
