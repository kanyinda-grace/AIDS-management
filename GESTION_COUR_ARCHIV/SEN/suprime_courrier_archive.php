<?php
session_start();
include 'connect.php';

//code pour supprimer un courrier
if(isset($_GET['supcourentra'])){
	
	$num=$_GET['supcourentra'];

$suprimer=$db->prepare("DELETE from courrier_archive
where  id_courrier_archive='$num' ") or die("erreure de requete");
$suprimer->execute(array($_GET['supcourentra']))or die("erreure de requete");
echo '<p style="color:red">  <script>alert( "courrier archivé supprimé avec succés ");window.location.href="Mise_Ajour_archive.php";</script> </p>';

//header("location:Mise_Ajour.php?Mise_Ajour=courrier");

	
}
?>

