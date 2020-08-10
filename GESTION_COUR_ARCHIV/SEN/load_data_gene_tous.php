

	
<?php
if($_POST['page'])
{
$page = $_POST['page'];
$cur_page = $page;
$page -= 1;
$per_page = 1000;
$previous_btn = true;
$next_btn = true;
$first_btn = true;
$last_btn = true;
$start = $page * $per_page;
include ('connect.php');

$reponse =$db->query( "SELECT courrier_ent.num_lettre_ent,service.code_service,service.libelle_service,courrier_sort.num_lettre_sort,
courrier_sort.jour_sort,courrier_sort.mois_sort,courrier_sort.annee_sort
,courrier_ent.objet_ent,courrier_ent.observation_ent, courrier_ent.code_sexe,courrier_ent.nom_ent,courrier_ent.postnom_ent,courrier_ent.prenom_ent,courrier_ent.entreprise_ent,courrier_ent.email_ent,
 courrier_ent.telephone_ent,courrier_ent.libelle_type_document_ent,courrier_ent.jour_ent,courrier_ent.mois_ent,courrier_ent.annee_ent,courrier_ent.libelle_type_document_ent,courrier_ent.commentaire
 from courrier_sort
 
 right join courrier_ent on courrier_sort.num_lettre_ent=courrier_ent.num_lettre_ent 
left JOIN service on courrier_ent.code_service=service.code_service 
left join agent on courrier_sort.mat_agent=agent.mat_agent

 ORDER BY courrier_sort.num_lettre_sort desc LIMIT $start, $per_page");

 

$msg = "";
while ($donnees = $reponse->fetch()) { 
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

    $msg .= "
	<!DOCTYPE html>
<html>
  <head>
	    <meta charset='utf-8'>

	<tbody >
                 <tr valign='top'>
         
					    <td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;'>  
                     <strong></strong> ".$donnees['num_lettre_ent']." <br />
					  </td>
                 <td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;'>  
                     <strong></strong> ".$donnees['num_lettre_sort']." <br />
            </td>            
        
             <td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;'>  
           <strong></strong> ".$donnees['libelle_type_document_ent']." <br />
           </td>
					  <td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;'>  
					 <strong></strong> ".$donnees['objet_ent']." <br />
					 </td>
					<td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;'>  
                     <strong></strong> ".$donnees['libelle_service']." <br />  
					  </td>
                <td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;'>  
                     <strong></strong> ".$donnees['jour_ent']." ".'/'." ".$donnees['mois_ent']." ".'/'. " ".$donnees['annee_ent']."<br /> 
            </td>
                   
					  	<td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;'>  
                     <strong></strong> ".$donnees['jour_sort']." ".'/'." ".$donnees['mois_sort']." ".'/'. " ".$donnees['annee_sort']."<br /> 
					  </td>

                      <td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;'> 
                     <strong></strong> </b> ".$donnees['nom_ent']." "."," ." ".$donnees['postnom_ent'].","." ".$donnees['prenom_ent'].","." ".$donnees['entreprise_ent'].","." ".$donnees['email_ent'].","." ".$donnees['telephone_ent']."  <br />  
                      </td>	
                    <td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;'> 					  
                     <div style='word-wrap:break-word;color:black;font-family:verdana' > ".$donnees['observation_ent']."</div> 
                 </td>
                          <td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;'>            
                     <div style='word-wrap:break-word;color:black;font-family:verdana' > ".$donnees['commentaire']."</div> 
                 </td>
                        
            <td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;'>            
                     <div style='word-wrap:break-word;color:black;font-family:verdana' >".$kk." ".$meme."</div> 
                 </td>
                   
                 </td>
                       
                </tr>        
            </tbody>
	
    </html>
    "
    ;

    


    
}
//$msg = "<div class='data'><table>" . $msg . "</table></div>"; // Content for Data
$msg = "

<div class='data' id='printablediv'  >
<div align='center' style='font-size:20px;font-weight:bold;color:red'>LISTE DE TOUS LES COURRIERS </div> 

<table border='0' cellspacing='1' width='100%' style='width:99%'align='center' class='table table-bordered animated bounceInRight' style='border-width:1px;border-style:solid;border-color:black;' >
            <thead  class=''  >
                <tr style='background-color:#0F9DE8;' style='border-width:1px;border-style:solid;border-color:black;'>
                <th style='border-width:1px;border-style:solid;border-color:black;'><div style='color:white;font-size:16px'>Numéro lettre entrante</div></th>
                <th style='border-width:1px;border-style:solid;border-color:black;'><div style='color:white;font-size:16px'>Numéro lettre sortante</div></th>
                <th style='border-width:1px;border-style:solid;border-color:black;'><div style='color:white;font-size:16px'>Type document</div></th>
                <th style='border-width:1px;border-style:solid;border-color:black;'><div style='color:white;font-size:16px'>Objet</div></th>
                <th style='border-width:1px;border-style:solid;border-color:black;'><div style='color:white;font-size:16px'>Service</div></th>
					      <th style='border-width:1px;border-style:solid;border-color:black;'><div style='color:white;font-size:16px'>La date de l'entrée du courrier......</div></th>
                <th style='border-width:1px;border-style:solid;border-color:black;'><div style='color:white;font-size:16px'>La date de sortie du courrier......</div></th>
                <th style='border-width:1px;border-style:solid;border-color:black;'><div style='color:white;font-size:16px'>Destinateur/Expediteur du courrier</div></th>
					      <th style='border-width:1px;border-style:solid;border-color:black;'><div style='color:white;font-size:16px'>Observation</div></th>
                <th style='border-width:1px;border-style:solid;border-color:black;'><div style='color:white;font-size:16px'>commentaire</div></th>
                <th style='border-width:1px;border-style:solid;border-color:black;'><div style='color:white;font-size:16px'>Alerte</div></th>

                </tr>  
            </thead>
    " . $msg . "
</table>
</div>";



$query_pag_num = "SELECT COUNT(*) AS count  FROM courrier_ent ";
$result2 =$db->query($query_pag_num);
$row =$result2->fetch();
$count = $row['count'];

$no_of_paginations = ceil($count / $per_page);

/* ---------------Calculating the starting and endign values for the loop----------------------------------- */
if ($cur_page >= 7) {
    $start_loop = $cur_page - 3;
    if ($no_of_paginations > $cur_page + 3)
        $end_loop = $cur_page + 3;
    else if ($cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 6) {
        $start_loop = $no_of_paginations - 6;
        $end_loop = $no_of_paginations;
    } else {
        $end_loop = $no_of_paginations;
    }
} else {
    $start_loop = 1;
    if ($no_of_paginations > 7)
        $end_loop = 7;
    else
        $end_loop = $no_of_paginations;
}
/* ----------------------------------------------------------------------------------------------------------- */
$msg .= "<div class='pagination'><ul align='left'>";

// FOR ENABLING THE FIRST BUTTON
if ($first_btn && $cur_page > 1) {
    $msg .= "<li p='1' class='active btn btn-sm'>First</li>";
} else if ($first_btn) {
    $msg .= "<li p='1' class='inactive btn btn-sm'>1°</li>";
}

// FOR ENABLING THE PREVIOUS BUTTON
if ($previous_btn && $cur_page > 1) {
    $pre = $cur_page - 1;
    $msg .= "<li p='$pre' class='active btn btn-sm'>Previous</li>";
} else if ($previous_btn) {
    $msg .= "<li class='inactive btn btn-sm'>Precedent</li>";
}
for ($i = $start_loop; $i <= $end_loop; $i++) {

    if ($cur_page == $i)
        $msg .= "<li p='$i' style='color:#fff;background-color:#006699;' class='active'>{$i}</li>";
    else
        $msg .= "<li p='$i' class='active'>{$i}</li>";
}

// TO ENABLE THE NEXT BUTTON
if ($next_btn && $cur_page < $no_of_paginations) {
    $nex = $cur_page + 1;
    $msg .= "<li p='$nex' class='active btn btn-sm'>Suivant</li>";
} else if ($next_btn) {
    $msg .= "<li class='inactive btn btn-sm'>Suivant</li>";
}

// TO ENABLE THE END BUTTON
if ($last_btn && $cur_page < $no_of_paginations) {
    $msg .= "<li p='$no_of_paginations' class='active btn btn-sm'>Dernier</li>";
} else if ($last_btn) {
    $msg .= "<li p='$no_of_paginations' class='inactive btn btn-sm'>Dernier</li>";
}

$goto = "<input type='text' class='goto' size='1' style='margin-top:50px;margin-left:-326px;'/><input type='button' style='margin-top:45px;margin-left:10px;height:28px;' id='go_btn' class='btn btn-primary' value='Go'/>";
$total_string = "<span class='total' a='$no_of_paginations' style='margin-top:45px;margin-left:3px;'>P <b>" . $cur_page . "</b> sur <b>$no_of_paginations</b></span>";
$msg = $msg . "</ul>" . $goto . $total_string . "</div>";  // Content for pagination
echo $msg;


}

