

	
<?php
if($_POST['page'])
{
$page = $_POST['page'];
$cur_page = $page;
$page -= 1;
$per_page = 1000000000;
$previous_btn = true;
$next_btn = true;
$first_btn = true;
$last_btn = true;
$start = $page * $per_page;
include ('connect.php');

$reponse =$db->query( "SELECT courrier.num_courrier,courrier.num_lettre,service.code_service,service.libelle_service,
 agent.code_departement,type_courrier.libelle_type_courrier,
 courrier.objet,courrier.jour,courrier.mois,courrier.annee,courrier.observation,
 courrier.code_sexe,courrier.nom,courrier.postnom,courrier.prenom,courrier.entreprise,courrier.email,
 courrier.telephone,courrier.libelle_type_document
 from courrier

join service on courrier.code_service=service.code_service 

join agent on courrier.mat_agent=agent.mat_agent

join type_courrier on courrier.id_type_courrier=type_courrier.id_type_courrier
where  service.code_service='INFO' LIMIT $start, $per_page");



$msg = "";
while ($donnees = $reponse->fetch()) {  

    $msg .= "
	<!DOCTYPE html>
<html>
  <head>
	    <meta charset='utf-8'>

	<tbody >
                 <tr valign='top'   style='color:white;font-weight:bold;background-color:#00BFFF;'>
                                     
                 <td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;'>                  
                     <strong></strong> ".$donnees['num_courrier']." <br />  
					   </td>
					    <td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;'>  
                     <strong></strong> ".$donnees['num_lettre']." <br />
					  </td>
					  <td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;'>  
					 <strong></strong> ".$donnees['libelle_service']." <br />
					 </td>
	
					  	<td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;'>  
                     <strong></strong> ".$donnees['libelle_type_courrier']." <br />  
					  </td>
					  	<td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;'>  
                     <strong></strong> ".$donnees['objet']." <br />  
					  </td>
			
			  	<td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;margin-left:100px'>  
                     <strong></strong> ".$donnees['jour']." ".'/'." ".$donnees['mois']." ".'/'. " ".$donnees['annee']."<br /> 
					  </td>
					  <td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;'> 
                     <strong></strong> </b> ".$donnees['nom']." "."," ." ".$donnees['postnom'].","." ".$donnees['prenom'].","." ".$donnees['entreprise'].","." ".$donnees['email'].","." ".$donnees['telephone']."  <br />  
                      </td>
					  	<td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;'>  
                     <strong></strong> ".$donnees['observation']." <br />  
					  </td>
                   

                </tr>        
            </tbody>
	
    </html>
    ";
  
}
//$msg = "<div class='data'><table>" . $msg . "</table></div>"; // Content for Data
$msg = "
<div class='data' id='printablediv'  >
<div align='center' style='font-size:18px;font-weight:bold;color:#00BFFF;'>LISTE DE TOUS LES COURRIERS DE L'INFORMATIQUE</div> 

<table border='0' cellspacing='1' width='100%' align='center' class='table table-bordered' style='border-width:1px;border-style:solid;border-color:black;width:70%' >
            <thead  class=''  >
                <tr style='background-color:red;' style='border-width:1px;border-style:solid;border-color:black;'>
                    <th style='border-width:1px;border-style:solid;border-color:black;'><div style='color:yellow;font-size:17px'>N°</div></th>
                    <th style='border-width:1px;border-style:solid;border-color:black;'><div style='color:yellow;font-size:17px'>NUMERO LETTRE </div></th>
                    <th style='border-width:1px;border-style:solid;border-color:black;'><div style='color:yellow;font-size:17px'>SERVICE</div></th>
					<th style='border-width:1px;border-style:solid;border-color:black;'><div style='color:yellow;font-size:17px'>TYPE COURRIER</div></th>
                    <th style='border-width:1px;border-style:solid;border-color:black;'><div style='color:yellow;font-size:17px'>OBJET</div></th>
					 <th style='border-width:1px;border-style:solid;border-color:black;'><div style='color:yellow;font-size:17px'>DATE D'ENREGISTREMENT</div></th>
					<th style='border-width:1px;border-style:solid;border-color:black;'><div style='color:yellow;font-size:17px'>DESTINATEUR</div></th>
				    <th style='border-width:1px;border-style:solid;border-color:black;'><div style='color:yellow;font-size:17px'>OBSERVATION </div></th>

                </tr>  
            </thead>
    " . $msg . "
</table>
</div>";


  $users=$db->prepare("select nombre from courrier ");
$data=$users->fetch();
$ttgg=$data['nombre'];
echo $ttgg ;


$query_pag_num = "SELECT COUNT(*) AS count  FROM courrier ";
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

