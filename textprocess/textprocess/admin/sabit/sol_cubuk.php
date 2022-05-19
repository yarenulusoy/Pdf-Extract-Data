<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="Content-Language" content="TR" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <link href='//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="sabit/style.css">
  <?php include("sabit/connection.php") ?>
  <title>Yönetim Paneli</title>

    <style>

    </style>
</head>
<body>
   
    <div class="wrapper">
       <div class="section">
    <div class="top_navbar">
      <div class="hamburger">
        <a href="#">
          <i class="fas fa-bars"></i>
        </a>
      </div>
    </div>
    <div class="sidebar">
            <div class="profile">
                <img src="sabit/admin.png" alt="profile_picture">
                </br> </br>
                <h3>Yönetici</h3>
                </br> 
            </div>
            <ul>
                <li>
                    <a href="kullanicilar.php">
                        <span class="icon"><i class="fa fa-users"></i></span>
                        <span class="item">KULLANICILAR</span>
                    </a>
                </li>
                <li>
                    <a href="kullanici_ekle.php">
                        <span class="icon"><i class="fa fa-user"></i></span>
                        <span class="item">KULLANICI EKLE</span>
                    </a>
                </li>
                <li>
                    <a href="projeler.php">
                        <span class="icon"><i class="fa fa-users"></i></span>
                        <span class="item">TÜM PROJELER</span>
                    </a>
                </li>
                <li>
                    <a href="sabit/cikis.php">
                        <span class="icon"><i class="fa fa-sign-out"></i></span>
                        <span class="item">ÇIKIŞ</span>
                    </a>
                </li>
             
          
          
            </ul>
    </div>