<?php session_start();?>
<?php 

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

  <li ><a href="/PNMLS"/  style="font-size:22px"> <img src="img3/acc.jpg"  style="height:35px;width:150%;margin-top:-23px;position:absolute" alt=""     /></a>
	&nbsp	&nbsp 	&nbsp
	<a href="/PNMLS"/ style="font-size:22px">Accueil</a></li>
                     
                                       
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

	<div align="center">
 <img src="img3/logo.png"  style="width:1200px;height:45px;width:30%;margin-top:-50px" alt="" />
 </div></br></br>
    <div class="container-fluid">
 
    </div>
      <div class="container h-100">
  <div class="row h-100 justify-content-center align-items-center" style="margin-top:-70px;" >
  
  
    <form action=""   method="post" enctype="multipart/form-data" name="" > </br>
	     <ul class="justify-content-end">

</ul><div  class="animated  bounceInDown " align="center">


     <a  href="login.php" style="text-decoration:none"  >
     <div  class="text-center" style="background-color: #00BFFF;border-radius:6px;height:55px;width:40%;"> </br>
	 	 	<div align="left" style="color:white;font-size:16px;font-weight:bold">SECRETARIAT EXECUTIF NATIONAL</div>

     </div></br>
	 </a>
	 

     <a  href="daf/recherche_cour_daf.php" style="text-decoration:none"  >
     <div  class="text-center" style="background-color:  #00BFFF;border-radius:6px;height:55px;width:40%;"> </br>
	 	 	<div align="left" style="color:white;font-size:16px;font-weight:bold">DEPARTEMENT ADMINISTRATIF ET FINANCIER</div>

     </div></br>
	 </a>
	 
 <a   href="dcp/recherche_cour_dcp.php" style="text-decoration:none"  >
 
     <div  class="text-center" id="tonga" style="background-color: #00BFFF;border-radius:6px;height:55px;width:40%;"> </br>
	 	<div align="left" style="color:white;font-size:16px;font-weight:bold">COOPERATION ET PARTENARIAT</div>

     </div></br>
	 </a>
	 
	 
	  
    <a  href="prc/recherche_cour_prc.php" style="text-decoration:none" >
     <div  class="text-center" id="tonga" style="background-color:   #00BFFF;border-radius:6px;height:55px;width:40%;"> </br>
	<div align="left" style="color:white;font-size:16px;font-weight:bold">PLANIFICATION ET RENFORCEMENT DES CAPACITES</div>

     </div></br>
	 </a>
	 
	  <a   href="dsev/recherche_cour_dsev.php"  style="text-decoration:none">
     <div  class="text-center" id="tonga" style="background-color:  #00BFFF;border-radius:6px;height:55px;width:40%;"> </br>
     <div align="left" style="color:white;font-size:16px;font-weight:bold">SUIVI ET EVALUATION </div>
     </div></br>
	 </a>

    <a   href="dsep/recherche_cour_dsep.php"  style="text-decoration:none">
     <div  class="text-center" id="tonga" style="background-color:  #00BFFF;border-radius:6px;height:55px;width:40%;"> </br>
     <div align="left" style="color:white;font-size:16px;font-weight:bold">SECRETARIAT ET PROTOCOLE</div>
     </div></br>
   </a>
       <a   href="dac/recherche_cour_dac.php"  style="text-decoration:none">
     <div  class="text-center" id="tonga" style="background-color:  #00BFFF;border-radius:6px;height:55px;width:40%;"> </br>
     <div align="left" style="color:white;font-size:16px;font-weight:bold">AUDIT ET CONTENTIEUX</div>
     </div></br>
   </a>
      </a>
       <a   href="info/recherche_cour_info.php"  style="text-decoration:none">
     <div  class="text-center" id="tonga" style="background-color:  #00BFFF;border-radius:6px;height:55px;width:40%;"> </br>
     <div align="left" style="color:white;font-size:16px;font-weight:bold">INFORMATIQUE</div>
     </div></br>
   </a>
   
	 
</div>


  </body>


    <script src="Menu/assets/plugins/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP CORE SCRIPT   -->
    <script src="Menu/assets/plugins/bootstrap.min.js"></script>  
    <!-- CUSTOM SCRIPTS -->
    <script src="Menu/assets/js/custom.js"></script>
</html>
