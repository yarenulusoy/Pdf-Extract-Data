<?php  #kullanici girişi kontrol 
session_start();
if (isset($_SESSION["username"])) {
} else {
    header("location:../giris_kullanici.php");
}
