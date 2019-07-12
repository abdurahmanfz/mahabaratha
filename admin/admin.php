<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Admin</title>
  </head>
  <body style="padding: 100px 45px;">
    <?php
      include "../views/header.php";
      // session_start();/
      ?>
      Ini halaman Setelah Login !
    <?php
      echo "<br>";
      echo $_SESSION['username'];
      echo "<br>";
      echo $_SESSION['role'];
      echo "<br>";
      echo $_SESSION['name'];
      echo "<br>";
      echo $_SESSION['status'];
    ?>
    
  </body>
</html>