<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Admin</title>
  </head>
  <body style="padding: 100px 45px;">
    <?php
      include "../views/header.php";

      if (isset($_SESSION['status']) && $_SESSION['status'] == 'login') {
    ?>

    <div>
      <p>Selamat datang <?php echo $_SESSION['name'];?> </p>

      <table width="100%">
        <tr>
          <td>
            <a href="barang.php" style="text-decoration: none; color: black;">
              <div class="main-menu">
                <p class="heading">
                  Lihat Data Barang
                </p>  
              </div>
            </a>
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