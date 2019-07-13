<?php 
  include '../config/connection.php';

  $nama = $_POST['nama'];
  $price = $_POST['price'];
  $qty = $_POST['qty'];
  $desc = $_POST['desc'];
  
  // auto generate _id
  $x = '';
  $array_of_name = explode(' ', $nama);
  if (count($array_of_name) == 1) {
    $x = $nama[0] . '' . $nama[2];
  } else {
    $x =  $array_of_name[0][0] . '' .  $array_of_name[1][0];
  }

  $query = "insert into masterstock values ('$_id', '$nama', '$desc', '$qty', '$price'); ";
  $request = mysqli_query($connection, $query);
  
  echo "<script>alert('Tambah data berhasil !')</script>";
  header("location:/mahabaratha/admin/barang.php");
?>