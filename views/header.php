<style>
  @import url("../assets/style.css");
  @import url('https://fonts.googleapis.com/css?family=Montserrat&display=swap');
</style>

<?php
  session_start();

  if (isset($_SESSION['status']) && $_SESSION['status'] == 'login') {
?>
  <div class="header">
    <table width="100%">
      <tr>
        <td>
          <p style="font-weight: 600; color: white; margin: 10px 0;">Mahabaratha</p>
        </td>
        <td style="text-align: right;">
          <a class="text-btn" href="../logout.php">Logout</a>
        </td>
      </tr>
    </table>
  </div>

<?php
  } else {
?>
  <div class="header">
    <p style="font-weight: 600; color: white; margin: 10px 0;">
      Kamu Belum Login

      <a href="/mahabaratha/index.php">Login Disini..</a>
    </p>
    <!-- <a href="../logout.php">Logout</a> -->
  </div>
<?php
  }
?>