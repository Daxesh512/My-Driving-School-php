


<?php

   $host="localhost";
  $user="root";
  $pass="";
  $db="campus";
 
  $connection = mysqli_connect($host, $user, $pass, $db);
  if ($connection->connect_error) {
      die("ERROR: Connection failed: " . $connection->connect_error);
  }

?>