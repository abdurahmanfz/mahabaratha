<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Edit Stok Master Barang</title>
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

    <?php
      $stock_id = $_GET['stock_id'];

      if(isset($_POST["update"]) ){
    
        $name = $_POST["nama"];
        $qty = $_POST["qty"];
        $price = $_POST["price"];
        $desc = $_POST["desc"];
        // $id = $_POST["stock_id"];
        //Query insert data

        // echo $name . "<br>"; 
        // echo $qty . "<br>"; 
        // echo $price . "<br>"; 
        // echo $desc . "<br>"; 
        // echo $id . "<br>"; 

        $query = "
          UPDATE masterstock
            SET
            name='$name',
            description='$desc',
            qty='$qty',
            price='$price'
            where masterstock.stock_id='$stock_id';
          ";
        mysqli_query($connection, $query) or die(mysqli_error($connection));
        header("location:barang.php");

      } else {
        $query = mysqli_query($connection, "select * from masterstock where stock_id='$stock_id';");
  
        while($data = mysqli_fetch_array($query)){
          $name = $data['name'];
          $qty = $data['qty'];
          $price = $data['price'];
          $desc = $data['description'];
        }
      }
    ?>

    <div>
      <p class="heading"><span style="font-weight: 400;">Edit Barang</span> <?php echo $name;?></p> <br>

      <form method="post" action="" onSubmit="return validasi()">
        <input class="f-input" name="stock_id" id="stock_id" value="<?php echo $stock_id;?>" disabled>

        <span id="nama_warning" class="warning-msg">Nama Barang tidak boleh kosong</span>
        <input class="f-input" name="nama" id="nama" value="<?php echo $name;?>" placeholder="Nama Barang" autofocus>

        <span id="qty_warning" class="warning-msg">Jumlah Barang harus lebih dari 1</span>
        <input class="f-input" type="number" name="qty" id="qty" value="<?php echo $qty;?>" placeholder="Jumlah Barang">

        <span id="price_warning" class="warning-msg">Harga Barang tidak boleh kosong</span>
        <input class="f-input" name="price" id="price" value="<?php echo $price;?>" placeholder="Harga Satuan">

        <span id="desc_warning" class="warning-msg">Deskripsi Barang tidak boleh kosong</span>
        <textarea id="desc" name="desc" cols="40" rows="5" class="f-input" style="height: 80px; padding: 16px" value="<?php echo $desc;?>" placeholder="<?php echo $desc;?>"></textarea>

        <input type="submit" value="Simpan" name="update" style="color: white" class="f-button">
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