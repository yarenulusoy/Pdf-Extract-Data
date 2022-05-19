<?php include("sol_cubuk.php");?>
    <div class="container">
        <div class="bolum"><p>BİLGİSAYAR MÜHENDİSLİĞİ BÖLÜMÜ</p></div>
        
        <div id="drop_file_zone" ondrop="upload_file(event)" ondragover="return false">
        <br>
            <i class="fa fa-download">&nbsp;&nbsp;  Projenizi buradan yükleyebilirsiniz.</i>

            <div id="drag_upload_file">
            </br>
            <p> 
                <div class=dosya>
            <form action = "bilgi_cikarma.php" method = "POST" enctype="multipart/form-data">
                <input type = "file" name = "fileupload"/></br>  
            <input class="yukle" type = "submit" name = "opt" value = "YÜKLE"/></br></br>  
            </form>
            </div>
        </div>

        
        
    </div>
       
        

 
</body>
</html>