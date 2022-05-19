<?php include("sabit/sol_cubuk.php");?>
        <div class="admin-content">

            <div class="container">
                <div class="col-md-6">
                    <form action="" method="post">
                        <table class="tablekullanici">
                            <tr>
                                <td>Ad Soyad:</td>
                                <td><textarea name="ad" class="submit"></textarea></td>
                            </tr>
                            <tr>
                                <td>Kullanıcı Adı:</td>
                                <td><textarea name="kadi" class="submit"></textarea></td>
                            </tr>
                            <tr>
                                <td>Şifre:</td>
                                <td><textarea name="sifre" class="submit"></textarea></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="submit" name="add" class="btn btn-primary" value="Ekle"></td>
                            </tr>
                        </table>
                    </form>
                    <?php
                if (isset($_POST['add']) == 1) {
                    if ($_POST) { // Sayfada post olup olmadığını kontrol ediyoruz.
                        // Sayfa yenilendikten sonra post edilen değerleri değişkenlere atıyoruz
                        $ad = $_POST['ad'];
                        $kadi = $_POST['kadi'];
                        $sifre = $_POST['sifre'];

                        if ($ad<> "" && $kadi<> "" && $sifre<> "") {
                            // Veri alanlarının boş olmadığını kontrol ettiriyoruz.      
                                         
                            // Veri ekleme sorgumuzu yazıyoruz.
                            if ($conn_mysql->query("INSERT INTO users (kullaniciadi,sifre,adsoyad) VALUES ('$kadi','$sifre','$ad')")) {
                                echo "Veri Eklendi"; // Eğer veri eklendiyse eklendi yazmasını sağlıyoruz.
                            } else {
                                echo "Hata oluştu";
                            }
                        }
                        else{
                            echo "Tüm alanları doldurunuz.";
                        }
                    }
                }
                ?>
                </div>
            <div>
            

     
    </div>
    <script>
            //sayfayı yenilediğinde inputları boşaltıyor.
            if (window.history.replaceState) {
                window.history.replaceState(null, null, window.location.href);
            }
        </script>
</body>
</html>