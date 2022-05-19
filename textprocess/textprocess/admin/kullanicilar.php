<?php include("sabit/sol_cubuk.php") ?>
<div class="admin-content">
    <form method="POST">
        <div class="container">
        <table id='empTable' class='display dataTable'>
        <thead>
                    <th>Id</th>
                    <th>Ad Soyad</th>
                    <th>Kullanıcı Adı</th>
                    <th>Şifre</th>
                    <th></th>
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
   var dataTable;
$(document).ready(function(){

   // Initialize datatable
   dataTable = $('#empTable').DataTable({
     'processing': true,
     'serverSide': true,
     'serverMethod': 'post',
     'ajax': {
        'url':'kullanici_datatable.php',
        'data': function(data){
           
           data.request = 1;

        }
     },
     'columns': [
      
        
        { data: 'id' },
        { data: 'adsoyad' },
        { data: 'kullaniciadi' },
        { data: 'sifre' },
        { data: 'button' },
        { data: 'button2' },
     
        
     ],
     'columnDefs': [ {
       'targets': [5], // column index (start from 0)
       'orderable': false, // set orderable false for selected columns
     }]
   });

   

});
</script>

 
