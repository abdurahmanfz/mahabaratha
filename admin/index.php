<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Halaman Admin</title>
</head>
<body>
  Ini halaman Setelah Login !
  <?php
    echo "<br>";
    echo $_SESSION['username'];
    echo "<br>";
    echo $_SESSION['role'];
    echo "<br>";
    echo $_SESSION['name'];
  ?>
</body>
</html>