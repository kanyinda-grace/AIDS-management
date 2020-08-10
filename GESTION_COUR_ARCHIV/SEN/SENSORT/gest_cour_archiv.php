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
                     <li><a href="tab_cour_sortant.php" style="color:white;font-family:sans-serif;font-size:18px" >Courriers sortants</a></li>
                      <li><a href="recherche_courrier_par_date.php"style="color:white;font-family:sans-serif;font-size:18px">Recherche courriers sortants </a></li>
                      <li><a href="Mise_Ajour.php" style="color:white;font-family:sans-serif;font-size:18px">Mise à jour  </a></li>
                      <li><a href="rapport.php" style="color:white;font-family:sans-serif;font-size:18px">Rapports</a></li> 
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
         <h1 style="color:white;font-size:25px;color:white;font-family:sans-serif;">ENREGISTREMENT DES COURRIERS SORTANTS </h1>
     </div></br>
     </div>


<div style="margin-left:600px">
              <form method = "POST" action = "" >
              
                <div class = "form-group">
                  <label style="color:#00BFFF;font-size:20px;">Jour Sortant:</label>

              <select  name="jour_sort" style="color:black;background-color:white;border-color:silver;width:160px" class = "form-control"  >

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
                  <label style="color:#00BFFF;font-size:20px;">Mois Sortant:</label>

              <select  name="mois_sort" style="color:black;background-color:white;border-color:silver;width:160px" class = "form-control"  >

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
                  <label style="color:#00BFFF;font-size:20px;">Année Sortant:</label>

              <select  name="annee_sort" style="color:black;background-color:white;border-color:silver;width:160px" class = "form-control"  >


      <option >2019</option>
      <option >2020</option>
      <option >2021</option>
      <option >2022</option>
      <option >2023</option>
      <option >2024</option>
      <option >2025</option>

      </select>
                </div>
                 
                              <div class = "form-group"  style="">
                  <label style="color:#00BFFF;font-size:20px;">Nom:</label>
                  <input type = "text" name = "nom_sort" style="color:black;background-color:white;border-color:silver;width:270px" class = "form-control" />

    

                </div>
                              <div class = "form-group"  style="">
                  <label style="color:#00BFFF;font-size:20px;">Postnom:</label>
                  <input type = "text" name = "postnom_sort" style="color:black;background-color:white;border-color:silver;width:270px" class = "form-control" />

    

                </div>


                                        
                          <div class = "form-group"  style="">
                  <label style="color:#00BFFF;font-size:20px;">Prenom:</label>
                  <input type = "text" name = "prenom_sort" style="color:black;background-color:white;border-color:silver;width:270px" class = "form-control" />

    

                </div>


                          <div class = "form-group"  style="">
                  <label style="color:#00BFFF;font-size:20px;">Sexe:</label>
              <select  name="code_sexe" style="color:black;background-color:white;border-color:silver;width:160px" class = "form-control"  >

       <?php
          $reponse =$db->query("SELECT *  from sexe") ;
          while($donnees  =$reponse->fetch()){
          
          echo '<option value = "'.$donnees['code_sexe'].'">'.$donnees['libelle_sexe'].'</option>';
          }
        ?>
      </select>

                </div>
                                          <div class = "form-group"  style="">
                  <label style="color:#00BFFF;font-size:20px;">Email:</label>
                  <input type = "email" name = "email_sort" style="color:black;background-color:white;border-color:silver;width:170px" class = "form-control"  />

    

                </div>
     
  

                                          <div class = "form-group"  style="">
                  <label style="color:#00BFFF;font-size:20px;">Téléphone:</label>
                  <input type = "text" name = "telephone_sort" style="color:black;background-color:white;border-color:silver;width:170px" class = "form-control"  />

    

                </div>

                                          <div class = "form-group"  style="">
                  <label style="color:#00BFFF;font-size:20px;">Entreprise:</label>
                  <input type = "text" name = "entreprise_sort" style="color:black;background-color:white;border-color:silver;width:170px" class = "form-control"  />

    

                </div>
                
                    <div class = "form-group">
                  <label style="color:#00BFFF;font-size:20px;">Objet:</label>
                  <input type = "text" name = "objet_sort" style="color:black;background-color:white;border-color:silver;width:338px;height:60px" class = "form-control" required = "required"/> </input>
                </div>
                           <div class = "form-group" >
                  <label style="color:#00BFFF;font-size:20px;">Service:</label>

              <select  name="code_service" style="color:black;background-color:white;border-color:silver;width:335px" class = "form-control"  >
   
      <?php
          $reponse =$db->query("SELECT *  from service") ;
          while($donnees  =$reponse->fetch()){
          
          echo '<option value = "'.$donnees['code_service'].'">'.$donnees['libelle_service'].'</option>';
          }




        ?>
      </select>
                </div>

   

                    <div class = "form-group"  style="">
                  <label style="color:#00BFFF;font-size:20px;">Commentaire:</label>

              <input type="text"  name="commentaire_sort" style="color:black;background-color:white;border-color:silver;width:338px" class = "form-control"  >
 
    

                </div>
                        
            <div class = "form-group"  style="">
                  <label style="color:#00BFFF;font-size:20px;">Observation:</label>

              <select  name="observation_sort" style="color:black;background-color:white;border-color:silver;width:160px" class = "form-control" required = "required"  >
 
      <option >Déjà traité</option>
      <option >A traité</option>
      <option >En cours</option>
      <option >Déjà transmis</option>
      <option >A classer</option>
      <option >A integré</option>
      <option >A representer</option>
      <option >A réintegrer</option>
      <option >A analyser</option>
      <option >A participer</option>
      <option >Suite</option>
      <option >Planification</option>







      </select>
                </div>
                          
                  
                                             



  </div>



                <div class = "form-group" align="center">
                  <button name = "Upload" style="background-color: #00BFFF; color: #fff;border-radius: 6px;font-size:20px;width:40%;font-family:verdana;height:40px"><span class = "glyphicon glyphicon-save"></span> Enregistrer</button>
              </form>   
          </div>
                  


<?php
if(isset($_POST['Upload'])){

extract($_POST);

$code_service=htmlspecialchars( $_POST['code_service']);
$objet_sort=htmlspecialchars( $_POST['objet_sort']);

$jour_sort=htmlspecialchars( $_POST['jour_sort']);
$mois_sort=htmlspecialchars( $_POST['mois_sort']);
$annee_sort=htmlspecialchars( $_POST['annee_sort']);

$observation_sort=htmlspecialchars( $_POST['observation_sort']);
$code_sexe=htmlspecialchars( $_POST['code_sexe']);

$nom_sort=htmlspecialchars( $_POST['nom_sort']);
$postnom_sort=htmlspecialchars( $_POST['postnom_sort']);
$entreprise_sort=htmlspecialchars( $_POST['entreprise_sort']);
$email_sort=htmlspecialchars( $_POST['email_sort']);
$telephone_sort=htmlspecialchars( $_POST['telephone_sort']);
$commentaire_sort=htmlspecialchars( $_POST['commentaire_sort']);



$req=$db->prepare('INSERT INTO courrier_sort(code_service ,mat_agent,objet_sort,jour_sort,mois_sort,annee_sort,observation_sort,code_sexe,nom_sort,postnom_sort,prenom_sort,entreprise_sort,email_sort ,telephone_sort,commentaire_sort )VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)')or die("errororres");
$req->execute(array($code_service ,$_SESSION['mat_agent_sen'],$objet_sort ,$jour_sort ,$mois_sort ,$annee_sort,$observation_sort,$code_sexe,$nom_sort,$postnom_sort,$prenom_sort,$entreprise_sort,$email_sort,$telephone_sort,$commentaire_sort ) )or die("error");
      echo '<p style="color:red">  <script>alert( "Courrier bien enregistré");window.location.href="";</script> </p>';


}


?>


  </body>


    <script src="Menu/assets/plugins/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP CORE SCRIPT   -->
    <script src="Menu/assets/plugins/bootstrap.min.js"></script>  
    <!-- CUSTOM SCRIPTS -->
    <script src="Menu/assets/js/custom.js"></script>
</html>
