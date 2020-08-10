
			
<div class="add" ><a style="color:white;font-size:16px;" onclick="javascript:printDiv('printablediv')" style="color:white;font-size:15px;background-color:red" name="print" style="cursor:pointer;" class="btn btn-info"><i class="icon-white icon-print"  ></i> Imprimer</a></div>
	</div>

<?php
include("connect.php");
isset( $_REQUEST['mois'] ) ? $mois=$_REQUEST['mois'] : $mois='';
isset( $_REQUEST['annee'] ) ? $annee=$_REQUEST['annee'] : $annee='';


if( empty( $mois ) and empty( $annee ) ){

	echo '<script> alert("Svp choisissez le mois et année ensuite vous cliquez sur le button rechercher!")</script>';
}else{
	
	$sql =$db->query( "SELECT courrier_sort.num_lettre_sort,service.code_service,service.libelle_service,
 agent.code_departement, courrier_sort.objet_sort,courrier_sort.jour_sort,courrier_sort.mois_sort,
 courrier_sort.annee_sort,courrier_sort.observation_sort,
 courrier_sort.code_sexe,courrier_sort.nom_sort,courrier_sort.postnom_sort,courrier_sort.prenom_sort,
 courrier_sort.entreprise_sort,courrier_sort.email_sort,
 courrier_sort.telephone_sort,courrier_sort.commentaire_sort
 from courrier_sort

join service on courrier_sort.code_service=service.code_service 

join agent on courrier_sort.mat_agent=agent.mat_agent

where mois_sort='$mois' and annee_sort='$annee' ORDER BY courrier_sort.num_lettre_sort
 ");


$num =$sql->RowCount();
   /* Récupère le nombre de lignes qui correspond à la requête SELECT */
   if ($num>= 1) {
		echo "
		
			

		<div class='data' id='printablediv'  >


		<div style='margin:10px; color:red; font-weight: bold;'> <b style='color:#00BFFF'> Nombre de Courriers : </b> $num     </div>";


		if (isset($mois) and isset($annee)   )
{ 
if($mois=="12"){ 
$mois="Décembre";

}
if($mois=="11"){ 
$mois="Novembre";

}
if($mois=="10"){ 
$mois="Octobre";

}
if($mois=="9"){ 
$mois="Septembre";

}
if($mois=="8"){ 
$mois="Août";

}
if($mois=="7"){ 
$mois="Juillet";

}
if($mois=="6"){ 
$mois="Juin";

}
if($mois=="5"){ 
$mois="Mai";

}
if($mois=="4"){ 
$mois="Avril";

}
if($mois=="3"){ 
$mois="Mars";

}
if($mois=="2"){ 
$mois="Fevrier";

}
if($mois=="1"){ 
$mois="Janvier";

}
 $text="LISTE DES COURRIERS SORTANTS : " .$mois."/"."".$annee;

//echo   $text;
}
		echo  
	
		
		"<div style='color:#00BFFF; font-weight: bold;font-size:15px;font-family:verdana' align='center'>$text </div>";
		
		
		

	echo "<table border='0' cellspacing='1' width='100%' align='center' class='animated fadeInRight'  style='border-width:1px;border-style:solid;border-color:black;;padding:30px;text-align:justify;margin-top:-12px' >
	

                          
</div>
	
"; 
	echo" <tr   style='background-color:#0F9DE8;'  style='border-width:1px;border-style:solid;border-color:white;' >
                    <th style='border-width:1px;border-style:solid;border-color:black;padding:6px;'><div style='color:white;font-size:16px'>N°</div></th>
                    <th style='border-width:1px;border-style:solid;border-color:black;padding:6px;'><div style='color:white;font-size:16px'>DATE D'ENREGISTREMENT</div></th>
                    <th style='border-width:1px;border-style:solid;border-color:black;padding:6px;'><div style='color:white;font-size:16px'>EXPEDITEUR DU COURRIER</div></th>
					<th style='border-width:1px;border-style:solid;border-color:black;padding:6px;'><div style='color:white;font-size:16px'>OBJET</div></th>
                    <th style='border-width:1px;border-style:solid;border-color:black;padding:6px;'><div style='color:white;font-size:16px'>SERVICE</div></th>
					<th style='border-width:1px;border-style:solid;border-color:black;padding:6px;'><div style='color:white;font-size:16px'>COMMENTAIRE</div></th>
					<th style='border-width:1px;border-style:solid;border-color:black;padding:6px;'><div style='color:white;font-size:16px'>OBSERVATION</div></th>

                </tr> ";
	
	
while ($donnees = $sql->fetch()) { 
 
    echo"
	<tbody >
                 <tr valign='top' style='color:black;font-weight:bold;background-color:white;'>
                                     
                   <td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;padding:6px;'>  
                     <strong></strong> ".$donnees['num_lettre_sort']." <br />
					  </td>
					    	<td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;padding:6px;'>  
                     <strong></strong> ".$donnees['jour_sort']." ".'/'." ".$donnees['mois_sort']." ".'/'. " ".$donnees['annee_sort']."<br /> 
					  </td>
					       <td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;padding:6px'> 
                     <strong></strong> </b> ".$donnees['nom_sort']." "."," ." ".$donnees['postnom_sort'].","." ".$donnees['prenom_sort'].","." ".$donnees['entreprise_sort'].","." ".$donnees['email_sort'].","." ".$donnees['telephone_sort']."  <br />  
                      </td>	
					
					  <td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;padding:6px;'>  
					 <strong></strong> ".$donnees['objet_sort']." <br />
					 </td>
					<td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;padding:6px;'>  
                     <strong></strong> ".$donnees['libelle_service']." <br />  
					  </td>
					
					  	  <td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;padding:6px;'>  
					 <strong></strong> ".$donnees['commentaire_sort']." <br />
					 </td>
                 
                	  <td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;padding:6px;'>  
					 <strong></strong> ".$donnees['observation_sort']." <br />
					 </td>
			
                   
                      
                          
                </tr>        
            </tbody>
	";
   
		}
	}else{
		echo "<script> alert('Aucun resultat trouvé pour votre recherche')</script>";
	}
}

?></br> 
