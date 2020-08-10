
			
<div class="add" ><a style="color:white;font-size:16px;" onclick="javascript:printDiv('printablediv')" style="color:white;font-size:15px;background-color:red" name="print" style="cursor:pointer;" class="btn btn-info"><i class="icon-white icon-print"  ></i> Imprimer</a></div>
	</div>
<?php
include("connect.php");
isset( $_REQUEST['mois'] ) ? $mois=$_REQUEST['mois'] : $mois='';
isset( $_REQUEST['annee'] ) ? $annee=$_REQUEST['annee'] : $annee='';


if( empty( $jour ) and empty( $mois ) and empty( $annee )){

	echo '<script> alert("Svp choisissez le mois et année ensuite vous cliquez sur le button rechercher!")</script>';
}else{
	
	$sql =$db->query( "SELECT courrier.num_courrier,courrier.num_lettre,service.code_service,service.libelle_service,
 agent.code_departement,type_courrier.libelle_type_courrier,
 courrier.objet,courrier.jour,courrier.mois,courrier.annee,courrier.observation,
 courrier.code_sexe,courrier.nom,courrier.postnom,courrier.prenom,courrier.entreprise,courrier.email,
 courrier.telephone,courrier.libelle_type_document
 from courrier

join service on courrier.code_service=service.code_service 

join agent on courrier.mat_agent=agent.mat_agent

join type_courrier on courrier.id_type_courrier=type_courrier.id_type_courrier
where agent.code_departement='SEN' and type_courrier.id_type_courrier='ARV' and service.code_service='INFO'
 and  mois='$mois' and annee='$annee'
");


$num =$sql->RowCount();
   /* Récupère le nombre de lignes qui correspond à la requête SELECT */
   if ($num>= 1) {
		echo "
		
			

		<div class='data' id='printablediv'  >


		<div style='margin:10px; color:red; font-weight: bold;'>$num  Enregistrements trouvé  </div>";
	echo "<table border='0' cellspacing='1' width='100%' align='center' class='animated fadeInRight'  style='border-width:1px;border-style:solid;border-color:black;;padding:30px;text-align:justify;' >
	
</div>
	
";
	echo" <tr   style='background-color:red;'  style='border-width:1px;border-style:solid;border-color:black;' >
                    <th style='border-width:1px;border-style:solid;border-color:black;padding:6px;'><div style='color:yellow;font-size:16px'>N°</div></th>
                    <th style='border-width:1px;border-style:solid;border-color:black;padding:6px;'><div style='color:yellow;font-size:16px'>Numéro de la lettre</div></th>
					 <th style='border-width:1px;border-style:solid;border-color:black;padding:6px;'><div style='color:yellow;font-size:16px'>Objet</div></th>
                    <th style='border-width:1px;border-style:solid;border-color:black;padding:6px;'><div style='color:yellow;font-size:16px'>Service</div></th>
					 <th style='border-width:1px;border-style:solid;border-color:black;padding:6px;'><div style='color:yellow;font-size:16px'>Date d'enregistrement</div></th>
                    <th style='border-width:1px;border-style:solid;border-color:black;padding:6px;'><div style='color:yellow;font-size:16px'>Destinateur du courrier</div></th>
					 <th style='border-width:1px;border-style:solid;border-color:black;padding:6px;'><div style='color:yellow;font-size:16px'>Observation</div></th>
                </tr>  ";
	
	
while ($donnees = $sql->fetch()) {  
    echo"
	
	<tbody >
                 <tr valign='top' style='color:white;font-weight:bold;background-color:#00BFFF;'>
                                     
                 <td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;padding:6px;'>                  
                     <strong></strong> ".$donnees['num_courrier']." <br />  
					   </td>
					    <td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;padding:6px;'>  
                     <strong></strong> ".$donnees['num_lettre']." <br />
					  </td>
					  <td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;padding:6px;'>  
					 <strong></strong> ".$donnees['objet']." <br />
					 </td>
					<td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;padding:6px;'>  
                     <strong></strong> ".$donnees['libelle_service']." <br />  
					  </td>
					  	<td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;padding:6px;'>  
                     <strong></strong> ".$donnees['jour']." ".'/'." ".$donnees['mois']." ".'/'. " ".$donnees['annee']."<br /> 
					  </td>
					 
                      <td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;padding:6px'> 
                     <strong></strong> </b> ".$donnees['nom']." "."," ." ".$donnees['postnom'].","." ".$donnees['prenom'].","." ".$donnees['entreprise'].","." ".$donnees['email'].","." ".$donnees['telephone']."  <br />  
                      </td>	
                    <td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;padding:6px;'> 					  
                     <div style='word-wrap:break-word;color:white;font-weight:bold;font-family:verdana' > ".$donnees['observation']."</div> 
                 </td>
                   
                          
                </tr>        
            </tbody>
	";
   
		}
	}else{
		echo "<script> alert('Aucun resultat trouvé pour votre recherche')</script>";
	}
}
?>