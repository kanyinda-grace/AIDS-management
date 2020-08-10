

	
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

$reponse =$db->query( "SELECT courrier_sort.num_lettre_sort,service.code_service,service.libelle_service,
 agent.code_departement,courrier_sort.objet_sort,courrier_sort.jour_sort,courrier_sort.mois_sort,courrier_sort.annee_sort,courrier_sort.observation_sort,courrier_sort.code_sexe,courrier_sort.nom_sort,courrier_sort.postnom_sort,courrier_sort.prenom_sort,courrier_sort.entreprise_sort,courrier_sort.email_sort,
 courrier_sort.telephone_sort,courrier_sort.commentaire_sort
 from courrier_sort

join service on courrier_sort.code_service=service.code_service 

join agent on courrier_sort.mat_agent=agent.mat_agent

 ORDER BY courrier_sort.num_lettre_sort LIMIT $start, $per_page");

 

$msg = "";
while ($donnees = $reponse->fetch()) { 

    $msg .= "
	<!DOCTYPE html>
<html>
  <head>
	    <meta charset='utf-8'>

	<tbody >
         
                 <tr valign='top' class='po'>
                                     
        
              <td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;'>  
                     <strong></strong> ".$donnees['num_lettre_sort']." <br />
            </td>
    <td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;'>  
                     <strong></strong> ".$donnees['jour_sort']." ".'/'." ".$donnees['mois_sort']." ".'/'. " ".$donnees['annee_sort']."<br /> 
            </td>

                      <td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;'> 
                     <strong></strong> </b> ".$donnees['nom_sort']." "."," ." ".$donnees['postnom_sort'].","." ".$donnees['prenom_sort'].","." ".$donnees['entreprise_sort'].","." ".$donnees['email_sort'].","." ".$donnees['telephone_sort']."  <br />  
                      </td> 
  
            <td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;'>  
           <strong></strong> ".$donnees['objet_sort']." <br />
           </td>
          <td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;'>  
                     <strong></strong> ".$donnees['libelle_service']." <br />  
            </td>
          
        <td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;'>            
                     <div style='word-wrap:break-word;color:black;font-family:verdana' > ".$donnees['commentaire_sort']."</div> 
                 </td>
                   

                    <td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;'>            
                     <div style='word-wrap:break-word;color:black;font-family:verdana' > ".$donnees['observation_sort']."</div> 
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
<div align='center' style='font-size:20px;font-weight:bold;color:red'>LISTE DES COURRIERS SORTANTS</div> 

<table border='0' cellspacing='1' width='100%' style='width:99%'align='center' class='table table-bordered animated bounceInRight' style='border-width:1px;border-style:solid;border-color:black;' >
            <thead  class=''  >
          <tr style='background-color:#0F9DE8;' style='border-width:1px;border-style:solid;border-color:black;'>
                <th style='border-width:1px;border-style:solid;border-color:black;'><div style='color:white;font-size:16px'>N°</div></th>
                <th style='border-width:1px;border-style:solid;border-color:black;'><div style='color:white;font-size:16px'>DATE D'ENREGISTREMENT</div></th>
                <th style='border-width:1px;border-style:solid;border-color:black;'><div style='color:white;font-size:16px'>EXPEDITEUR DU COURRIER</div></th>

              <th style='border-width:1px;border-style:solid;border-color:black;'><div style='color:white;font-size:16px'>OBJET</div></th>
                <th style='border-width:1px;border-style:solid;border-color:black;'><div style='color:white;font-size:16px'>SERVICE</div></th>
                  <th style='border-width:1px;border-style:solid;border-color:black;'><div style='color:white;font-size:16px'>COMMENTAIRE</div></th>

                <th style='border-width:1px;border-style:solid;border-color:black;'><div style='color:white;font-size:16px'>OBSERVATION</div></th>

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

