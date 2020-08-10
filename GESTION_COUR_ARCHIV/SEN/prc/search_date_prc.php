
			
<div class="add" ><a style="color:white;font-size:16px;" onclick="javascript:printDiv('printablediv')" style="color:white;font-size:15px;background-color:red" name="print" style="cursor:pointer;" class="btn btn-info"><i class="icon-white icon-print"  ></i> Imprimer</a></div>
	</div>
<?php
include("connect.php");
isset( $_REQUEST['mois'] ) ? $mois=$_REQUEST['mois'] : $mois='';
isset( $_REQUEST['annee'] ) ? $annee=$_REQUEST['annee'] : $annee='';


if( empty( $jour ) and empty( $mois ) and empty( $annee )){

	echo '<script> alert("Svp choisissez le mois et année ensuite vous cliquez sur le button rechercher!")</script>';
}else{
	
	$sql =$db->query( "SELECT courrier_ent.num_lettre_ent,service.code_service,service.libelle_service,
 agent.code_departement, courrier_ent.objet_ent,courrier_ent.jour_ent,courrier_ent.mois_ent,
 courrier_ent.annee_ent,courrier_ent.observation_ent,
 courrier_ent.code_sexe,courrier_ent.nom_ent,courrier_ent.postnom_ent,courrier_ent.prenom_ent,
 courrier_ent.entreprise_ent,courrier_ent.email_ent,
 courrier_ent.telephone_ent,courrier_ent.libelle_type_document_ent,courrier_ent.commentaire
 from courrier_ent

join service on courrier_ent.code_service=service.code_service 

join agent on courrier_ent.mat_agent=agent.mat_agent

where agent.code_departement='SEN'  and service.code_service='PRC' and  mois_ent='$mois' and annee_ent='$annee'

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
	echo" <tr   style='background-color:#0F9DE8;'  style='border-width:1px;border-style:solid;border-color:white;' >
                    <th style='border-width:1px;border-style:solid;border-color:black;padding:6px;'><div style='color:white;font-size:16px'>Numéro lettre entrante</div></th>
                    <th style='border-width:1px;border-style:solid;border-color:black;padding:6px;'><div style='color:white;font-size:16px'>Type document</div></th>
					 <th style='border-width:1px;border-style:solid;border-color:black;padding:6px;'><div style='color:white;font-size:16px'>Objet</div></th>
                    <th style='border-width:1px;border-style:solid;border-color:black;padding:6px;'><div style='color:white;font-size:16px'>Service</div></th>
					 <th style='border-width:1px;border-style:solid;border-color:black;padding:6px;'><div style='color:white;font-size:16px'>Date d'enregistrement</div></th>
                    <th style='border-width:1px;border-style:solid;border-color:black;padding:6px;'><div style='color:white;font-size:16px'>Destinateur du courrier</div></th>
					 <th style='border-width:1px;border-style:solid;border-color:black;padding:6px;'><div style='color:white;font-size:16px'>Observation</div></th>
					 <th style='border-width:1px;border-style:solid;border-color:black;padding:6px;'><div style='color:white;font-size:16px'>Commentaire</div></th>
					 <th style='border-width:1px;border-style:solid;border-color:black;padding:6px;'><div style='color:white;font-size:16px'>Alerte</div></th>

                </tr>  ";
	
	
while ($donnees = $sql->fetch()) {
 $num_lettre_ent=$donnees['num_lettre_ent']; 
 $users=$db->prepare("select *  from courrier_ent where num_lettre_ent='$num_lettre_ent' limit 0,1 ");
  $users->execute(array($num_lettre_ent));

$data=$users->fetch();
$exp_date=$data['date_alerte'];
$ob=$data['observation_ent'];

 $users=$db->prepare("select *  from courrier_sort where num_lettre_ent='$num_lettre_ent' limit 0,1 ");
  $users->execute(array($num_lettre_ent));

$donne=$users->fetch();
$traite_date=$donne['dat_traite'];



 //$exp_date='2018/12/19';
 date_default_timezone_set('Africa/Kinshasa');
 $today_date=date('Y/m/d');

 //$traite_date='2018/12/29';

 $exp=strtotime($exp_date);
 $td=strtotime($today_date);

 $trdat=strtotime($traite_date);


//echo $today_date;

//echo $today_date;
   //echo $today_date;

if ( $td> $exp  ) {

   

   $diff=$td-$exp;
   $x=abs(floor($diff/(60*60*24)));
   $meme="<b style='color:red'>$x jours de retard</b>" ;

}elseif ($td==$exp) {

   $diff=$td-$exp;
   $x=abs(floor($diff/(60*60*24)));
$meme="<b style='color:#00BFFF'>la date limite c'est deja atteint</b>" ;

}

else
       {
   $diff=$td-$exp;
   $x=abs(floor($diff/(60*60*24)));

$meme="<b style='color:orange'>il reste encore $x jours</b>" ;

       }
       if ($ob=="Déjà traité") {

   $kk="<b style='color:black;font-size:26px'>✓</b>" ;
   $diff=$trdat-$exp;
   $x=abs(floor($diff/(60*60*24)));

   $meme="<b style='color:green'> $x jours avant la date limite</b>" ;


  }
else{

        $kk="<b style='color:black;font-size:18px'>X</b>" ;


  }
  if ( $td> $exp and $ob=="Déjà traité"  ) {

   

   $kk="<b style='color:black;font-size:26px'>✓</b>" ;
   $diff=$trdat-$exp;
   $x=abs(floor($diff/(60*60*24)));

   $meme="<b style='color:green'> $x jours de retard</b>" ;


  }
    echo"
	
	<tbody >
                <tr valign='top' style='color:black;font-weight:bold;background-color:white;'>
                                     
               
					    <td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;padding:6px;'>  
                     <strong></strong> ".$donnees['num_lettre_ent']." <br />
					  </td>
					  	  <td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;padding:6px;'>  
					 <strong></strong> ".$donnees['libelle_type_document_ent']." <br />
					 </td>
					  <td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;padding:6px;'>  
					 <strong></strong> ".$donnees['objet_ent']." <br />
					 </td>
					<td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;padding:6px;'>  
                     <strong></strong> ".$donnees['libelle_service']." <br />  
					  </td>
					  	<td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;padding:6px;'>  
                     <strong></strong> ".$donnees['jour_ent']." ".'/'." ".$donnees['mois_ent']." ".'/'. " ".$donnees['annee_ent']."<br /> 
					  </td>
					 
                      <td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;padding:6px'> 
                     <strong></strong> </b> ".$donnees['nom_ent']." "."," ." ".$donnees['postnom_ent'].","." ".$donnees['prenom_ent'].","." ".$donnees['entreprise_ent'].","." ".$donnees['email_ent'].","." ".$donnees['telephone_ent']."  <br />  
                      </td>	
                	  <td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;padding:6px;'>  
					 <strong></strong> ".$donnees['observation_ent']." <br />
					 </td>
					   <td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;padding:6px;'>  
					 <strong></strong> ".$donnees['commentaire']." <br />
					 </td>
					   <td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;padding:6px;'>  
					 <strong></strong> ".$kk." ".$meme." <br />
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