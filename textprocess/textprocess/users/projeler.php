<?php include("sol_cubuk.php");
$username = $_SESSION["username"];
$sql = "select * from users where kullaniciadi='$username'";
$query = $conn->query($sql); //Database bağlantı kodumuzda bağlantıyı sağlayan değişken adı
$query->setFetchMode(PDO::FETCH_ASSOC);
while ($row = $query->fetch()) {
    $user=$row['id'];
}

$sql2 = "select *from bilgiler  inner join projeler ON projeler.id=bilgiler.dokuman_id WHERE proje_id in(select max(proje_id) from bilgiler inner join projeler ON projeler.id=bilgiler.dokuman_id where  projeler.kullanici_id='" .$user. "'  group by tarih) and projeler.kullanici_id='".$user."'";
$query2 = $conn->query($sql2); //Database bağlantı kodumuzda bağlantıyı sağlayan değişken adı
$query2->setFetchMode(PDO::FETCH_ASSOC);
?>
<div class="admin-content">
    <form method="POST">
        <div class="container">
            
            <div class="form">
                <div class="form2">
                <div class="row">
                    <label>Dönem Adı:</label>
                    <select name="donem-list" id="donem-list" class="InputBox" onchange="dersGetir(this.value)">
                    <option value disabled selected>Dönem Seçiniz</option>
                    <?php
                while ($row2= $query2->fetch()) {
                    ?>
                        <option value="<?php echo $row2["tarih"];?>"><?php echo $row2["tarih"];?></option>
                        <?php  
                }
                ?>
                    </select>
                </div>
                <div class="row">
                    <label>Ders Adı:</label>
                    <select name="ders-list" id="ders-list" class="InputBox">
                        <option value="">Ders Seçiniz</option>
                    </select>
                </div>
            </div>
            </div>
            <input type="button" name="sorgu" id="sorgu" class="btn btn-primary" value="GETİR">

            <table id='empTable' class='display dataTable'>
                <thead>
                    <th>Id</th>
                    <th>Yazar Adı</th>
                    <th>Ders Adı</th>
                    <th>Proje Konusu</th>
                    <th>Anahtar kelimeler</th>
                    <th>Dönem</th>
                    <th></th>

                </thead>


            </table>
        </div>
    </form>
</div>

</div>
</body>

</html>
<script>
$(document).ready(function() {
    doldur();

    function doldur(kullanici = '', tarih = '', dersadi = '') {
        var dataTable = $('#empTable').DataTable({
            'processing': true,
            'serverSide': true,
            'serverMethod': 'post',
            'ajax': {
                'url': 'datatable.php',
                'data': function(data) {
                    data.kullanici = kullanici;
                    data.tarih = tarih;
                    data.dersadi = dersadi;
                    data.request = 1;

                }
            },
            'columns': [

                {
                    data: 'id'
                },
                {
                    data: 'yazar'
                },
                {
                    data: 'ders'
                },
                {
                    data: 'konu'
                },
                {
                    data: 'kelime'
                },
                {
                    data: 'donem'
                },
                {
                    data: 'button'
                },



            ],
            'columnDefs': [{
                'targets': [5], // column index (start from 0)
                'orderable': false, // set orderable false for selected columns
            }]
        });
    }

    $('#sorgu').click(function() {
        var kullanici = $('#kullanici-list').val();
        var tarih = $('#donem-list').val();
        var dersadi = $('#ders-list').val();
        if (kullanici != '' && tarih != '' && dersadi != '') {
            $('#empTable').DataTable().destroy();
            doldur(kullanici, tarih, dersadi);
        } else {
            alert('Select Both filter option');
            $('#empTable').DataTable().destroy();
            doldur();
        }
    });



});
</script>
<script type="text/javascript">
function dersGetir(deger) {
    $.ajax({
        type: "POST",
        url: "combobox.php",
        data: 'donem_id=' + deger,
        success: function(veri) {
            $("#ders-list").html(veri);
        }
    });
}
</script>

</html>
