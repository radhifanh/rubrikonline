<?php
 
session_start();
 
include("library.php");
 
if(empty($_SESSION['id_user'])){ //fungsi jika session kosong belum login
 
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
  
<html xmlns="http://www.w3.org/1999/xhtml">
 
<head>
 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 
<title>Rubrik Online</title>
 
  
 
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
 
<script type="text/javascript" src="js/jquery.min.js"></script>
 
<script type="text/javascript" src="js/bootstrap.min.js"></script>
 
  
 
</head>
 
<body>
 
 <?php
 
navbarindex(); //memanggil function navbar
 
modallogin(); //memanggil function modal login
 
?>
 
 
<div class="container">
 
        <div class="jumbotron">
 
            <h2>RUBRIK ONLINE</h2>
 
            <p>Buat Rubrik Dan Berbagi <small> </small></p>
 
        </div>
 
<?php  
 
register(); // memanggil form untuk registrasi
 
footer(); // memanggil footer dari web
 
?>
 
</div>
 
</body>
</html>

<?php
 
}
 
else
 
{
 
header("Location:home.php");
 
}
 
?>