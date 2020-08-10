<?php
 session_start();
 include ("connect.php");
$mat=$_SESSION['mat_agent_sen'];


  	$requser = $db->prepare("SELECT * from agent where id=:num ");
	
	$requser->bindValue(':num',$_GET['modify'],PDO::PARAM_INT);
	
$executeIsOk = $requser->execute();

$result = $requser->fetch();


  
 if(isset($_POST['submit'])){
 
   extract($_POST);
  		
		$req = $db->prepare("UPDATE agent set 
mat_agent =:mat_agent ,code_departement =:code_departement ,nom_agent =:nom_agent,
postnom_agent =:postnom_agent ,prenom_agent =:prenom_agent ,uname_agent_daf =:uname_agent_daf ,upass_agent_daf =:upass_agent_daf  WHERE id=:num LIMIT 1");
 
$req->bindValue(':num',$_POST['modify'],PDO::PARAM_INT);
$req->bindValue(':mat_agent',$_POST['mat_agent'],PDO::PARAM_STR);
$req->bindValue(':code_departement',$_POST['code_departement'],PDO::PARAM_STR);
$req->bindValue(':nom_agent',$_POST['nom_agent'],PDO::PARAM_INT);
$req->bindValue(':postnom_agent',$_POST['postnom_agent'],PDO::PARAM_INT);
$req->bindValue(':prenom_agent',$_POST['prenom_agent'],PDO::PARAM_INT);
$req->bindValue(':uname_agent_daf',$_POST['uname_agent_daf'],PDO::PARAM_STR);
$req->bindValue(':upass_agent_daf',$_POST['upass_agent_daf'],PDO::PARAM_STR);



$executeIsOk = $req->execute();


  
if($executeIsOk){

echo '<p style="color:red">  <script>alert( "Modification effectuée avec succés ");window.location.href="Mise_Ajour_agent.php";</script> </p>';

    }	
	  
else{

echo 'echec';

    }	
  
  
  
  
  
  
  
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
   <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
  <link href="animate.css" rel="stylesheet">


   <title >GESTION ET ARCHIVAGE DES COURRIERS</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

    <link rel = "stylesheet" type = "text/css" href = "cssp/bootstrap.css" />
    <link rel = "stylesheet" type = "text/css" href = "cssp/jquery.dataTables.css" />
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
                    <ul class="nav navbar-nav" >
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
<body>
  <p align="center" style="font-size:28px;color:white;"> </p>
         <?php 

         echo '<p align="right"    style="color:red;font-family:verdana; font-size:17px;"><b style="color:black">Bienvenu(e):</b> '.$_SESSION['nom_agent_sen'].' '.$_SESSION['postnom_agent_sen'].' '.$_SESSION['prenom_agent_sen'].'</p>';

   
        $_SESSION['mat_agent_sen'];?>
        <div align="center">
     <div  class="text-center animated  bounceInDown"  style="background-color: #00BFFF;border-radius:6px;margin-top:-30px;width:85%">
     <h1 style="color:white;font-size:25px;color:white;font-family:sans-serif;">MODIFICATION DES AGENTS  </h1>
     </div></br></br>
     </div>

     <div style="margin-top:-120px">

<div style="margin-left:550px;margin-top:69px">
              <form method = "POST" action = "" >
                       
                                           <div class = "form-group"  style="">
                  <label style="color:#00BFFF;font-size:20px;">Nom de l'agent:</label>

                         <input type="text" value="<?= $result['nom_agent']; ?>"  name="nom_agent" style="color:black;background-color:white;border-color:silver;width:230px;" class = "form-control" required   />

      
                </div>
                                   <input type="hidden" value="<?= $result['id']; ?>"  name="modify" style="color:black;background-color:white;border-color:silver;width:230px;" class = "form-control" required   />

                                        <input type="hidden" value="<?= $result['code_departement']; ?>"  name="code_departement" style="color:black;background-color:white;border-color:silver;width:230px;" class = "form-control" required   />
                                     <input type="hidden" value="<?= $result['mat_agent']; ?>"  name="mat_agent" style="color:black;background-color:white;border-color:silver;width:230px;" class = "form-control" required   />

                       <div class = "form-group">
                  <label style="color:#00BFFF;font-size:20px;">Postnom de l'agent:</label>

              <input type="text"  name="postnom_agent" value="<?= $result['postnom_agent']; ?>" style="color:black;background-color:white;border-color:silver;width:230px" class = "form-control"  required/>

                </div>
                         <div class = "form-group" style="">
                  <label style="color:#00BFFF;font-size:20px;">Prenom de l'agent:</label>

            <input type="text"   name="prenom_agent" value="<?= $result['prenom_agent']; ?>" style="color:black;background-color:white;border-color:silver;width:230px" class = "form-control" required / >

                </div>
                                         <div class = "form-group" style="">
                  <label style="color:#00BFFF;font-size:20px;">Nom d'utilisateur:</label>

           <input type="text" name="uname_agent_daf" value="<?= $result['uname_agent_daf']; ?>" style="color:black;background-color:white;border-color:silver;width:230px" class = "form-control" required/ >



                </div>
                       <div class = "form-group"  style="">
                  <label style="color:#00BFFF;font-size:20px;">Mot de passe:</label>

              <input type="text"  name="upass_agent_daf" value="<?= $result['upass_agent_daf']; ?>" style="color:black;background-color:white;border-color:silver;width:230px" class = "form-control" required / >
 
                </div>
                          
                      </div>
</div>
                                            

                <div class = "form-group" align="center">
                  <button name = "submit" style="background-color: #00BFFF; color: #fff;border-radius: 6px;font-size:20px;width:17.3%;font-family:verdana;height:40px"><span class = "glyphicon glyphicon-save"></span> Valider</button>
              </form>   
          </div>
                    </div

  </body>


    <script src="Menu/assets/plugins/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP CORE SCRIPT   -->
    <script src="Menu/assets/plugins/bootstrap.min.js"></script>  
    <!-- CUSTOM SCRIPTS -->
    <script src="Menu/assets/js/custom.js"></script>
</html>
