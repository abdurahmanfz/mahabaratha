<?php 
  include "config/connection.php";
?>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
  </head>
  <style>
    @import url("assets/style.css");
    @import url('https://fonts.googleapis.com/css?family=Montserrat&display=swap');
  </style>
  <body>
    <div class="layout">
      <div class="container">
        <div class="login-card" style="padding-top: 25vh">
          <h3 style="font-weight: 600; margin: 0;"> Login </h3>
        </div>
        <form method="post" name="login" action="login.php" onSubmit="return validasi()">
          <div class="login-card">
            <table border="0" style="width: 100%">
              <tr class="f-tr">
              <td class="f-td">
                <p id="warning" style="
                  font-size: 11px; font-weight: 500; color: red; font-style: italic; display: none; text-align: center
                ">username / password tidak boleh kosong</p>
                <input class="f-input" name="username" id="username" type="text" placeholder="Username">
              </td>
              </tr>

              <tr class="f-tr">
              <td class="f-td">
                <input class="f-input" name="password" id="password" type="password" placeholder="Password">
              </td>
              </tr>

              <tr class="f-tr">
              <td class="f-td">
                <input type="submit" value="Kirim" class="f-button">
              </td>
              </tr>
            </table>
          </div>
        </form>
      </div>
    </div>
  </body>

  <script type="text/javascript">
    function validasi() {
      var username = document.getElementById("username").value;
      var password = document.getElementById("password").value;		
      if (username != "" && password!= "") {
        return true;
      }else{
        var warning = document.getElementById("warning");
        warning.style.display = "block";
        // alert('Username dan Password harus di isi !');
        return false;
      }
    }
  
  </script>
</html>