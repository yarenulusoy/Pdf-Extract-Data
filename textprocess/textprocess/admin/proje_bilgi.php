<?php include("sabit/sol_cubuk.php") ?>
<?php
$query = $conn_mysql->query("SELECT * FROM projeler WHERE id =" . (int)$_GET['id']);
//id değeri ile düzenlenecek verileri veritabanından alacak sorgu
$result = $query->fetch_assoc(); //sorgu çalıştırılıp veriler alınıyor
$query2 = $conn_mysql->query("SELECT * FROM bilgiler WHERE dokuman_id =" . (int)$_GET['id']);
$result2 = $query2->fetch_assoc(); 
 
?>
 <style type="text/css">
            #myiframe {
                width: 100%;
                height: 1000px;
            }
        </style>
<div class="container">
        <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#menu1">PROJE</a></li>
                <li><a data-toggle="tab" href="#menu2">PROJE BİLGİLERİ</a></li>
        </ul>
        <div class="tab-content">
        <div id="menu1" class="tab-pane fade in active">
            
        <h1 class="article"> <div id="scroller"><iframe name="myiframe" id="myiframe" src="../<?php echo ($result['dokuman']); ?>"></iframe>
        </div></h1> <br><br>
        </div>
        <div id="menu2" class="tab-pane fade">
        <div id="yazarbilgileri" class="yazarbilgileri">
        <label for="title">Yazar Adı Soyad:</label><br>
        <p><?php echo $result2['adsoyad'] ?></p>
        <label for="title">Öğrenci Numarası:</label><br>
        <p><?php echo $result2['ogrencino'] ?></p>
        <label for="title">Öğretim Türü:</label><br>
        <p><?php echo $result2['ogretimturu']  ?></p>
        <label for="title">Ders Adı:</label><br>
        <p><?php echo $result2['dersadi'] ?></p>
        <label for="title">Proje Özeti:</label><br>
        <p><?php echo $result2['ozet'] ?></p>
        <label for="title">Teslim Edildiği dönem:</label><br>
        <p><?php echo $result2['tarih'] ?></p>
        <label for="title">Proje Başlığı:</label><br>
        <p><?php echo $result2['baslik'] ?></p>
        <label for="title">Anahtar Kelimeler:</label><br>
        <p><?php echo $result2['kelimeler'] ?></p>
        <label for="title">Danışman Bilgileri:</label><br>
        <p><?php echo $result2['danisman'] ?></p>
        <label for="title">Juri Bilgileri:</label><br>
        <p><?php echo $result2['juri'] ?></p>


        </div>
        </div>
        
        </div>


</div>
