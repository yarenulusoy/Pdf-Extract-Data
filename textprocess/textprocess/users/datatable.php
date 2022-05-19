<?php
include("session.php"); 
include ('../connection.php');
$username = $_SESSION["username"];
$sqluser = "select * from users where kullaniciadi='$username'";
$queryuser = $conn->query($sqluser); //Database bağlantı kodumuzda bağlantıyı sağlayan değişken adı
$queryuser->setFetchMode(PDO::FETCH_ASSOC);
while ($rowuser= $queryuser->fetch()) {
    $user=$rowuser['id'];
}

$empQuery2= " ";

$tarih=$_POST['tarih'];
$dersadi=$_POST['dersadi'];
$request = $_POST['request'];

// Datatable data
if($request == 1){
   ## Read value
   $draw = $_POST['draw'];
   $row = $_POST['start'];
   $rowperpage = $_POST['length']; // Rows display per page
   $columnIndex = $_POST['order'][0]['column']; // Column index
   $columnName = $_POST['columns'][$columnIndex]['data']; // Column name
   $columnSortOrder = $_POST['order'][0]['dir']; // asc or desc
   $searchValue = mysqli_real_escape_string($conn_mysql,$_POST['search']['value']); // Search value

   if($dersadi != ''){
   $empQuery2='and tarih = "'.$tarih.'" AND dersadi = "'.$dersadi.'"';
   }


   ## Search 
   
   $searchQuery = " ";
   if($searchValue != ''){
    $searchQuery = "and (adsoyad like '%".$searchValue."%' or dersadi like '%".$searchValue."%' or baslik like '%".$searchValue."%' or kelimeler like '%".$searchValue."%' or tarih like '%".$searchValue."%')";
}

   ## Total number of records without filtering
   $sel = mysqli_query($conn_mysql,"select count(*) as allcount from bilgiler  inner join projeler ON projeler.id=bilgiler.dokuman_id where projeler.kullanici_id='".$user."' ");
   $records = mysqli_fetch_assoc($sel);
   $totalRecords = $records['allcount'];

   ## Total number of records with filtering
   $sel = mysqli_query($conn_mysql,"select count(*) as allcount from bilgiler inner join projeler on  projeler.id=bilgiler.dokuman_id WHERE  projeler.kullanici_id='".$user."' ".$searchQuery."");
   $records = mysqli_fetch_assoc($sel);
   $totalRecordwithFilter = $records['allcount'];
   
   ## Fetch records
  // $empQuery = "select * from bilgiler inner join projeler ON projeler.id=bilgiler.dokuman_id  where 1 ".$searchQuery." ".$empQuery2."  and projeler.kullanici_id='1'  order by proje_id ASC ";
  $empQuery = "select * from bilgiler inner join projeler ON projeler.id=bilgiler.dokuman_id  where 1 ".$searchQuery." ".$empQuery2."  and projeler.kullanici_id='".$user."'  order by proje_id ASC ";

   $empRecords = mysqli_query($conn_mysql, $empQuery);
   $data = array();
   
   while ($row = mysqli_fetch_assoc($empRecords)) {
    $id=$row['proje_id'];
    $id2=$row['dokuman_id'];
    $yazar=$row['adsoyad'];
    $ders=$row['dersadi'];
    $konu=$row['baslik'];
    $kelime=$row['kelimeler'];
    $donem=$row['tarih'];
    
    
     
       
    
      $data[] = array(
        "id"=>$id,
        "yazar"=>$yazar,
        "ders"=>$ders,
        "konu"=>$konu,
        "kelime"=>$kelime,
        "donem"=>$donem,
       
        "button"=>"<a href='proje_bilgi.php?id=".$id2."' name='update' value='update' class='btn btn-primary'>Göster</a>",);
       
        
      
   }

   ## Response
   $response = array(
      "draw" => intval($draw),
      "iTotalRecords" => $totalRecords,
      "iTotalDisplayRecords" => $totalRecordwithFilter,
      "aaData" => $data
   );

   echo json_encode($response);
   exit;
}

