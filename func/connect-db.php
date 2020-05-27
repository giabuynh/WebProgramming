<?php
  $severname = "localhost:8111";
  $username = "root";
  $password = "";
  $dbname = "JIMMYCHOO";
  $conn = new mysqli($severname, $username, $password, $dbname) or die("Connect fail: ". $conn->connect_error);
  return $conn;
 ?>
