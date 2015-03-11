<?php
session_start();
 
include("library.php");
 
if(empty($_SESSION['id_user'])){ //fungsi jika session kosong belum login
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Pendaftaran Berhasil</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
<?php
navbarindex();//memanggil fungsi navbarindex
modallogin();//memanggil fungsi modallogin
?>
  
<div class="container">
        <div class="jumbotron">
            <h2>Rubrik Online</h2>
            <p>Buat Rubrik Dan Berbagi <small> </small></p>
        </div>
<div class="row">
        <div class="col-md-4">
        </div>
<!-- ISI -->
        <div class="col-md-4">
            <h3><center>Pendaftaran Berhasil ! Silahkan Login !</center></h3>
                <form name="login" method="post" action="login.php">
    <div class="form-group">
        <label for="inputEmail">Email</label>
        <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email">
     </div>
     <div class="form-group">
        <label for="inputPassword">Password</label>
        <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password">
      </div>
    <button type="submit" class="btn btn-primary">Login</button>
</form>
                </div>
        </div>
<?php  
footer();// memanggil fungsi footer
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