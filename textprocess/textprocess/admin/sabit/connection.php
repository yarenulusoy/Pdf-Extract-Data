<?php 
try { 
    $conn= new PDO("mysql:host=localhost; dbname=projectdatabase;charset=utf8", "root",""); 
	$conn->setAttribute(PDO::ATTR_ERRMODE, 
				PDO::ERRMODE_EXCEPTION); 
} catch(PDOException $e) { 
    print $e->getMessage();
} 

@$conn_mysql = new mysqli('localhost', 'root', '', 'projectdatabase'); // Veritabanı bağlantımızı yapıyoruz.
    if(mysqli_connect_error()) //Eğer hata varsa yazdırıyoruz 
    {
        echo mysqli_connect_error();
        exit; //eğer bağlantıda hata varsa PHP çalışmasını sonlandırıyoruz.
    }
$conn_mysql->set_charset("utf8"); // Türkçe karakter sorunu olmaması için utf8'e çeviriyoruz.



