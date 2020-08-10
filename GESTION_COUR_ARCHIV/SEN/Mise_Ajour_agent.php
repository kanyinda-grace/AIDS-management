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
                     <li><a href="tab_agent.php" style="color:white;font-family:sans-serif;font-size:18px" >Liste des agents</a></li>
                      <li><a href="Mise_Ajour_agent.php" style="color:white;font-family:sans-serif;font-size:18px">Mise à jour  </a></li>
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
     <h2 style="color:white;">Mise à jour des enregistrements des agents  </h2>
     </div>
</div>
</br>

<table border='1' cellspacing='1' width='100%' align='center' class="animated fadeInRight" style='border-width:1px;border-style:solid;border-color:black;width:90%;padding:30px;text-align:justify;' >

<tr   style='background-color:#0F9DE8;'  style='border-width:1px;border-style:solid;border-color:black;' >
           <th style='border-width:1px;border-style:solid;padding:6px;border-color:black;'><div style='color:white;font-size:16px'>N°</div></th>
					 <th style='border-width:1px;border-style:solid;padding:6px;border-color:black;'><div style='color:white;font-size:16px'>MATRICULE</div></th>
					 <th style='border-width:1px;border-style:solid;padding:6px;border-color:black;'><div style='color:white;font-size:16px'>DEPARTEMENT</div></th>
           <th style='border-width:1px;border-style:solid;padding:6px;border-color:black;'><div style='color:white;font-size:16px'>NOM</div></th>
           <th style='border-width:1px;border-style:solid;padding:6px;border-color:black;'><div style='color:white;font-size:16px'>POSTNOM</div></th>
           <th style='border-width:1px;border-style:solid;padding:6px;border-color:black;'><div style='color:white;font-size:16px'>PRENOM</div></th>
           <th style='border-width:1px;border-style:solid;padding:6px;border-color:black;'><div style='color:white;font-size:16px'>NOM D'UTILISATEUR</div></th>
					 <th style='border-width:1px;border-style:solid;padding:6px;border-color:black;'><div style='color:white;font-size:16px'>MOT DE PASSE</div></th>
                 <th style='border-width:1px;border-style:solid;padding:6px;border-color:black;'><div style='color:white;font-size:16px'>Action</div></th>

                </tr>  
	<?php
		$cmd=$db->prepare("SELECT * from agent");
		$cmd->execute();
		$donnees=$cmd->fetch();
		do{

	?>
	
		<tbody >
                 <tr valign='top' style='color:black;font-weight:bold;background-color:white;'>
                                     
           <td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;;padding:6px'>  
                     <strong></strong><?php echo $donnees['id'];?><br />
            </td>
					    <td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;;padding:6px'>  
                     <strong></strong><?php echo $donnees['mat_agent'];?><br />
					  </td>
					   <td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;;padding:6px'>  
                     <strong></strong><?php echo $donnees['code_departement'];?><br />
					  </td>
          
					  <td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;;padding:6px'>  
					 <strong></strong> <?php echo $donnees['nom_agent'];?> <br />
					 </td>
             <td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;;padding:6px'>  
           <strong></strong> <?php echo $donnees['postnom_agent'];?> <br />
           </td>
             <td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;;padding:6px'>  
           <strong></strong> <?php echo $donnees['prenom_agent'];?> <br />
           </td>
             <td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;;padding:6px'>  
           <strong></strong> <?php echo $donnees['uname_agent_daf'];?> <br />
           </td>
					<td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:16px;;padding:6px'>  
                     <strong></strong> <?php echo $donnees['upass_agent_daf'];?><br />  
					  </td>
		
				
              
				 <?php   
				 
				 $num= $donnees['id'];
				 $id= $donnees['id'];

				 //echo $num;
				 ?>
				      <td align='left' style='border-width:1px;border-style:solid;border-color:black;font-size:20px;'> 					  
					 
					 <?php  	echo "<a href='modify_agent.php?modify=$id'   style='font-size:24px'> <img src='img3/yy.jpg'  style='height:32px;width:55px;margin-top:12px;padding:10px'</a>";?>

					 <?php  	echo "<a href='suprime_agent.php?supcourentra=$num' onclick='return confirm(\"Etes vous sûr de vouloir supprimer...?\"); ' style='font-size:24px'> <img src='img3/det.png'  style='height:32px;width:55px;margin-top:12px;padding:10px;'</a>";?>
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
