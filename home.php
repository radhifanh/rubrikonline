<?php

session_start();
 
include "library.php";

if(isset($_SESSION['id_user'])){
 
  
 
if(isset($_GET['id_user'])){
 
$id_user=$_GET['id_user'];
 
}
 
  
 
if(empty($_GET['id_user'])){
 
$id_user=$_SESSION['id_user'];
 
}
 
$link=koneksi_db();
 
$query=mysql_fetch_array(mysql_query("select * from user where id_user='$id_user'",$link));
 
$nama_depan=$query['nama_depan'];
 
$nama_belakang=$query['nama_belakang'];
 
$photo=$query['foto_profil'];
 
?>
 
  
 
<!DOCTYPE html>
 
<html lang="en">
 
<head>
 
<meta charset="utf-8">
 
<title>Home</title>
 
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
 
<script type="text/javascript" src="js/jquery.min.js"></script>
 
<script type="text/javascript" src="js/bootstrap.min.js"></script>
 
</head>
 
<body>
 
<?php echo include"header.php";?>
 
<div class="container">
 
        <div class="jumbotron">
 
        </div>
 
         
 
<div class="row" style="background-color:#0C9">
 
        <div class="col-md-2"><!--mulai colmd 2-->
 
            
 
    <div class="row">
 
        <div class="col-md-12">
 
            <div class="thumbnail">
 
                <img src="foto/<?php echo $photo;?>" class="thumbnail">
 
                <div class="caption">
 
                    <h4><?php echo $nama_depan.' '.$nama_belakang;?></h4>
 
                </div>
 
            </div>
 
        </div>
 
                     
 
                    <?php include"bagiankiri.php";?>
 
     
 
</div>
 
        </div><!--akhir colmd 2-->
 
        <div class="col-md-6"><!--mulai colmd 6-->
 
             
 
            <div class="row">
 
  <div class="col-md-1">
 
                                 
 
            </div>               
 
<div class="col-md-9">               
 
<form action="updatestatus.php" method="post">                                               
 
<div class="row">
 
<div class="form-group">
 
<textarea maxlength="255" cols="40" rows="4" name="update" class="form-control" placeholder="..........."></textarea>
 
<button type="submit" class="btn btn-primary pull-left" value="POST" name="kirim">POST</button>
 
</div> 
 
</div>                           
 
</form>
 
</div>
 
<div class="col-md-2">
 
                 
 
            </div>                                       
 
</div><!--/.STATUS-->
 
             
 
             
 
             
 
     </div><!--akhir colmd 6-->
 
            <div class="col-md-4"><!--mulai colmd 4-->
 
     </div><!--akhir colmd 4-->
 
        </div>
 
 
<?php  
 
footer();
 
?>
 
</div> <!-- END CONTAINER -->
 
</body>
 
</html>
 
<?php
 
}else{
 
header("Location:index.php");
 
}
 
?>