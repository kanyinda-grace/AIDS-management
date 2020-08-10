<?php session_start();?>
<?php
if(isset($_SESSION['uname_agent_sen']) ){
unset($_SESSION['uname_agent_sen']);
if(session_destroy()){
header('location:login.php');	
}else{
echo'Erreur de connexion';
}
}else{
header('location:login.php');
}
?>

	