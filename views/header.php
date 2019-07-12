<style>
  @import url("../assets/style.css");
  @import url('https://fonts.googleapis.com/css?family=Montserrat&display=swap');
</style>

<?php
  session_start();

  if ($_SESSION['status'] != 'login') {
?>
  <div class="header">
    <p style="font-weight: 600; color: white; margin: 10px 0;">
      Kamu Belum Login

      <a href="/mahabaratha/index.php">Login Disini..</a>
    </p>
    <!-- <a href="../logout.php">Logout</a> -->
  </div>
<?php
  } else {
    echo "Hore";

?>

  <div class="header">
    <p style="font-weight: 600; color: white; margin: 10px 0;">Mahabaratha</p>
    <a href="../logout.php">Logout</a>
  </div>

<?php
  }
?>