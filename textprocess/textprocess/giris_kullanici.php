<?php #giris yap
     session_start();  
     $host = "localhost";  
     $username = "root";  
     $password = "";  
     $database = "projectdatabase";  
     $message = "";  
     try  
     {  
          $connect = new PDO("mysql:host=$host; dbname=$database", $username, $password);  
          $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
          if(isset($_POST["login"]))  
          {  
               if(empty($_POST["username"]) || empty($_POST["password"]))  
               {  
                    $message = '<label>Tüm alanları doldurunuz.</label>';  
               }  
               else  
               {  
                    $query = "SELECT * FROM users WHERE kullaniciadi = :username AND sifre= :password";  
                    $statement = $connect->prepare($query);  
                    $statement->execute(  
                         array(  
                              'username'     =>     $_POST["username"],  
                              'password'     =>     $_POST["password"]  
                         )  
                    );  
                    $count = $statement->rowCount();  
                    if($count > 0)  
                    {  
                         $_SESSION["username"] = $_POST["username"];  
                         header("location:users/kullanici.php");  

                    }  
                    else  
                    {  
                         $message = '<label>Yanlış bilgi girdiniz.</label>';  
                    }  
               }  
          }  
     }  
     catch(PDOException $error)  
     {  
          $message = $error->getMessage();  
     }  
 ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="utf-8">
    <title>Giriş Yap</title>
</head>

<body>
    <div class="wrapper bg-white ">
        <div class="h2 text-center">KULLANICI GİRİŞ SAYFASI</div>
        <div class="h4 text-muted text-center pt-2">Devam etmek için giriş yapınız.</div>
        
        <form class="pt-3" method="POST" autocomplete="off">

            <div class="form-group py-2">
                <div class="input-field"> <span class="fa fa-user p-2"></span> <input autocomplete="off" type="text"
                        id="username" name="username" placeholder="Kullanıcı Adı Yazınız" required="true"> </div>
            </div>
            <div class="form-group py-1 pb-2">
                <div class="input-field"> <span class="fa fa-lock p-2"></span> <input autocomplete="off" type="password"
                        id="password" name="password" placeholder="Şifrenizi Yazınız" required="true"> <button
                        class="btn bg-white text-muted"> </button> </div>
            </div>
            <div class="d-flex align-items-start">
            </div>
            <button class="btn btn-block text-center my-3"name="login" type="submit" >GİRİŞ YAP</button>  
        </form>
    </div>
</body>

</html>