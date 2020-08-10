
			
<div class="add" ><a style="color:white;font-size:16px;" onclick="javascript:printDiv('printablediv')" style="color:white;font-size:15px;background-color:red" name="print" style="cursor:pointer;" class="btn btn-info"><i class="icon-white icon-print"  ></i> Imprimer</a></div>
	</div>
<?php
include("connect.php");
isset( $_REQUEST['mois'] ) ? $mois=$_REQUEST['mois'] : $mois='';
isset( $_REQUEST['annee'] ) ? $annee=$_REQUEST['annee'] : $annee='';


if( empty( $jour ) and empty( $mois ) and empty( $annee )){

	echo '<script> alert("Svp choisissez le mois et année ensuite vous cliquez sur le button rechercher!")</script>';
}else{
	
	$sql =$db->query( "SELECT courrier_archive.id_courrier_archive,courrier_archive.numero,courrier_archive.libelle_type_document_archive,
 courrier_archive.fichier_document_archive,courrier_archive.mat_agent,courrier_archive.jour_saisie_courrier_archive,courrier_archive.mois_saisie_courrier_archive,courrier_archive.annee_saisie_courrier_archive,
 courrier_archive.lien_fichier_document_archive,courrier_archive.mois_saisie_courrier_archive,courrier_archive.annee_saisie_courrier_archive,agent.mat_agent
 from courrier_archive

join agent on courrier_archive.mat_agent=agent.mat_agent
where agent.code_departement='SEN'  and  mois_saisie_courrier_archive='$mois'  and annee_saisie_courrier_archive='$annee'
 ORDER BY courrier_archive.id_courrier_archive");


$num =$sql->RowCount();
   /* Récupère le nombre de lignes qui correspond à la requête SELECT */
   if ($num>= 1) {
		echo "
		
			

		<div class='data' id='printablediv'  >


		<div style='margin:10px; color:red; font-weight: bold;'>$num  Enregistrements trouvé  </div>";
	echo "<table border='0' cellspacing='1' width='100%' align='center' class='animated zoomIn'   style='border-width:1px;border-style:solid;border-color:black;padding:30px;text-align:justify;' >
	
</div>
	
";
	echo"  <tr style='background-color:#00BFFF;' style='border-width:1px;border-style:solid;border-color:black;'>
                    <th style='border-width:1px;border-style:solid;border-color:black;padding:6px;'><div style='color:white;font-size:16px'>N°</div></th>
                    <th style='border-width:1px;border-style:solid;border-color:black;padding:6px;'><div style='color:white;font-size:16px'>Numéro de la lettre</div></th>
					<th style='border-width:1px;border-style:solid;border-color:black;padding:6px;'><div style='color:white;font-size:16px'>Type document</div></th>
					<th style='border-width:1px;border-style:solid;border-color:black;padding:6px;'><div style='color:white;font-size:16px'>Date d'enregistrement</div></th>
				    <th style='border-width:1px;border-style:solid;border-color:black;padding:6px;'><div style='color:white;font-size:16px'>Fichier du courrier archivé</div></th>
                </tr>  ";
	
	
while ($donnees = $sql->fetch()) {  
    echo"
	
	<tbody >
                 <tr valign='top' style='color:black;font-weight:bold;background-color:white;'>
                                     
                 <td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;padding:6px;'>                  
                     <strong></strong> ".$donnees['id_courrier_archive']." <br />  
					   </td>
					    <td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;padding:10px;'>  
                     <strong></strong> ".$donnees['numero']." <br />
					  </td>
					  <td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;padding:6px;'>  
					 <strong></strong> ".$donnees['libelle_type_document_archive']." <br />
					 </td>
				
					  	<td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;padding:6px;'>  
                     <strong></strong> ".$donnees['jour_saisie_courrier_archive']." ".'/'." ".$donnees['mois_saisie_courrier_archive']." ".'/'. " ".$donnees['annee_saisie_courrier_archive']."<br /> 
                          </td>
				           <td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:20px;;padding:6px;'>  
                     <strong></strong><a href='".$donnees['lien_fichier_document_archive']."' alt='Download' title='Download' class='btn btn-primary' target='_blank' style='font-size:20px;background-color:#F7230C;font-weight:bold;' >Voir/Imprimer/Télécharger</a>                                        
  <br />
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