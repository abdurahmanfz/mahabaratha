<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tambah Stok Master Barang</title>
  </head>
  <style>
    .warning-msg {
      display: none; 
      font-size: 11px; 
      font-weight: 500; 
      color: red; 
      font-style: italic;
      margin-bottom: 8px;
      text-align: right
    }
  </style>
  <body style="padding: 100px 45px; max-width: 780px; margin-left: auto; margin-right: auto">
    <?php
      include "../views/header.php";

      if (isset($_SESSION['status']) && $_SESSION['status'] == 'login') {      
    ?>

    <div>
      <p class="heading">Tambah Barang</p> <br>

      <form method="post" name="tambah" action="tambah_controler.php" onSubmit="return validasi()">
        <span id="nama_warning" class="warning-msg">Nama Barang tidak boleh kosong</span>
        <input class="f-input" name="nama" id="nama" placeholder="Nama Barang" autofocus>

        <span id="qty_warning" class="warning-msg">Jumlah Barang harus lebih dari 1</span>
        <input class="f-input" type="number" name="qty" id="qty" placeholder="Jumlah Barang">

        <span id="price_warning" class="warning-msg">Harga Barang tidak boleh kosong</span>
        <input class="f-input" name="price" id="price" placeholder="Harga Satuan">

        <span id="desc_warning" class="warning-msg">Deskripsi Barang tidak boleh kosong</span>
        <textarea id="desc" name="desc" cols="40" rows="5" class="f-input" style="height: 80px; padding: 16px" placeholder="Deskripsi Barang"></textarea>

        <input type="submit" value="Simpan" style="color: white" class="f-button">
      </form>
    </div>

    <script>
      function validasi() {
        var nama = document.getElementById("nama").value;
        var price = document.getElementById("price").value;	
        var qty = document.getElementById("qty").value;	
        var desc = document.getElementById("desc").value;	

        var nama_warning = document.getElementById("nama_warning");
        var price_warning = document.getElementById("price_warning");
        var qty_warning = document.getElementById("qty_warning");
        var desc_warning = document.getElementById("desc_warning");

        if (nama != '' && price != '' && qty != '' && desc != '') {
          return true
        } else {
          nama_warning.style.display = "block"
          price_warning.style.display = "block"
          qty_warning.style.display = "block"
          desc_warning.style.display = "block"
          return false
        }

      }
    </script>
  
    <?php   
      } else {
        echo "Kamu Belum Login";
        # code...
      }
      
    ?>
    
  </body>
</html>