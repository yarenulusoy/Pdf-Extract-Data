<html lang="tr">

<head>
    <meta charset="utf-8">
    <?php
    
    
include 'pdfparser/alt_autoload.php-dist';
$parser = new \Smalot\PdfParser\Parser(); 
 
//pdf yolu
$file = 'tez3.pdf'; 
 
$pdf = $parser->parseFile($file); 
 
$text = $pdf->getText();
$details  = $pdf->getDetails();
$pdfText=nl2br($text);
//echo $pdfText;

//buraya kadar pdf okundu $pdftext değişkenine bütün yazı atandı
//echo $pdfText;

/*
//tarih
$tarih='Tezin Savunulduğu Tarih:';
$pos1 = strrpos($pdfText, $tarih);
$a= substr($pdfText, $pos1+strlen($tarih),12);
echo $a;
*/
//ders adi
/*
$pdfText=nl2br($text);
$res = explode("\n",$pdfText);
echo $res[36];
*/



//anahtar kelimeler

$anahtarpos='Anahtar kelimeler:';
$anahtarpos2 = strrpos($pdfText, $anahtarpos);
$anahtarpos3 = strrpos($pdfText, 'ABSTRACT');
$aa= substr($pdfText, $anahtarpos2+strlen($anahtarpos),$anahtarpos3-$anahtarpos2-strlen($anahtarpos));
$nokta = strrpos($aa, '.');
$kelimeler= substr($aa, 0, $nokta);
$kelimeler= str_replace("<br />", " ",$kelimeler);
$kelimeler=mb_strtolower_tr($kelimeler);
//echo $kelimeler;


//özet
$anahtar='Anahtar  kelimeler:';
$apos1 = strrpos($pdfText, $anahtar);
$apos = strrpos($pdfText, 'ABSTRACT');
$aa= substr($pdfText, $apos1+strlen($anahtar),$apos-$apos1-strlen($anahtar));
$nokta = strrpos($aa, '.');
$ab= substr($aa, 0, $nokta);






$lines = explode("\n", $pdfText);
foreach($lines as $num => $line){
    $pos = strpos($line, 'Danışman');
    $pos2 = strpos($line, 'Jüri');
    if($pos !== false)
        $sonuc=$num-1;
    if($pos2 !== false)
        $sonuc2=$num-1;
}

$juri1= $lines[$sonuc2];
$juri2= $lines[$sonuc2-2];
$juri1= trim(str_replace("<br />", " ",$juri1));
$juri2= trim(str_replace("<br />", " ",$juri2));

 

$tarihpos='Tezin Savunulduğu Tarih:';
$tarihpos2 = strrpos($pdfText, $tarihpos);
$trh= substr($pdfText, $tarihpos2+strlen($tarihpos),12);
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

//9-1
//2-7

$dersad = explode("\n",$pdfText);
$dersadi=$dersad[35];
$dersadi2=str_replace("<br />", " ",$dersadi);
$dersadi=mb_strtolower_tr($dersadi2);
$dersadi=mb_convert_case($dersadi,MB_CASE_TITLE,"UTF-8");
//echo $pdfText;
//echo $dersadi;

$ogr_adi_pos=strrpos($pdfText, 'Adı Soyadı:');
    $ogr_adi_pos2= strrpos($pdfText,'İmza:');
    $ogr_ad= substr($pdfText, $ogr_adi_pos+strlen('Adı Soyadı:'),$ogr_adi_pos2-$ogr_adi_pos-strlen('Adı Soyadı:'));
    $ogr_adi= str_replace("<br />", " ",$ogr_ad);
    

    $ogr_no_pos=strpos($pdfText, 'Öğrenci No:');
    $ogr_no_pos2= strpos($pdfText,'Adı Soyadı:');
    $ogrno= substr($pdfText, $ogr_no_pos+strlen('Öğrenci No:'),$ogr_no_pos2-$ogr_no_pos-strlen('Öğrenci No:'));
    $ogr_no= str_replace("<br />", " ",$ogrno);
    


$ogr_adi_pos=strpos($pdfText, 'Adı Soyadı:');
$ogr_adi_pos2= strpos($pdfText,'İmza:');
$ogr_ad= substr($pdfText, $ogr_adi_pos+strlen('Adı Soyadı:'),$ogr_adi_pos2-$ogr_adi_pos-strlen('Adı Soyadı:'));
$ogr_adi= str_replace("<br />", " ",$ogr_ad);


$anahtarpos='Anahtar  kelimeler:';
    $anahtarpos2 = strrpos($pdfText, $anahtarpos);
    $anahtarpos3 = strrpos($pdfText, 'ABSTRACT');
    $aa= substr($pdfText, $anahtarpos2+strlen($anahtarpos),$anahtarpos3-$anahtarpos2-strlen($anahtarpos));
    $nokta = strrpos($aa, '.');
    $kelimeler= substr($aa, 0, $nokta);
    $kelimeler= str_replace("<br />", " ",$kelimeler);


$adi_ara2=mb_strtoupper_tr($ogr_adi);


$ogr_adi_pos=strrpos($pdfText, 'Adı Soyadı:');
    $ogr_adi_pos2= strrpos($pdfText,'İmza:');
    $ogr_ad= substr($pdfText, $ogr_adi_pos+strlen('Adı Soyadı:'),$ogr_adi_pos2-$ogr_adi_pos-strlen('Adı Soyadı:'));
    $ogr_adi= str_replace("<br />", " ",$ogr_ad);
    

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

        $ogradson=$ogr_adi.','.$ogr_adi_2.'.'.$ogr_ad_3;
        $ogrnoson=$ogr_no.','.$ogr_no_2.'.'.$ogr_no_3;

        

    endif;
    
  
function mb_strtoupper_tr($metin){
    //diğer karakterler de bu şekilde eklenebilir.
     $metin=str_replace('i', 'İ', $metin);
     $metin=str_replace('i', 'İ', $metin);
  
     //kalan karakteleri büyütüp geri çeviriyoruz.
     return mb_strtoupper($metin,'UTF8');
 }
 function mb_strtolower_tr($metin){
    //diğer karakterler de bu şekilde eklenebilir.
     $metin=str_replace('I', 'ı', $metin);
  
     //kalan karakteleri büyütüp geri çeviriyoruz.
     return mb_strtolower($metin,'UTF8');
 }

$yeni=trim($adi_ara2);





$ogr_adi2=mb_strtoupper_tr($ogr_adi);
$baslik_pos= strpos($pdfText,trim($dersadi2));
$baslik_pos2=strrpos($pdfText,trim($ogr_adi2));
$baslik= substr($pdfText, $baslik_pos+strlen(trim($dersadi2)),$baslik_pos2-$baslik_pos-strlen(trim($dersadi2)));

echo $baslik;
  function replaceSpace($string)
  {
      $string = preg_replace("/\s+/", " ", $string);
      $string = trim($string);
      return $string;
  }
// Loop over each property to extract values (string or array).
/*
try {
       
    $sorgu = "INSERT INTO deneme(ad)
    VALUES ('$juri1,$juri2')";
    $conn->exec($sorgu);
    echo "Record created successfully";
  } catch(PDOException $e) {
    echo $sorgu . "<br>" . $e->getMessage();
  }*/

?>

</html>