<?php 
if ($_GET) 
{
include("sabit/connection.php"); // veritabanı bağlantımızı sayfamıza ekliyoruz.
// id'si seçilen veriyi silme sorgumuzu yazıyoruz.
if ($conn_mysql->query("DELETE FROM users WHERE id =".(int)$_GET['id'])) 
{
    header("location:kullanicilar.php"); // Eğer sorgu çalışırsa ekle.php sayfasına gönderiyoruz.
}
}
?>