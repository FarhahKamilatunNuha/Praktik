<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Penjualan</title>
  <style type="text/css">
  #header{
    background: black;
    padding: 2px;
  }
  #header ul > li{
    display: inline;
    list-style-type: none;
    padding-right: 10px;
  }
  #header li a{
    color: white;
    text-decoration: none;
    padding: 5px;
  }
  #header li > a:hover{
    background: white;
    color: black;
  }
  #content{
    background: black;
    min-height: 450px;
    padding: 150px;
  }
  #footer{
    background: black;
    padding: 5px;
    color: white;
    text-align: center;
  }
  </style>
</head>
<body>
  <div id="header">
    <ul>
      <li style="color: white;font-size: 25px;font-weight: bold">Elektronik &raquo;</li>
      <li><a href="src/admin/login.php">Admin</a></li>
      <li><a href="src/user/login.php">User</a></li>
    </ul>
  
  <div id="content">
<center><img src="penjualan.png" height="300px" width="300px;"><center>

  </div>
    <?php //include "config.php"; // Load file config.php ?>
  </div>
  
 
</body>
</html>