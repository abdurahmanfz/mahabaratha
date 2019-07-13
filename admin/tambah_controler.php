<?php 
  include '../config/connection.php';

  $nama = $_POST['nama'];
  $price = $_POST['price'];
  $qty = $_POST['qty'];
  $desc = $_POST['desc'];
  
  
  $x = '';
  $array_of_name = explode(' ', $nama);
  
  echo count($array_of_name);
  echo "<br>";

  if (count($array_of_name) == 1) {
    $x = $nama[0] . '' . $nama[2];
  } else {
    $x =  $array_of_name[0][0] . '' .  $array_of_name[1][0];
  }

  echo "<br>"; 
  $_id = 'A-' . strtoupper($x) . '-' . rand(10,999);
  echo $_id;
  echo "<br>"; 
  echo $price;
  echo "<br>"; 
  echo $qty;
  echo "<br>"; 
  echo $desc;
  echo "<br>";

  $query = "insert into masterstock values ('$_id', '$nama', '$desc', '$qty', '$price'); ";
  $request = mysqli_query($connection, $query);
  // $cek = mysqli_num_rows($request);

  // if($cek > 0) {
  echo "<script>alert('Tambah data berhasil !')</script>";
  header("location:/mahabaratha/admin/barang.php");
  // } else {
  //   echo "<script>alert('Tambah data gagal :(')</script>";
  //   header("location:/mahabaratha/admin/tambah_barang.php");
  // }
?>