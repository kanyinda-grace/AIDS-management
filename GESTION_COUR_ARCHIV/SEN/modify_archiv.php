<?php
 session_start();
 include ("connect.php");
$mat=$_SESSION['mat_agent'];


  	$requser = $db->prepare("SELECT * from courrier_archive where id_courrier_archive=:num ");
	
	$requser->bindValue(':num',$_GET['modify'],PDO::PARAM_INT);
	
$executeIsOk = $requser->execute();

$result = $requser->fetch();


  
 if(isset($_POST['submit'])){
 
   extract($_POST);
  	

	  
		$req = $db->prepare("UPDATE courrier_archive set numero=:numero,
	libelle_type_document_archive=:libelle_type_document_archive,fichier_document_archive=:fichier_document_archive,mat_agent=:mat_agent,
lien_fichier_document_archive=:lien_fichier_document_archive,jour_saisie_courrier_archive=:jour_saisie_courrier_archive,

mois_saisie_courrier_archive=:mois_saisie_courrier_archive,annee_saisie_courrier_archive=:annee_saisie_courrier_archive
WHERE id_courrier_archive=:num LIMIT 1");

$req->bindValue(':num',$_POST['modify'],PDO::PARAM_INT);
$req->bindValue(':numero',$_POST['numero'],PDO::PARAM_INT);
$req->bindValue(':libelle_type_document_archive',$_POST['libelle_type_document_archive'],PDO::PARAM_STR);
$req->bindValue(':fichier_document_archive',$_POST['file_name'],PDO::PARAM_STR);
$req->bindValue(':mat_agent',$_POST['mat_agents'],PDO::PARAM_STR);
$req->bindValue(':lien_fichier_document_archive',$_POST['file_desc'],PDO::PARAM_STR);
$req->bindValue(':jour_saisie_courrier_archive',$_POST['jour_saisie_courrier_archive'],PDO::PARAM_STR);
$req->bindValue(':mois_saisie_courrier_archive',$_POST['mois_saisie_courrier_archive'],PDO::PARAM_INT);
$req->bindValue(':annee_saisie_courrier_archive',$_POST['annee_saisie_courrier_archive'],PDO::PARAM_INT);


$executeIsOk = $req->execute();



  
if($executeIsOk){

echo '<p style="color:red">  <script>alert( "Modification effectuée avec succés ");window.location.href="Mise_Ajour_archive.php";</script> </p>';

    }	
	  
else{

echo 'echec';

    }	
  
  
  
  
  
  
  
  }  
	
?>


<!DOCTYPE html>
<html lang="fr">
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
	 <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       


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
                  <li><a href="gest_cour_archiv.php">Accueil</a></li>
                     <li><a href="tab_archiv_cour.php">Courriers archivés</a></li> 
                     <li><a href="recherche_courrier_archive_par_date.php">recherche des courriers archivés</a></li>   
					 <li><a href="Mise_Ajour_archive.php">Mise à jour courriers archivés</a></li>   
                     <li><a href="deconnection_agent_daf.php">Deconnecter</a></li>   
 


					 
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
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div align="center">
 <img src="img3/logo.png"  style="width:1200px;height:115px;width:50%;margin-top:-50px" alt="" />
 </div></br></br></br>
 
    <div class="container-fluid">
 
    </div>
      <div class="container h-100">
  <div class="row h-100 justify-content-center align-items-center" style="margin-top:-160px;" >
  
  
    <form action=""   method="post" enctype="multipart/form-data"   name="" > </br>
	     <ul class="justify-content-end">
  <li class="nav-item"> </br> </br> 

    <a class="nav-link "  href="deconnection_agent_arch.php"   style="color:red;font-family:verdana;font-size:16px;""></a>
  </li>

</ul>
 <p align="center" style="font-size:28px;color:white;"> </p>
         <?php 

         echo '<p align="center"    style="color:red;font-family:verdana; font-size:20px;"><b style="color:black">Bienvenu(e):</b> '.$_SESSION['nom_agent'].' '.$_SESSION['postnom_agent'].' '.$_SESSION['prenom_agent'].'</p>';


        $_SESSION['mat_agent'];?>
      <div align="center"> 
     <div  class="text-center" style="background-color:  #00BFFF;border-radius:6px;width:70%">
     <h2 style="color:white;" class="animated wobble">Modification des courriers archivés </h2>
     </div>
	  </div> </br>

          <div style ="margin-left:350px">
       <div class="col-7" >
	   
           <input type="hidden" name="modify"  class="form-control" value="<?= $result['id_courrier_archive']; ?>" id="formGroupExampleInput" placeholder="0" required style="border-color:silver;width:470px">
       </div> 
	   

       <div class="col-7" >
	            <label style="color:#65AAF0;font-size:20px;">Numéro de la Lettre </label></br>
           <input type="number" name="numero"  class="form-control" value="<?= $result['numero']; ?>" id="formGroupExampleInput" placeholder="0" required style="border-color:silver;width:200px">
       </div> 
	   
       <div class="col-7 my-1">
	   	            <label style="color:#65AAF0;font-size:20px;">Type du Document</label></br>

           <input type="text" name="libelle_type_document_archive" class="form-control" value="<?= $result['libelle_type_document_archive']; ?>" id="formGroupExampleInput" placeholder="type du document" required style="border-color:silver;width:470px">
      </div>
	      <div class="col-7 my-1">

           <input type="hidden" name="file_name" class="form-control" id="formGroupExampleInput" value="<?= $result['fichier_document_archive']; ?>" placeholder="prenom du correspondant" required style="border-color:silver;width:470px">
      </div>
	 

	    <div class="col-7 my-1">

           <input type="hidden" name="mat_agents" class="form-control" id="formGroupExampleInput" value="<?= $result['mat_agent']; ?>" placeholder="prenom du correspondant" required style="border-color:silver;width:470px">
      </div>
            <div class="col-7 my-1">

           <input type="hidden" name="file_desc" class="form-control"  id="formGroupExampleInput"   value="<?= $result['lien_fichier_document_archive']; ?>" placeholder="prenom du correspondant" required style="border-color:silver;width:470px">
      </div>
	 
	  <div class="col-7 my-1">
	   	            <label style="color:#65AAF0;font-size:20px;">Jour</label></br>

           <input type="text" name="jour_saisie_courrier_archive" class="form-control" id="formGroupExampleInput" value="<?= $result['jour_saisie_courrier_archive']; ?>" placeholder="prenom du correspondant" required style="border-color:silver;width:470px">
      </div>
	  <div class="col-7 my-1">
	   	            <label style="color:#65AAF0;font-size:20px;">Mois</label></br>

           <input type="text" name="mois_saisie_courrier_archive" class="form-control" id="formGroupExampleInput" value="<?= $result['mois_saisie_courrier_archive']; ?>" placeholder="prenom du correspondant" required style="border-color:silver;width:470px">
      </div>
	  <div class="col-7 my-1">
	   	            <label style="color:#65AAF0;font-size:20px;">Année</label></br>

           <input type="text" name="annee_saisie_courrier_archive" class="form-control" id="formGroupExampleInput" value="<?= $result['annee_saisie_courrier_archive']; ?>" placeholder="prenom du correspondant" required style="border-color:silver;width:470px">
      </div>
	      </div>

	  <div class="col-7  my-3" align="center"></br>
             <button type="submit" name="submit" class="btn btn-info btn-block" style="background-color: #00BFFF; color: #fff;border-radius: 6px;font-size:16px;width:40%;font-family:verdana"> Valider </button>
         </div>
	
      </div>
    </form>   
  </div>
</div>
 </div>
</div>

</html>
