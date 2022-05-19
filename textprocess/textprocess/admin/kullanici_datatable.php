<?php
include 'sabit/connection.php';

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

   ## Search 
   
   $searchQuery = " ";
   if($searchValue != ''){
    $searchQuery = " and adsoyad like '%".$searchValue."%'";
}

   ## Total number of records without filtering
   $sel = mysqli_query($conn_mysql,"select count(*) as allcount from users");
   $records = mysqli_fetch_assoc($sel);
   $totalRecords = $records['allcount'];

   ## Total number of records with filtering
   $sel = mysqli_query($conn_mysql,"select count(*) as allcount from users WHERE 1 ".$searchQuery);
   $records = mysqli_fetch_assoc($sel);
   $totalRecordwithFilter = $records['allcount'];

   ## Fetch records
   $empQuery = "select * from users order by id ASC ";

   $empRecords = mysqli_query($conn_mysql, $empQuery);
   $data = array();
   
   while ($row = mysqli_fetch_assoc($empRecords)) {
    $id=$row['id'];
    $adsoyad=$row['adsoyad'];
    $kullaniciadi=$row['kullaniciadi'];
    $sifre=$row['sifre'];
  

       
    
      $data[] = array(
        "id"=>$id,
        "adsoyad"=>$adsoyad,
        "kullaniciadi"=>$kullaniciadi,
        "sifre"=>$sifre,
        "button"=>"<a href='kullanici_guncelle.php?id=".$id."' name='update' value='update' class='btn btn-primary'>Güncelle</a>",
        "button2"=>"<a href='kullanici_sil.php?id=".$id."' name='update' value='update' class='btn btn-primary'>Sil</a>",
    );
       
        
      
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

