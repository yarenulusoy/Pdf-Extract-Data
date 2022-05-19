<?php
include("sabit/connection.php");
if(!empty($_POST["donem_id"])){
    $sql2 = "select *from bilgiler inner join projeler ON projeler.id=bilgiler.dokuman_id WHERE proje_id in(select max(proje_id) from bilgiler inner join projeler ON projeler.id=bilgiler.dokuman_id where projeler.kullanici_id='" .$_POST["donem_id"]. "' group by dersadi) and projeler.kullanici_id='" .$_POST["donem_id"]. "'";
    $query2 = $conn->query($sql2); 
$query2->setFetchMode(PDO::FETCH_ASSOC);

?>
<option value disabled selected>Ders Seçiniz</option>
<?php

while ($row2 = $query2->fetch()) {
    ?>
     <option value="<?php echo $row2["dersadi"];?>"><?php echo $row2["dersadi"];?></option>
     <?php
}
}
?>