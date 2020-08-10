<?php session_start();?>
<?php 
include ('connect.php');
if(isset($_SESSION['uname_agent_sen']) ){
}else{
header('location:deconnection_agent_daf.php');  
}



?>



<!DOCTYPE html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

   <link href="css8/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css8/font-awesome.min.css">
	<link href="css8/animate.min.css" rel="stylesheet">
         
	<link href="css8/main.css" rel="stylesheet">
	 <link href="css8/responsive.css" rel="stylesheet">
	 <script type='text/javascript' src='js8/jquery-1.4.2.min.js'></script>
	 <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
	
		<link href="animate.css" rel="stylesheet">

<script language="javascript" type="text/javascript">
        function printDiv(divID) {
            //Get the HTML of div
            var divElements = document.getElementById(divID).innerHTML;
            //Get the HTML of whole page
            var oldPage = document.body.innerHTML;

            //Reset the page's HTML with div's HTML only
            document.body.innerHTML = 
              "<html><head><title></title></head><body>" + 
              divElements + "</body>";

            //Print Page
            window.print();

            //Restore orignal HTML
            document.body.innerHTML = oldPage;

          
        }
		</script>

   <title >GESTION ET ARCHIVAGE DES COURRIERS</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

<header id="header">
        <nav class="navbar navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                      <span style="color:white"> Menu</span>
						  <a class="navbar-brand" style="color:white" href=""></a>
                    </button>
                  
                </div>
				
                <div class="collapse navbar-collapse navbar-left">
                    <ul class="nav navbar-nav">
               <li><a href="/PNMLS/" style="color:white;font-family:sans-serif;font-size:18px">Accueil</a></li>
                     <li><a href="tab_courr_sort.php" style="color:white;font-family:sans-serif;font-size:18px" >Courriers sortants</a></li>
                      <li><a href="recherche_courrier_par_date.php"style="color:white;font-family:sans-serif;font-size:18px">Recherche courriers sortants </a></li>
                      <li><a href="Mise_Ajour.php" style="color:white;font-family:sans-serif;font-size:18px">Mise à jour  </a></li>
                      <li><a href="rapport.php" style="color:white;font-family:sans-serif;font-size:18px">Rapports</a></li> 
                      <li><a href="deconnection_agent_daf.php"  style="color:white;font-family:sans-serif;font-size:18px">Deconnecter</a></li> 

                

					 
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
		
    </header><!--/header--></br></br></br></br></br></br>

    <style>
    html, body {
      height: 100%;
}
    body {
      background-image: url(img3/blancolor.PNG);
      background-size: auto;
      background-position: center;
   
}
    @font-face {
      font-family: workSans;
      src: url(font3/WorkSans-ExtraLight.ttf);
    }
    ul li a {
      font-size: 17px;
      font-family: "workSans";
      color: rgb(255, 255, 255);
      font-weight: bold;  
    }
    
    ul li a:hover {
      color: #443020;
    }
    
    .form-row button { 
      font-size: 17px;  
      font-family: "workSans";
      font-weight: bold;
    }
    
    h1, p, input {
      font-family: 'workSans';
    }
    input {
      font-weight: bold;
    } 
  </style>



        
  </head>
<body></br></br></br>
<div align="left">
 <img src="img3/logo.png"  style="width:40px;height:80px;width:20%;margin-top:-50px;" alt="" />
 </div>

 <p align="center" style="font-size:28px;color:white;"> </p>
         <?php 

         echo '<p align="center"    style="color:red;font-family:verdana; font-size:25px;">'.$_SESSION['nom_agent_sen'].' '.$_SESSION['postnom_agent_sen'].' '.$_SESSION['prenom_agent_sen'].'</p>';


        $_SESSION['mat_agent_sen'];?>
          <div  align="center">

     <div  class="text-center" style="background-color: #00BFFF;border-radius:6px;width:60%" align="center">
     <h2 style="color:white;">Mise à jour des enregistrements des courriers sortants </h2>
     </div>
</div>
</br>


<table border='1' cellspacing='1' width='100%' align='center' class="animated fadeInRight" style='border-width:1px;border-style:solid;border-color:black;width:90%;padding:30px;text-align:justify;' >

<tr   style='background-color:#0F9DE8;'  style='border-width:1px;border-style:solid;border-color:black;' >
           <th style='border-width:1px;border-style:solid;padding:6px;border-color:white;'><div style='color:white;font-size:14px'>N°</div></th>
           <th style='border-width:1px;border-style:solid;padding:6px;border-color:white;'><div style='color:white;font-size:14px'>JOUR</div></th>
           <th style='border-width:1px;border-style:solid;padding:6px;border-color:white;'><div style='color:white;font-size:14px'>MOIS</div></th>
           <th style='border-width:1px;border-style:solid;padding:6px;border-color:white;'><div style='color:white;font-size:14px'>ANNEE</div></th>
           <th style='border-width:1px;border-style:solid;padding:6px;border-color:white;'><div style='color:white;font-size:14px'>NOM</div></th>
           <th style='border-width:1px;border-style:solid;padding:6px;border-color:white;'><div style='color:white;font-size:14px'>POSTNOM</div></th>
           <th style='border-width:1px;border-style:solid;padding:6px;border-color:white;'><div style='color:white;font-size:14px'>PRENOM</div></th>
           <th style='border-width:1px;border-style:solid;padding:6px;border-color:white;'><div style='color:white;font-size:14px'>SEXE</div></th>
           <th style='border-width:1px;border-style:solid;padding:6px;border-color:white;'><div style='color:white;font-size:14px'>ENTREPRISE</div></th>
           <th style='border-width:1px;border-style:solid;padding:6px;border-color:white;'><div style='color:white;font-size:14px'>EMAIL</div></th>
           <th style='border-width:1px;border-style:solid;padding:6px;border-color:white;'><div style='color:white;font-size:14px'>TELEPHONE</div></th>
           <th style='border-width:1px;border-style:solid;padding:6px;border-color:white;'><div style='color:white;font-size:14px'>OBJET</div></th>
           <th style='border-width:1px;border-style:solid;padding:6px;border-color:white;'><div style='color:white;font-size:14px'>SERVICE</div></th>
           <th style='border-width:1px;border-style:solid;padding:6px;border-color:white;'><div style='color:white;font-size:14px'>COMMENTAIRE</div></th>
           <th style='border-width:1px;border-style:solid;padding:6px;border-color:white;'><div style='color:white;font-size:14px'>OBSERVATION</div></th>
           <th style='border-width:1px;border-style:solid;padding:6px;border-color:white;'><div style='color:white;font-size:14px'>ACTION</div></th>


                </tr>  
  <?php
    $cmd=$db->prepare("SELECT courrier_sort.num_lettre_sort,service.code_service,
 agent.code_departement,
 courrier_sort.objet_sort,courrier_sort.jour_sort,courrier_sort.mois_sort,courrier_sort.annee_sort,courrier_sort.observation_sort ,
 courrier_sort.code_sexe,courrier_sort.nom_sort,courrier_sort.postnom_sort,courrier_sort.prenom_sort,courrier_sort.entreprise_sort,
 courrier_sort.email_sort,
 courrier_sort.telephone_sort,courrier_sort.commentaire_sort
 from courrier_sort

join service on courrier_sort.code_service=service.code_service 

join agent on courrier_sort.mat_agent=agent.mat_agent

where agent.code_departement='SEN' 
 ORDER BY courrier_sort.num_lettre_sort");
    $cmd->execute();
    $donnees=$cmd->fetch();
    do{

  ?>
  
    <tbody >
                 <tr valign='top' style='color:black;font-weight:bold;background-color:white;' >
                                     
         
              <td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;;padding:6px'>  
                     <strong></strong><?php echo $donnees['num_lettre_sort'];?><br />
            </td>

      
             <td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;;padding:6px'>  
           <strong></strong> <?php echo $donnees['jour_sort'];?> <br />
           </td>
             <td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;;padding:6px'>  
           <strong></strong> <?php echo $donnees['mois_sort'];?> <br />
           </td>
             <td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;;padding:6px'>  
           <strong></strong> <?php echo $donnees['annee_sort'];?> <br />
           </td>
           <td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;;padding:6px'>  
                     <strong></strong> <?php echo $donnees['nom_sort'];?><br />  
            </td>
            <td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;;padding:6px'>  
                     <strong></strong> <?php echo $donnees['postnom_sort'];?><br />  
            </td>
            <td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;;padding:6px'>  
                     <strong></strong> <?php echo $donnees['prenom_sort'];?><br />  
            </td>
            <td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;;padding:6px'>  
                     <strong></strong> <?php echo $donnees['code_sexe'];?><br />  
            </td>
             <td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;;padding:6px'>  
                     <strong></strong> <?php echo $donnees['entreprise_sort'];?><br />  
            </td>
             <td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;;padding:6px'>  
                     <strong></strong> <?php echo $donnees['email_sort'];?><br />  
            </td>
             <td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;;padding:6px'>  
                     <strong></strong> <?php echo $donnees['telephone_sort'];?><br />  
            </td>
                 <td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;;padding:6px'>  
           <strong></strong> <?php echo $donnees['objet_sort'];?> <br />
           </td>
          <td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;;padding:6px'>  
                     <strong></strong> <?php echo $donnees['code_service'];?><br />  
            </td>
        
            
                    <td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;;padding:6px'>  
                     <strong></strong> <?php echo $donnees['observation_sort'];?><br />  
            </td>
                     <td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;;padding:6px'>  
                     <strong></strong> <?php echo $donnees['commentaire_sort'];?><br />  
            </td>
         
         <?php   
         
         $num= $donnees['num_lettre_sort'];
         $id= $donnees['num_lettre_sort'];

         //echo $num;
         ?>
                  <td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:20px;'>                 
                
                <?php   echo "<a href='modify.php?modify=$id'   style='font-size:24px'> <img src='img3/yy.jpg'  style='height:32px;width:55px;margin-top:12px;padding:10px'</a>";?>

                <?php   echo "<a href='suprime_courrier_sortrant.php?supcourentra=$num' onclick='return confirm(\"Etes vous sûr de vouloir supprimer...?\"); ' style='font-size:24px'> <img src='img3/det.png'  style='height:32px;width:55px;margin-top:12px;padding:10px;'</a>";?>
</td>

                 
                 

                          
                </tr>        
            </tbody>

<?php
   }while ($donnees=$cmd->fetch());
?>
</table>

      </div>
    </form>   
  </div>
</div>
 </div>
</div>


  </body>


    <script src="Menu/assets/plugins/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP CORE SCRIPT   -->
    <script src="Menu/assets/plugins/bootstrap.min.js"></script>  
    <!-- CUSTOM SCRIPTS -->
    <script src="Menu/assets/js/custom.js"></script>
</html>
