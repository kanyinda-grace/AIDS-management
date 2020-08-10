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

                    <ul class="nav navbar-nav"  >
                     <li><a href="/PNMLS/" style="color:white;font-family:sans-serif;font-size:18px">Accueil</a></li>
                     <li><a href="tab_agent.php" style="color:white;font-family:sans-serif;font-size:18px" >Liste des agents</a></li>
                      <li><a href="Mise_Ajour_agent.php" style="color:white;font-family:sans-serif;font-size:18px">Mise à jour  </a></li>
                      <li><a href="deconnection_agent_daf.php"  style="color:white;font-family:sans-serif;font-size:18px">Deconnecter</a></li>  




					 
                    </ul>
					    						

                </div>
	
            </div><!--/.container-->
        </nav><!--/nav-->

    </header><!--/header--></br></br>

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



        
  </head></br></br>
<body>
  <p align="center" style="font-size:28px;color:white;"> </p>
         <?php 

         echo '<p align="right"    style="color:red;font-family:verdana; font-size:17px;"><b style="color:black">Bienvenu(e):</b> '.$_SESSION['nom_agent_sen'].' '.$_SESSION['postnom_agent_sen'].' '.$_SESSION['prenom_agent_sen'].'</p>';

   
        $_SESSION['mat_agent_sen'];?>
        <div align="center">
     <div  class="text-center animated  bounceInDown"  style="background-color: #00BFFF;border-radius:6px;margin-top:-30px;width:85%">
     <h1 style="color:white;font-size:25px;color:white;font-family:sans-serif;">ENREGISTREMENT DES AGENTS  </h1>
     </div></br>
     </div>

     <div style="margin-top:-80px">

<div style="margin-left:550px;margin-top:70px">
              <form method = "POST" action = "" >
                       
                                           <div class = "form-group"  style="">
                  <label style="color:#00BFFF;font-size:20px;">Nom de l'agent:</label>

                         <input type="text"  name="nom_agent" style="color:black;background-color:white;border-color:silver;width:230px;" class = "form-control" required   />

      
                </div>
          
     
                       <div class = "form-group">
                  <label style="color:#00BFFF;font-size:20px;">Postnom de l'agent:</label>

              <input type="text"  name="postnom_agent" style="color:black;background-color:white;border-color:silver;width:230px" class = "form-control"  required/>

                </div>
                         <div class = "form-group" style="">
                  <label style="color:#00BFFF;font-size:20px;">Prenom de l'agent:</label>

            <input type="text"   name="prenom_agent" style="color:black;background-color:white;border-color:silver;width:230px" class = "form-control" required / >

                </div>
                                         <div class = "form-group" style="">
                  <label style="color:#00BFFF;font-size:20px;">Nom d'utilisateur:</label>

           <input type="text" name="uname_agent_daf" style="color:black;background-color:white;border-color:silver;width:230px" class = "form-control" required/ >



                </div>
                       <div class = "form-group"  style="">
                  <label style="color:#00BFFF;font-size:20px;">Mot de passe:</label>

              <input type="text"  name="upass_agent_daf" style="color:black;background-color:white;border-color:silver;width:230px" class = "form-control" required / >
 
                </div>
                          
                      </div>
</div>
                                            

                <div class = "form-group" align="center">
                  <button name = "Upload" style="background-color: #00BFFF; color: #fff;border-radius: 6px;font-size:20px;width:16%;font-family:verdana;height:40px;margin-left:-140px"><span class = "glyphicon glyphicon-save"></span> Enregistrer</button>
              </form>   
          </div>
                    </div>



<?php
if(isset($_POST['Upload'])){

extract($_POST);

$mat_agent="123".rand(5,4);

$code_departement ="SEN";

$nom_agent=htmlspecialchars( $_POST['nom_agent']);
$postnom_agent =htmlspecialchars( $_POST['postnom_agent']);
$prenom_agent=htmlspecialchars( $_POST['prenom_agent']);



$req=$db->prepare('INSERT INTO agent(mat_agent,code_departement,nom_agent,postnom_agent,prenom_agent,uname_agent_daf,upass_agent_daf)VALUES(?,?,?,?,?,?,?)')or die("errororres");
        $req->execute(array($mat_agent,$code_departement,$nom_agent ,$postnom_agent,$prenom_agent,$uname_agent_daf,$upass_agent_daf) )or die("error");
      echo '<p style="color:red">  <script>alert( "Agent bien enregistré");window.location.href="";</script> </p>';


  

}


?>


  </body>


    <script src="Menu/assets/plugins/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP CORE SCRIPT   -->
    <script src="Menu/assets/plugins/bootstrap.min.js"></script>  
    <!-- CUSTOM SCRIPTS -->
    <script src="Menu/assets/js/custom.js"></script>
</html>
