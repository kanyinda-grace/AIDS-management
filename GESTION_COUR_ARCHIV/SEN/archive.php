<?php session_start();?>
<?php 
include ('connect.php');
if(isset($_SESSION['uname_agent']) ){
}else{
header('location:deconnection_agent_arch.php');  
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
                     <li><a href="departement_choix.php" style="color:white;font-family:sans-serif;font-size:18px">Accueil</a></li>
                     <li><a href="tab_archiv_cour.php" style="color:white;font-family:sans-serif;font-size:18px">Courriers archivés</a></li> 
                     <li><a href="recherche_courrier_archive_par_date.php" style="color:white;font-family:sans-serif;font-size:18px">recherche des courriers archivés</a></li>   
					 <li><a href="Mise_Ajour_archive.php" style="color:white;font-family:sans-serif;font-size:18px">Mise à jour courriers archivés</a></li>   
                     <li><a href="deconnection_agent_arch.php" style="color:white;font-family:sans-serif;font-size:18px">Deconnecter</a></li>   



					 
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
<div align="left">
 <img src="img3/logo.png"  style="height:50px;width:20%;margin-top:-70px;" alt="" />
 </div></br></br></br></br></br>
 
    <div class="container-fluid">
 
    </div>
      <div class="container h-100">
  <div class="row h-100 justify-content-center align-items-center" style="margin-top:-190px;" >
  
  
    <form action=""   method="post" enctype="multipart/form-data"  name="" > </br>
 <p align="center" style="font-size:28px;color:white;"> </p>
         <?php 

         echo '<p align="right"    style="color:red;font-family:verdana; font-size:18px;"><b style="color:black">Bienvenu(e):</b> '.$_SESSION['nom_agent'].' '.$_SESSION['postnom_agent'].' '.$_SESSION['prenom_agent'].'</p>';


        $_SESSION['mat_agent'];?>
     
     <div  class="text-center" style="background-color: #00BFFF;border-radius:6px;margin-top:-30px;">
     <h1 style="color:white;font-family:sans-serif;font-size:22px">ARCHIVAGE DES COURRRIERS</h1>
     </div>
     <div class="form-row justify-content-center" >
	   <div   style="margin-left:350px" class="animated fadeInLeft">

       <div class="col-7" >
	            <label style="color:#00BFFF;font-size:20px;">Numéro de la Lettre </label></br>
           <input type="number" name="numero"  class="form-control" id="formGroupExampleInput" placeholder="0" required style="border-color:silver;width:200px;font-size:20px;">
       </div>
       <div class="col-7 my-1">
	   	            <label style="color:#00BFFF;font-size:20px;">Type du Document</label>

           <input type="text" name="libelle_type_document_archive" class="form-control" id="formGroupExampleInput" placeholder="type du document" required style="border-color:silver;width:400px;font-size:20px;">
      </div>
	  
	  <div class="col-7 my-1">
	   	            <label style="color:#00BFFF;font-size:20px;">Jour de reception</label>

              <select  name="jour_saisie_courrier_archive" class = "form-control" id="formGroupExampleInput" style="border-radius:6px;;color:black;background-color:white;border-color:silver;width:200px"  >

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
	  	  <div class="col-7 my-1">
	   	            <label style="color:#00BFFF;font-size:20px;">Mois de reception</label>

              <select  name="mois_saisie_courrier_archive" class = "form-control" id="formGroupExampleInput" style="border-radius:6px;;color:black;background-color:white;border-color:silver;width:200px"  >

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
	  	  <div class="col-7 my-1">
	   	            <label style="color:#00BFFF;font-size:20px;">Année de reception</label>

              <select  name="annee_saisie_courrier_archive" class = "form-control" id="formGroupExampleInput" style="border-radius:6px;;color:black;background-color:white;border-color:silver;width:200px"  >

    <option >2018</option>
		  <option >2019</option>
		  <option >2020</option>
		  <option >2021</option>
		  <option >2022</option>
		  <option >2023</option>
		  <option >2024</option>
		  <option >2025</option>

      </select>
      </div>

	 
	    
	      <div class="col-7 my-1">
	   	            <label style="color:#00BFFF;font-size:20px;">Fichier du document </label></br>

           <input type="file" name="uploaded_file" class="form-control" id="formGroupExampleInput" placeholder="objet" required style="border-color:silver;width:400px">
      </div>
	      

	   
	   </div>
	     </div>

        <div class="col-7  my-3" align="center"></br>
             <button type="submit" name="Upload" class="btn btn-info btn-block" style="background-color: #00BFFF; color: white;border-radius: 6px;font-size:22px;width:34.1%;font-family:sans-serif;margin-left:-70px;"> Archiver </button>
         </div>
	
      </div>
    </form>   
  </div>
</div>
 </div>
</div>


<?php
extract($_POST);

if (!empty($_FILES)) {

$libelle_type_document_archive=htmlspecialchars( $_POST['libelle_type_document_archive']);

 $numero=htmlspecialchars($_POST['numero']);
 $jour_saisie_courrier_archive=$_POST['jour_saisie_courrier_archive'];
 $mois_saisie_courrier_archive=$_POST['mois_saisie_courrier_archive'];
 $annee_saisie_courrier_archive=$_POST['annee_saisie_courrier_archive'];
  $file_name=$_FILES['uploaded_file']['name'];
  $file_extension=strrchr($file_name,".");
    
    $file_tmp_name=$_FILES['uploaded_file']['tmp_name'];
    $file_desc='uploads/'.$file_name; 
    
    $extensions_autorisees=$array = array('.pdf','.docx','.doc' );


    if (in_array($file_extension, $extensions_autorisees)) {


      if (move_uploaded_file( $file_tmp_name,$file_desc)) {

	  $req=$db->prepare("select numero from courrier_archive where  numero=?");
$req->execute(array($_POST['numero']));
$res=$req->fetch();
if($res){
	
echo '<p style="color:red">  <script>alert( " Echec ! ce courrier   a été déja archivé");window.location.href="";</script> </p>';
}else{
	  
	  
  
        $req=$db->prepare('INSERT INTO courrier_archive(numero,libelle_type_document_archive ,mat_agent,fichier_document_archive ,lien_fichier_document_archive,jour_saisie_courrier_archive ,mois_saisie_courrier_archive ,annee_saisie_courrier_archive )VALUES(?,?,?,?,?,?,?,?)')or die("errororres");
            $req->execute(array($numero,$libelle_type_document_archive,$_SESSION['mat_agent'],$file_name,$file_desc,$jour_saisie_courrier_archive 
			,$mois_saisie_courrier_archive , $annee_saisie_courrier_archive) )or die("errora");
      echo '<p style="color:red">  <script>alert( "Courrier Archivé ");window.location.href="";</script> </p>';


 }

      }else{
             echo '<p style="color:red">  <script>alert( "une erreur est survenue lors denvoie dun fichier ");window.location.href="";</script> </p>';
             echo 'une erreur est survenue lors denvoie dun fichier';
      }

       } else {
             echo '<p style="color:red">  <script>alert( "seuls les fichiers pdf ou word sont autorisés ");window.location.href="";</script> </p>';
                        echo 'seuls les fichiers pdf sont autorisés';
      }
    }



?>


  </body>


    <script src="Menu/assets/plugins/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP CORE SCRIPT   -->
    <script src="Menu/assets/plugins/bootstrap.min.js"></script>  
    <!-- CUSTOM SCRIPTS -->
    <script src="Menu/assets/js/custom.js"></script>
</html>
