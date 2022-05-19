<?php  #admin panelinden çıkış 
    session_start();  
    session_destroy();  
    header("location:../giris.php");  
 ?>  