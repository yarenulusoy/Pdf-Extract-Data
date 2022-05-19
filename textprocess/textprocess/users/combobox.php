<?php   //combobox2 yi doldurmak için yazılan kodlar
include("../connection.php");
include("session.php");
$username = $_SESSION["username"];
$sql1 = "select * from users where kullaniciadi='$username'";
$query1 = $conn->query($sql1); //Database bağlantı kodumuzda bağlantıyı sağlayan değişken adı
$query1->setFetchMode(PDO::FETCH_ASSOC);
while ($row1 = $query1->fetch()) {
    $user=$row1['id'];
}

if(!empty($_POST["donem_id"])){
    $sql = "select *from bilgiler inner join projeler ON projeler.id=bilgiler.dokuman_id WHERE proje_id in(select max(proje_id) from bilgiler inner join projeler ON projeler.id=bilgiler.dokuman_id where  projeler.kullanici_id='" .$user. "' group by dersadi) and projeler.kullanici_id='" .$user. "'";

    $query = $conn->query($sql); 
    $query->setFetchMode(PDO::FETCH_ASSOC);
    
    ?>
<option value disabled selected>Ders Seçiniz</option>
<?php
    
    while ($row = $query->fetch()) {
        ?>
<option value="<?php echo $row["dersadi"];?>"><?php echo $row["dersadi"];?></option>
<?php
    }

}

?>