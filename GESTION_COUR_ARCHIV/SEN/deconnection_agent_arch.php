<?php session_start();?>
<?php
if(isset($_SESSION['uname_agent']) ){
unset($_SESSION['uname_agent']);
if(session_destroy()){
header('location:login_arch.php');	
}else{
echo'Erreur de connexion';
}
}else{
header('location:login_arch.php');
}
?>

	