<?php
  include '../config/connection.php';

  $id = $_GET["stock_id"];
  $query = "DELETE FROM masterstock WHERE masterstock.stock_id = '$id'";
  mysqli_query($connection, $query) or die ("Error ".mysqli_error($connection));
  
  echo "<script>alert('Tambah data berhasil !')</script>";
  header("location:/mahabaratha/admin/barang.php");