<?php 
  include 'config/connection.php';
  
  $username = $_POST['username'];
  $password = md5($_POST['password']);
  
  $login = mysqli_query($connection, "select * from user where username='$username' and password='$password'");
  $cek = mysqli_num_rows($login);
  
  if($cek > 0) {
    session_start();
    while($data = mysqli_fetch_array($login)){
      $_SESSION['username'] = $username;
      $_SESSION['role'] = $data['role'];
      $_SESSION['name'] = $data['display_name'];
      $_SESSION['status'] = "login";
    }
    header("location:admin/index.php");
  } else {
    echo "<script>alert('Username atau Password salah')</script>";
    header("location:index.php");
  }
?>