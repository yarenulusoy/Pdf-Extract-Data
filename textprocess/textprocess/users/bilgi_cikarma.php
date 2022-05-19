<?php
include("session.php");
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projectdatabase";
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



    $target_dir="../uploads/";
    $filename=$_FILES["fileupload"]["name"];

    $tmpname=$_FILES["fileupload"]["tmp_name"];
    $filetype=$_FILES["fileupload"]["type"];
    $errors=[];
    $fileextensions=["pdf"];
    $arr=explode(".",$filename);
    $ext=strtolower(end($arr));
    $uploadpath=$target_dir.basename($filename);
    if(! in_array($ext,$fileextensions))    
    {
        $errors[]="Invalid filename";
    }
    if(empty($errors))
    {
        if(move_uploaded_file($tmpname,$uploadpath))
        {
            echo "file uploaded successfully";
        }
        else
        {
            echo "not successfull";
        }
    }
    else
    {
        foreach($errors as $value)
        {
            echo "$value";
        }
    }
    try {
       
        $username = $_SESSION["username"];
        $sql2 = "select * from users where kullaniciadi='$username'";
        $query2 = $conn->query($sql2); //Database bağlantı kodumuzda bağlantıyı sağlayan değişken adı
        $query2->setFetchMode(PDO::FETCH_ASSOC);
        while ($row1 = $query2->fetch()) {
            $user=$row1['id'];
        }
       
        $sql = "INSERT INTO projeler (dokuman,kullanici_id)
        VALUES ('uploads/$filename',$user)";
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "New record created successfully";
      } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
      }
      
      
      include '../pdfparser/alt_autoload.php-dist';
      $parser = new \Smalot\PdfParser\Parser(); 
       
      // Source PDF file to extract text 
      $file = '../uploads/'.$filename; 
       
      // Parse pdf file using Parser library 
      $pdf = $parser->parseFile($file); 
       
      // Extract text from PDF 
      $text = $pdf->getText();
      $details  = $pdf->getDetails();
      $pdfText=nl2br($text);

      

//ad soyad
$kackisi=substr_count($pdfText,'Adı Soyadı:');
if($kackisi==1):
    $ogr_adi_pos=strpos($pdfText, 'Adı Soyadı:');
    $ogr_adi_pos2= strpos($pdfText,'İmza:');
    $ogr_ad= substr($pdfText, $ogr_adi_pos+strlen('Adı Soyadı:'),$ogr_adi_pos2-$ogr_adi_pos-strlen('Adı Soyadı:'));
    $ogr_adi= str_replace("<br />", " ",$ogr_ad);

    $ogr_no_pos=strpos($pdfText, 'Öğrenci No:');
    $ogr_no_pos2= strpos($pdfText,'Adı Soyadı:');
    $ogrno= substr($pdfText, $ogr_no_pos+strlen('Öğrenci No:'),$ogr_no_pos2-$ogr_no_pos-strlen('Öğrenci No:'));
    $ogr_no= str_replace("<br />", " ",$ogrno);
    $ogretimturu= substr($ogr_no, 5,3);
    if($ogretimturu=='202'):
        $ogretimturu='2.Öğretim';
    elseif($ogretimturu=='201'):
        $ogretimturu='1.Öğretim';
    endif;

    $ogradson=$ogr_adi;
    $ogrnoson=$ogr_no;

elseif($kackisi==2):
    $ogr_adi_pos=strpos($pdfText, 'Adı Soyadı:');
    $ogr_adi_pos2= strpos($pdfText,'İmza:');
    $ogr_ad= substr($pdfText, $ogr_adi_pos+strlen('Adı Soyadı:'),$ogr_adi_pos2-$ogr_adi_pos-strlen('Adı Soyadı:'));
    $ogr_adi= str_replace("<br />", " ",$ogr_ad);

    $ogr_no_pos=strpos($pdfText, 'Öğrenci No:');
    $ogr_no_pos2= strpos($pdfText,'Adı Soyadı:');
    $ogrno= substr($pdfText, $ogr_no_pos+strlen('Öğrenci No:'),$ogr_no_pos2-$ogr_no_pos-strlen('Öğrenci No:'));
    $ogr_no= str_replace("<br />", " ",$ogrno);


    $ogr_adi_pos_2=strrpos($pdfText, 'Adı Soyadı:');
    $ogr_adi_pos2_2= strrpos($pdfText,'İmza:');
    $ogr_ad_2= substr($pdfText, $ogr_adi_pos_2+strlen('Adı Soyadı:'),$ogr_adi_pos2_2-$ogr_adi_pos_2-strlen('Adı Soyadı:'));
    $ogr_adi_2= str_replace("<br />", " ",$ogr_ad_2);

    $ogr_no_pos_2=strrpos($pdfText, 'Öğrenci No:');
    $ogr_no_pos2_2= strrpos($pdfText,'Adı Soyadı:');
    $ogrno_2= substr($pdfText, $ogr_no_pos_2+strlen('Öğrenci No:'),$ogr_no_pos2_2-$ogr_no_pos_2-strlen('Öğrenci No:'));
    $ogr_no_2= str_replace("<br />", " ",$ogrno_2);

    $ogretimturu= substr($ogr_no, 5,3);
    if($ogretimturu=='202'):
        $ogretimturu='2.Öğretim';
    elseif($ogretimturu=='201'):
        $ogretimturu='1.Öğretim';
    endif;


    $ogradson=$ogr_adi.','.$ogr_adi_2;
    $ogrnoson=$ogr_no.','.$ogr_no_2;
  

elseif($kackisi==3):
    $ogr_adi_pos=strpos($pdfText, 'Adı Soyadı:');
    $ogr_adi_pos2= strpos($pdfText,'İmza:');
    $ogr_ad= substr($pdfText, $ogr_adi_pos+strlen('Adı Soyadı:'),$ogr_adi_pos2-$ogr_adi_pos-strlen('Adı Soyadı:'));
    $ogr_adi= str_replace("<br />", " ",$ogr_ad);

    $ogr_no_pos=strpos($pdfText, 'Öğrenci No:');
    $ogr_no_pos2= strpos($pdfText,'Adı Soyadı:');
    $ogrno= substr($pdfText, $ogr_no_pos+strlen('Öğrenci No:'),$ogr_no_pos2-$ogr_no_pos-strlen('Öğrenci No:'));
    $ogr_no= str_replace("<br />", " ",$ogrno);


    $ogr_adi_pos_2=strrpos($pdfText, 'Adı Soyadı:');
    $ogr_adi_pos2_2= strrpos($pdfText,'İmza:');
    $ogr_ad_2= substr($pdfText, $ogr_adi_pos_2+strlen('Adı Soyadı:'),$ogr_adi_pos2_2-$ogr_adi_pos_2-strlen('Adı Soyadı:'));
    $ogr_adi_2= str_replace("<br />", " ",$ogr_ad_2);

    $ogr_no_pos_2=strrpos($pdfText, 'Öğrenci No:');
    $ogr_no_pos2_2= strrpos($pdfText,'Adı Soyadı:');
    $ogrno_2= substr($pdfText, $ogr_no_pos_2+strlen('Öğrenci No:'),$ogr_no_pos2_2-$ogr_no_pos_2-strlen('Öğrenci No:'));
    $ogr_no_2= str_replace("<br />", " ",$ogrno_2);

    $ogretimturu= substr($ogr_no, 5,3);
    if($ogretimturu=='202'):
        $ogretimturu='2.Öğretim';
    elseif($ogretimturu=='201'):
        $ogretimturu='1.Öğretim';
    endif;


    $lines = explode("\n", $pdfText);
    foreach($lines as $num => $line){
        $pos = strpos($line, 'Adı Soyadı:');
        $pos2 = strpos($line, 'Öğrenci No:');
        if($pos !== false)
            $sonuc=$num;
        if($pos2 !== false)
            $sonuc2=$num;
    }
    
    $ogr_ad_3= $lines[$sonuc-4];
    $ogr_ad_3= trim(str_replace("<br />", " ",$ogr_ad_3));
    $ogr_ad_3=trim($ogr_ad_3);
    $ogr_ad_3=substr($ogr_ad_3, strlen('Adı Soyadı:'),strlen($ogr_ad_3));

    $ogr_no_3= $lines[$sonuc2-4];
    $ogr_no_3= trim(str_replace("<br />", " ",$ogr_no_3));
    $ogr_no_3=trim($ogr_no_3);
    $ogr_no_3=substr($ogr_no_3, strlen('Öğrenci No:'),strlen($ogr_no_3));

    $ogradson=$ogr_adi.','.$ogr_adi_2.','.$ogr_ad_3;
    $ogrnoson=$ogr_no.','.$ogr_no_2.','.$ogr_no_3;

    

endif;

    //tarih
    $tarihpos='Tezin Savunulduğu Tarih:';
    $tarihpos2 = strrpos($pdfText, $tarihpos);
    $trh= substr($pdfText, $tarihpos2+strlen($tarihpos),14);
    $tarih=trim($trh);
    $ay= substr($tarih, 3,2);
    $yil= substr($tarih, 6,4);

    if($ay>'0' && $ay<'9'):
        $yil=($yil-1).'-'.$yil;
    elseif($ay>'8' && $ay<'13'):
        $yil=$yil.'-'.($yil+1);
    endif;
    if("8">$ay && $ay>"1"):
        $tarih=$yil.' Bahar';

    elseif("7"<$ay && $ay<"13"):
        $tarih=$yil.' Güz';

    elseif($ay=="1"):
        $tarih=$yil.' Güz';
    endif;
 

    //dersadi
    $dersad = explode("\n",$pdfText);
    $dersadi=$dersad[35];
    $dersadi2=str_replace("<br />", " ",$dersadi);
    $dersadi=mb_strtolower_tr($dersadi2);
    $dersadi=mb_convert_case($dersadi,MB_CASE_TITLE,"UTF-8");
    $dersadi=trim($dersadi);

    //baslik
    $ogr_adi2=mb_strtoupper_tr($ogr_adi);
    $baslik_pos= strpos($pdfText,trim($dersadi2));
    $baslik_pos2=strrpos($pdfText,trim($ogr_adi2));
    $baslik= substr($pdfText, $baslik_pos+strlen(trim($dersadi2)),$baslik_pos2-$baslik_pos-strlen(trim($dersadi2)));
    $baslik= str_replace("<br />", " ",$baslik);
    $baslik=trim($baslik);
   
    
    //ozet
    $ozetpos = strrpos($pdfText, 'ÖZET');
    $ozetpos2 = strpos($pdfText, 'Anahtar kelimeler');
    $ozet= substr($pdfText, $ozetpos+5,$ozetpos2-$ozetpos-5);
    $ozet= str_replace("<br />", " ",$ozet);
    $ozet=trim($ozet);
      //anahtar kelime
    $anahtarpos='Anahtar kelimeler:';
    $anahtarpos2 = strrpos($pdfText, $anahtarpos);
    $anahtarpos3 = strrpos($pdfText, 'ABSTRACT');
    $aa= substr($pdfText, $anahtarpos2+strlen($anahtarpos),$anahtarpos3-$anahtarpos2-strlen($anahtarpos));
    $nokta = strrpos($aa, '.');
    $kelimeler= substr($aa, 0, $nokta);
    $kelimeler= str_replace("<br />", " ",$kelimeler);
    $kelimeler=mb_strtolower_tr($kelimeler);
    $kelimeler=trim($kelimeler);

    //danisman
    //Juri üyeleri
    $lines = explode("\n", $pdfText);
    foreach($lines as $num => $line){
    $pos = strpos($line, 'Danışman');
    $pos2 = strpos($line, 'Jüri');
    if($pos !== false)
        $sonuc=$num-1;
    if($pos2 !== false)
        $sonuc2=$num-1;
    }
    
    $danisman=$lines[$sonuc];
    $danisman= str_replace("<br />", " ",$danisman);
    $danisman=trim($danisman);
    $juri1=$lines[$sonuc2];
    $juri2=$lines[$sonuc2-2];
    $juri1= trim(str_replace("<br />", " ",$juri1));
    $juri2= trim(str_replace("<br />", " ",$juri2));

    
      $adsoyad=trim($ogradson);
      $ogrno=trim($ogrnoson);
      $dersadi =trim($dersadi);
      $baslik=trim($baslik);
      $danisman=$danisman;
      $juri1=$juri1;
      $juri2=$juri2;
   
      
      try {
        $sorgu2= "select *from projeler where dokuman='uploads/$filename'";
        $query2 = $conn->query($sorgu2); //Database bağlantı kodumuzda bağlantıyı sağlayan değişken adı
        $query2->setFetchMode(PDO::FETCH_ASSOC);
        while ($row2 = $query2->fetch()) {
            $dokuman_id=$row2['id'];
        }
        $sorgu = "INSERT INTO bilgiler (adsoyad,ogrencino,ogretimturu,dersadi,ozet,tarih,baslik,kelimeler,danisman,juri,dokuman_id)
        VALUES ('$adsoyad','$ogrno','$ogretimturu','$dersadi','$ozet','$tarih','$baslik','$kelimeler','$danisman','$danisman,$juri1,$juri2','$dokuman_id')";
        $conn->exec($sorgu);
        echo "Record created successfully";
      } catch(PDOException $e) {
        echo $sorgu . "<br>" . $e->getMessage();
      }
    
      /*
      try {
        $sorgu2= "select * from projeler where kullaniciadi='$username'";
        $sorgu = "INSERT INTO bilgiler (adsoyad,ogrencino,dersadi,ozet,tarih,baslik,kelimeler,danisman,juri,dokuman_id)
        VALUES ('$adsoyad','$ogrno','$dersadi','$ozet','$tarih','$baslik','$kelimeler','$danisman','$juri1,$juri2','$dokumanid')";
        $conn->exec($sorgu);
        echo "Record created successfully";
      } catch(PDOException $e) {
        echo $sorgu . "<br>" . $e->getMessage();
      }*/
    
      function mb_strtoupper_tr($metin){
        //diğer karakterler de bu şekilde eklenebilir.
         $metin=str_replace('i', 'İ', $metin);
         $metin=str_replace('i', 'İ', $metin);
         return mb_strtoupper($metin,'UTF8');
     }
     function mb_strtolower_tr($metin){
         $metin=str_replace('I', 'ı', $metin);
         $metin=str_replace('İ', 'i', $metin);
         return mb_strtolower($metin,'UTF8');
     }
    
      
    
    header("location:projeler.php");

?>
