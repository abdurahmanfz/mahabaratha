<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Stok Master Barang</title>
  </head>
  <style>
    .aksi {
      text-align: center; background: #FF8B39; color: white; font-weight: 600;
    }
  </style>
  <body style="padding: 100px 45px;">
    <?php
      include "../views/header.php";

      if (isset($_SESSION['status']) && $_SESSION['status'] == 'login') {      
    ?>

    <div>
      <p>Lihat Data Master Barang</p>

      <a style="text-align: right" href="tambah_barang.php">
        <input type="submit" value="Tambah Barang" class="f-button">
      </a>

      <table width="100%" border="1" class="ftable">
        <tr class="ftr">
          <th class="fth" style="width: 10%">Id</th>
          <th class="fth">Nama Barang</th>
          <th class="fth">Stok</th>
          <th class="fth">Harga Satuan</th>
          <th class="fth">Deskripsi</th>
          <th class="fth" colspan="2">Aksi</th>
        </tr>
        <?php
          $query = mysqli_query($connection, 'select * from masterstock');
          while($data = mysqli_fetch_array($query)){
        ?>
          <tr class="ftr">
            <td class="ftd"><?php echo $data['stock_id']?></td>
            <td class="ftd"><?php echo $data['name']?></td>
            <td class="ftd" style="text-align: center;"><?php echo $data['qty']?></td>
            <td class="ftd" style="text-align: center;"><?php echo $data['price']?></td>
            <td class="ftd"><?php echo $data['description']?></td>
            <td class="ftd aksi">
              <a class="text-btn" href="edit_barang.php?stock_id=<?php echo $data['stock_id'];?>">
                Edit
              </a>
            </td>
            <td class="ftd aksi">
              <a class="text-btn" href="delete_barang.php?stock_id=<?php echo $data['stock_id'];?>">
                Hapus
              </a>
            </td>
          </tr>
        <?php
          };
        ?>
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