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
                   <li><a href="gest_cour_archiv.php">Accueil</a></li>
            <li><a href="recherche_cour_daf.php">Courriers entrants daf</a></li>
                     <li><a href="recherche_cour_daf _sort.php">Courriers sortants daf</a></li>
           <li><a href="recherche_courrier_par_date.php">Tous les courriers du daf</a></li> 
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
  </br></br></br>  </br></br></br></br>

<body>

<div style='display:none;'>
	<img src="imagess/loader.gif" />
</div>
    <div class="container-fluid">
 
    </div>
      <div class="container h-100">
  <div class="row h-100 justify-content-center align-items-center" style="margin-top:-160px;" >
  
  
    <form action=""    name="form" > </br>

 <p align="center" style="font-size:28px;color:white;"> </p>
         <?php 

         echo '<p align="right"    style="color:red;font-family:verdana; font-size:20px;"> '.$_SESSION['nom_agent_sen'].' '.$_SESSION['postnom_agent_sen'].' '.$_SESSION['prenom_agent_sen'].'</p>';


        $_SESSION['mat_agent_sen'];?>

     <div  class="text-center" style="background-color: #00BFFF;border-radius:6px;width:80%" align="center">
     <h2 style="color:white;font-size:19px" class="animated fadeInRight">RECHERCHE DES COURRIERS SORTANTS DU DAF PAR MOIS ET ANNEE</h2>
     </div>

     <div class="form-row justify-content-center" >
	 <?Php

if(isset($_POST['mois'])){
  $mois = $_POST['mois'];
}
else {
  $mois = NULL;
}

?>
       <div class="col-7" >
	   
	            <label style="color:#00BFFF;font-size:20px;">Mois </label></br>
				<select name="mois" name="mois"  class="form-control" id="formGroupExampleInput" placeholder="0" required style="border-color:silver;width:342px" id="fn">
<?php
        //Liste du menu déroulant avec tous les fluorochromes
for ($i=1; $i <=12 ; $i++) {

      ?>
<option value="<?php echo $i;?>" <?php if($mois== $i) echo"selected" ?>><?php echo $i; ?></option>
<?php
      }


      ?>
</select>
       </div> 
     
       <div class="col-7"  style="margin-left:360px;margin-top:-67px">
	 <?Php

if(isset($_POST['annee'])){
  $annee = $_POST['annee'];
}
else {
  $annee = NULL;
}

?>
	   
	            <label style="color:#00BFFF;font-size:20px;">Année </label></br>
				<select name="annee"   class="form-control" id="formGroupExampleInput" placeholder="0" required style="border-color:silver;width:342px" id="fn">
<?php
        //Liste du menu déroulant avec tous les fluorochromes
for ($i=2018; $i <=2030 ; $i++) {

      ?>
<option value="<?php echo $i;?>" <?php if($annee== $i) echo"selected" ?>><?php echo $i; ?></option>
<?php
      }


      ?>
</select>
       </div> </br>
	          <div class="col-7  my-3"></br>
             <button type="submit" value="Search" id="search-btn"class="btn btn-info btn-block" style="background-color: #00BFFF; color: #fff;font-size:18px;width:17%;font-family:verdana;margin-left:735px;margin-top:-78px"> Rechercher </button>

         </div>
	   <div id = "s-results">
	<!-- Search results here! -->
</div>

<script type = "text/javascript">
$(document).ready(function(){
	$('#s-results').load('search_date_daf.php').show();
	
	
	$('#search-btn').click(function(){
		showValues();
	});
	
	$(function() {
		$('form').bind('submit',function(){
			showValues(); 
			return false; 
		});
	});
		
	function showValues() {
		$('#s-results').html('<img src="images/loader.gif" />');  
		
		$.post('search_date_daf.php', { mois: form.mois.value,annee: form.annee.value, },
		
		function(result){
			$('#s-results').html(result).show();
		});
	}
		
});
</script>
	 
 
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
