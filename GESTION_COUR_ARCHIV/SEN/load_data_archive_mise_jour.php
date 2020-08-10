

	
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

				 

			
$reponse =$db->query( "SELECT courrier_archive.id_courrier_archive,courrier_archive.numero,courrier_archive.libelle_type_document_archive,courrier_archive.fichier_document_archive,courrier_archive.mat_agent,courrier_archive.lien_fichier_document_archive,courrier_archive.jour_saisie_courrier_archive,courrier_archive.mois_saisie_courrier_archive,
courrier_archive.annee_saisie_courrier_archive

 from courrier_archive

join agent on courrier_archive.mat_agent=agent.mat_agent 

where agent.code_departement='SEN'
 ORDER BY courrier_archive.id_courrier_archive  ASC  LIMIT $start, $per_page");

$msg = "";
while ($donnees = $reponse->fetch()) {  
				 $id= $donnees['id_courrier_archive'];
				 $num= $donnees['id_courrier_archive'];

    $msg .= "
	<!DOCTYPE html>
<html>
  <head>
	    <meta charset='utf-8'>

	<tbody >
                 <tr valign='top' style='color:black;font-weight:bold;background-color:white;'>
                                     
                 <td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:20px;'>                  
                     <strong></strong> ".$donnees['id_courrier_archive']." <br />  
					   </td>
					    <td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:20px;'>  
                     <strong></strong> ".$donnees['numero']." <br />
					  </td>
					  <td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:20px;'>  
					 <strong></strong> ".$donnees['libelle_type_document_archive']." <br />
				
					      <td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:20px;'>  
                     <strong></strong> ".$donnees['jour_saisie_courrier_archive']." <br />
					  </td>
					  
					      <td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:20px;'>  
                     <strong></strong> ".$donnees['mois_saisie_courrier_archive']." <br />
					  </td>
					       <td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:20px;'>  
                     <strong></strong> ".$donnees['annee_saisie_courrier_archive']." <br />
					  </td>
					  
					  
					  
				           <td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:20px;'>  
                     <strong></strong><a href='".$donnees['lien_fichier_document_archive']."' alt='Download' title='Download' class='btn btn-primary' target='_blank' style='font-size:20px;background-color:#F7230C;font-weight:bold;' >Voir Fichier du Courrier</a>                                        
  <br />
					  </td>
								  
			
				           <td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:20px;'>  
                    <a href='modify_archiv.php?modify=$id' onclick='return confirm(\'Etes vous sûr de vouloir modifier...?\');   style='font-size:24px'> <img src='img3/yy.jpg'  style='height:30px;width:20px;margin-top:12px;'/></a>&nbsp;&nbsp;&nbsp;
                    <a href='suprime_courrier_archive.php?supcourentra=$num' onclick='return confirm(\'Etes vous sûr de vouloir supprimer...?\');   style='font-size:24px'><img src='img3/det.png'  style='height:30px;width:20px;margin-top:12px;'/></a> &nbsp;&nbsp;&nbsp;   
                    <a href='modify_file_archiv.php?modify=$id' onclick='return confirm(\'Etes vous sûr de vouloir modifier...?\');   style='font-size:24px'> <img src='img3/yy.jpg'  class='btn btn-primary'  style='height:30px;width:20px;margin-top:12px;'/></a>&nbsp;&nbsp;&nbsp;
                         

  <br />
					  </td>
				
			
                </tr>        
            </tbody>
	
    </html>

    ";				 

				 //echo $num;
				 
}
//$msg = "<div class='data'><table>" . $msg . "</table></div>"; // Content for Data
$msg = "
<div class='data'   >
<div align='center' style='font-size:20px;font-weight:bold;color:red;'>Mise à jour des enregistrements des courriers archivés </div> 

<table border='0' cellspacing='1' width='100%' align='center' class='table table-bordered animated jackInTheBox' style='border-width:1px;border-style:solid;border-color:black;width:80%' >
            <thead  class=''  >
                <tr style='background-color:#00BFFF;' style='border-width:1px;border-style:solid;border-color:black;'>
                    <th style='border-width:1px;border-style:solid;border-color:black;'><div style='color:white;font-size:20px'>N°</div></th>
                    <th style='border-width:1px;border-style:solid;border-color:black;'><div style='color:white;font-size:20px'>Numéro de la lettre</div></th>
					<th style='border-width:1px;border-style:solid;border-color:black;'><div style='color:white;font-size:20px'>Type du document archivé</div></th>
					<th style='border-width:1px;border-style:solid;border-color:black;'><div style='color:white;font-size:20px'>Jour </div></th>
					<th style='border-width:1px;border-style:solid;border-color:black;'><div style='color:white;font-size:20px'>Mois </div></th>
					<th style='border-width:1px;border-style:solid;border-color:black;'><div style='color:white;font-size:20px'>Annee </div></th>
                    <th style='border-width:1px;border-style:solid;border-color:black;'><div style='color:white;font-size:20px'>Fichier du courrier archivé</div></th>
					<th style='border-width:1px;border-style:solid;border-color:black;'><div style='color:white;font-size:20px'>Action</div></th>

					
                </tr>  
            </thead>
    " . $msg . "
</table>
</div>";



$query_pag_num = "SELECT COUNT(*) AS count  FROM courrier_archive ";
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

