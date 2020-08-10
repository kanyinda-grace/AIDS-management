<?php
session_start();
include 'connect.php';

//code pour supprimer un courrier
if(isset($_GET['supcourentra'])){
	
	$num=$_GET['supcourentra'];

$suprimer=$db->prepare("DELETE from courrier_sort
where num_lettre_sort='$num' ") or die("erreure de requete");
$suprimer->execute(array($_GET['supcourentra']))or die("erreure de requete");
echo '<p style="color:red">  <script>alert( "courrier sortant supprimé avec succés ");window.location.href="Mise_Ajour.php";</script> </p>';

//header("location:Mise_Ajour.php?Mise_Ajour=courrier");

	
}
?>

