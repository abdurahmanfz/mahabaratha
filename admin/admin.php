<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Admin</title>
  </head>
  <body style="padding: 100px 45px;">
    <?php
      include "../views/header.php";

      if (isset($_SESSION['status']) && $_SESSION['status'] == 'login') {
        # code...
        // echo "<br>";
        // echo $_SESSION['username'];
        // echo "<br>";
        // echo $_SESSION['role'];
        // echo "<br>";
        // echo $_SESSION['name'];
        // echo "<br>";
        // echo $_SESSION['status'];
    ?>

    <div>
      <p>Selamat datang <?php echo $_SESSION['name'];?> </p>

      <table width="100%">
        <tr>
          <td>
            <div class="main-menu">
              <p class="heading">
                Lihat Data Barang
              </p>  
            </div>
          </td>
          <td>
            <div class="main-menu">
              <p class="heading">
                Lihat Data Pembeli
              </p>  
            </div>
          </td>
        </tr>
      </table>
    </div>
  
    <?php   
      } else {
        echo "Kamu Belum Login";
        # code...
      }
      
    ?>
    
  </body>
</html>