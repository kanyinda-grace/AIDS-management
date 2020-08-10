<?php
session_start();
include 'connect.php';

//code pour supprimer un courrier
if(isset($_GET['supcourentra'])){
	
	$num=$_GET['supcourentra'];

$suprimer=$db->prepare("DELETE from courrier_ent
where num_lettre_ent='$num' ") or die("erreure de requete");
$suprimer->execute(array($_GET['supcourentra']))or die("erreure de requete");
echo '<p style="color:red">  <script>alert( "courrier entrant supprimé avec succés ");window.location.href="Mise_Ajour.php";</script> </p>';

//header("location:Mise_Ajour.php?Mise_Ajour=courrier");

	
}
?>

