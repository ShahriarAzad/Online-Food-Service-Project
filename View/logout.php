<?php 
setcookie("CustomerLogged", "", time()-3600);
header("location:login.php");
?>