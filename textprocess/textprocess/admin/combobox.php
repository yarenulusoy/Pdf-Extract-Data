<?php   //combobox2 yi doldurmak için yazılan kodlar
include("sabit/connection.php");
if(!empty($_POST["kullanici_id"])){
    $sql = "select *from bilgiler  inner join projeler ON projeler.id=bilgiler.dokuman_id WHERE proje_id in(select max(proje_id) from bilgiler  inner join projeler ON projeler.id=bilgiler.dokuman_id where projeler.kullanici_id='" .$_POST["kullanici_id"]. "' group by tarih) and projeler.kullanici_id='" .$_POST["kullanici_id"]. "'";

    $query = $conn->query($sql); 
    $query->setFetchMode(PDO::FETCH_ASSOC);
    
    ?>
<option value disabled selected>Donem Seçiniz</option>
<?php
    
    while ($row = $query->fetch()) {
        ?>
<option value="<?php echo $row["tarih"];?>"><?php echo $row["tarih"];?></option>
<?php
    }

}

?>