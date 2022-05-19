<?php include("sabit/sol_cubuk.php");
$sql="select *from users";
$query = $conn->query($sql); //Database bağlantı kodumuzda bağlantıyı sağlayan değişken adı
$query->setFetchMode(PDO::FETCH_ASSOC);
?>
<div class="admin-content">
    <form method="POST">
        <div class="container">
            
            <div class="form">
                <div class="row">
                    <label>Kullanıcı Adı:</label>
                    <select name="kullanici-list" id="kullanici-list" class="InputBox"
                        onchange="donemGetir(this.value)">
                        <option value disabled selected>Kullanıcı Seçiniz</option>
                        <?php
                while ($row= $query->fetch()) {
                    ?>
                        <option value="<?php echo $row["id"];?>"><?php echo $row["adsoyad"];?></option>
                        <?php  
                }
                ?>
                    </select>
                </div>
                <div class="row">
                    <label>Dönem Adı:</label>
                    <select name="donem-list" id="donem-list" class="InputBox">
                        <option value="">Dönem Seçiniz</option>
                    </select>
                </div>
                <div class="row">
                    <label>Ders Adı:</label>
                    <select name="ders-list" id="ders-list" class="InputBox">
                        <option value="">Ders Seçiniz</option>
                    </select>
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
function donemGetir(deger) {
    $.ajax({
        type: "POST",
        url: "combobox.php",
        data: 'kullanici_id=' + deger,
        success: function(veri) {
            $("#donem-list").html(veri);
            dersAdGetir(deger);
        }
    });
}

function dersAdGetir(deger) {
    $.ajax({
        type: "POST",
        url: "combobox2.php",
        data: 'donem_id=' + deger,
        success: function(veri) {
            $("#ders-list").html(veri);
        }
    });
}
</script>