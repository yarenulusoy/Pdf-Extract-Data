<?php include("session.php"); 
include("../connection.php")?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>

    </style>
</head>

<body>
    <?php 
   
   $username = $_SESSION["username"];
   $sql = "select * from users where kullaniciadi='$username'";
   $query = $conn->query($sql); //Database bağlantı kodumuzda bağlantıyı sağlayan değişken adı
   $query->setFetchMode(PDO::FETCH_ASSOC);
   while ($row = $query->fetch()) {
       $user=$row['adsoyad'];
   }
   
   ?>
    <div class="wrapper">
        <div class="section">
            <div class="top_navbar">
                <div class="hamburger">
                    <a href="#">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>
            </div>
            <div class="sidebar">
                <div class="profile">
                    <img src="user.png"
                        alt="profile_picture">
                    </br> </br>
                    <h3><?php echo $user ?></h3>
                    </br>
                </div>
                <ul>
                    <li>
                        <a href="kullanici.php">
                            <span class="icon"><i class="fa fa-download"></i></span>
                            <span class="item">PROJE YÜKLE</span>
                        </a>
                    </li>
                    <li>
                        <a href="projeler.php">
                            <span class="icon"><i class="fa fa-list"></i></span>
                            <span class="item">YÜKLEDİĞİNİZ PROJELER</span>
                        </a>
                    </li>
                    <li>
                        <a href="cikis.php">
                            <span class="icon"><i class="fa fa-sign-out"></i></span>
                            <span class="item">ÇIKIŞ</span>
                        </a>
                    </li>



                </ul>
            </div>