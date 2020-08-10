<?php
 session_start();
 include ("connect.php");
$mat=$_SESSION['mat_agent_sen'];


  	$requser = $db->prepare("SELECT * from courrier_ent where num_lettre_ent=:num ");
	
	$requser->bindValue(':num',$_GET['modify'],PDO::PARAM_INT);
	
$executeIsOk = $requser->execute();

$result = $requser->fetch();


  
 if(isset($_POST['submit'])){
 
   extract($_POST);


          $annn="/";
          $annaa="/";


$dat_traite= $annee_traite.$annn.$mois_traite.$annaa.$jour_traite;


		$req = $db->prepare("UPDATE courrier_ent set observation_ent=:observation_ent,dat_traite=:dat_traite WHERE num_lettre_ent=:num LIMIT 1");
 
$req->bindValue(':num',$_POST['modify'],PDO::PARAM_INT);
$req->bindValue(':observation_ent',$_POST['observation'],PDO::PARAM_STR);
$req->bindValue(':dat_traite',$dat_traite,PDO::PARAM_STR);




$executeIsOk = $req->execute();


  
if($executeIsOk){

echo '<p style="color:red">  <script>alert( "Modification effectuée avec succés ");window.location.href="tab_courr_entr.php";</script> </p>';

    }	
	  
else{

echo 'echec';

    }	

      echo '<p style="color:red">  <script>alert( "Courrier bien enregistré");window.location.href="";</script> </p>';
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
                     <li><a href="tab_courr_entr.php" style="color:white;font-family:sans-serif;font-size:18px" >Courriers entrants</a></li>
                      <li><a href="recherche_courrier_par_date.php"style="color:white;font-family:sans-serif;font-size:18px">Recherche courriers entrants </a></li>
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
<body>
<p align="center" style="font-size:28px;color:white;"> </p>
         <?php 

         echo '<p align="right"    style="color:red;font-family:verdana; font-size:17px;"><b style="color:black">Bienvenu(e):</b> '.$_SESSION['nom_agent_sen'].' '.$_SESSION['postnom_agent_sen'].' '.$_SESSION['prenom_agent_sen'].'</p>';

   
        $_SESSION['mat_agent_sen'];?>
        <div align="center">
     <div  class="text-center animated  bounceInDown"  style="background-color: #00BFFF;border-radius:6px;margin-top:-30px;width:85%">
     <h1 style="color:white;font-size:25px;color:white;font-family:sans-serif;">MODIFICATION DE L'OBSSERVATION DES COURRIERS ENTRANTS</h1>
     </div></br>
     </div>

     <div style="margin-top:-80px">
<div style="margin-left:600px;margin-top:100px">
              <form method = "POST" action = "" >
                      
                           <input type="hidden" name="modify" class="form-control" id="formGroupExampleInput" value="<?= $result['num_lettre_ent']; ?>" placeholder="prenom du correspondant" required style="border-color:silver;width:500px">

                       <div class = "form-group"  style="">
                  <label style="color:#00BFFF;font-size:20px;">Observation:</label>

              <select  name="observation" style="color:black;background-color:white;border-color:silver;width:160px" class = "form-control"  >

      <option value='Déjà traité' >Déjà traité </option>

      </select>
                </div>
                          
                            <div class = "form-group">
                  <label style="color:#00BFFF;font-size:20px;">Jour traité:</label>

              <select  name="jour_traite" style="color:black;background-color:white;border-color:silver;width:230px" class = "form-control"  >

          <option >1</option>
      <option >2</option>
      <option >3</option>
      <option >4</option>
      <option >5</option>
      <option >6</option>
      <option >7</option>
      <option >8</option>
      <option >9</option>
      <option >10</option>
      <option >11</option>
      <option >12</option>
      <option >13</option>
      <option >14</option>
      <option >15</option>
      <option >16</option>
      <option >17</option>
      <option >18</option>
      <option >19</option>
      <option >20</option>
      <option >21</option>
      <option >22</option>
      <option >23</option>
          <option >24</option>
      <option >25</option>
      <option >26</option>
      <option >27</option>
      <option >28</option>
      <option >29</option>
      <option >30</option>
      <option >31</option>


      </select>
                </div>
                    <div class = "form-group" style="">
                  <label style="color:#00BFFF;font-size:20px;">Mois traité:</label>

              <select  name="mois_traite" style="color:black;background-color:white;border-color:silver;width:230px" class = "form-control"  >

                        <option >1</option>
      <option >2</option>
      <option >3</option>
      <option >4</option>
      <option >5</option>
      <option >6</option>
      <option >7</option>
      <option >8</option>
      <option >9</option>
      <option >10</option>
      <option >11</option>
      <option >12</option>
      

      </select>
                </div>
                  <div class = "form-group" style="">
                  <label style="color:#00BFFF;font-size:20px;">Année traitée:</label>

              <select  name="annee_traite" style="color:black;background-color:white;border-color:silver;width:230px" class = "form-control"  >


      <option >2019</option>
      <option >2020</option>
      <option >2021</option>
      <option >2022</option>
      <option >2023</option>
      <option >2024</option>
      <option >2025</option>

      </select>
                </div>

   


                                           </br>  </br> 





  </div>
          </div>


                <div class = "form-group" align="center">
                  <button name = "submit" style="background-color: #00BFFF; color: #fff;border-radius: 6px;font-size:20px;width:40%;font-family:verdana;height:40px"><span class = "glyphicon glyphicon-save"></span> Valider</button>
              </form>   
        

  </body>


    <script src="Menu/assets/plugins/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP CORE SCRIPT   -->
    <script src="Menu/assets/plugins/bootstrap.min.js"></script>  
    <!-- CUSTOM SCRIPTS -->
    <script src="Menu/assets/js/custom.js"></script>
</html>
