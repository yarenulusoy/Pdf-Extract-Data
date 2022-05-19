<?php include("sabit/sol_cubuk.php");?>
        <div class="admin-content">

            <?php
            $query = $conn_mysql->query("SELECT * FROM users WHERE id =" . (int)$_GET['id']);
            //id değeri ile düzenlenecek verileri veritabanından alacak sorgu
            $result = $query->fetch_assoc(); //sorgu çalıştırılıp veriler alınıyor
            ?>

            <div class="container">
                <div class="col-md-6">
                    <form action="" method="post">
                        <table class="tablekullanici">
                            <tr>
                                <td>Ad Soyad</td>
                                <td><textarea name="ad" class="form-control"><?php echo $result['adsoyad']; ?></textarea></td>
                            </tr>
                            <tr>
                                <td>Kullanıcı Adı</td>
                                <td><textarea name="kadi" class="form-control"><?php echo $result['kullaniciadi']; ?></textarea></td>
                            </tr>
                            <tr>
                                <td>Şifre</td>
                                <td><textarea name="sifre" class="form-control"><?php echo $result['sifre']; ?></textarea></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="submit" class="btn btn-primary" value="Kaydet"></td>
                            </tr>
                        </table>
                    </form>
                </div>
                <div>
                    <?php

                    if ($_POST) { // Post olup olmadığını kontrol ediyoruz.                
                        $ad = $_POST['ad'];
                        $kadi = $_POST['kadi'];
                        $sifre = $_POST['sifre'];
                        if ($ad <> "") { // Veri alanlarının boş olmadığını kontrol ettiriyoruz.                       
                            // Veri güncelleme sorgumuzu yazıyoruz.
                            if ($conn_mysql->query("UPDATE users SET adsoyad = '$ad',kullaniciadi='$kadi',sifre='$sifre'  WHERE id =" . $_GET['id'])) {
                                header("location:kullanicilar.php");
                                // Eğer güncelleme sorgusu çalıştıysa categories.php sayfasına yönlendiriyoruz.
                            } else {
                                echo "Hata oluştu"; // id bulunamadıysa veya sorguda hata varsa hata yazdırıyoruz.
                            }
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <script>
        //sayfayı yenilediğinde inputları boşaltıyor.
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</body>
</html>