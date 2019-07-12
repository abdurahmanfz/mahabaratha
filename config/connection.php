<?php
  $host = "localhost";
  $username = "root";
  $password = "";
  $dbname = "mahabaratha";

  $connection = mysqli_connect($host, $username, $password, $dbname);

  if (!$connection){
    die("Unfortunately something happened :( ".mysqli_connect_error());
  }
?>