<?php
 session_start();
 include ("connect.php");
$mat=$_SESSION['mat_agent_sen'];


    $requser = $db->prepare("SELECT * from courrier_sort where num_lettre_sort=:num ");
  
  $requser->bindValue(':num',$_GET['modify'],PDO::PARAM_INT);
  
$executeIsOk = $requser->execute();

$result = $requser->fetch();


  
 if(isset($_POST['submit'])){
 
   extract($_POST);
      
    $req = $db->prepare("UPDATE courrier_sort set code_service=:code_service,objet_sort=:objet_sort,jour_sort=:jour_sort,mois_sort=:mois_sort,annee_sort=:annee_sort,observation_sort
=:observation_sort,code_sexe=:code_sexe,nom_sort=:nom_sort,postnom_sort=:postnom_sort,prenom_sort=:prenom_sort,
entreprise_sort=:entreprise_sort,email_sort=:email_sort,telephone_sort=:telephone_sort,commentaire_sort=:commentaire_sort WHERE num_lettre_sort=:num LIMIT 1");
 
$req->bindValue(':num',$_POST['modify'],PDO::PARAM_INT);
$req->bindValue(':code_service',$_POST['code_service'],PDO::PARAM_STR);
$req->bindValue(':objet_sort',$_POST['objet'],PDO::PARAM_STR);
$req->bindValue(':jour_sort',$_POST['jour'],PDO::PARAM_INT);
$req->bindValue(':mois_sort',$_POST['mois'],PDO::PARAM_INT);
$req->bindValue(':annee_sort',$_POST['annee'],PDO::PARAM_INT);
$req->bindValue(':observation_sort',$_POST['observation'],PDO::PARAM_STR);
$req->bindValue(':code_sexe',$_POST['code_sexe'],PDO::PARAM_STR);
$req->bindValue(':nom_sort',$_POST['nom'],PDO::PARAM_STR);
$req->bindValue(':postnom_sort',$_POST['postnom'],PDO::PARAM_STR);
$req->bindValue(':prenom_sort',$_POST['prenom'],PDO::PARAM_STR);
$req->bindValue(':entreprise_sort',$_POST['entreprise'],PDO::PARAM_STR);
$req->bindValue(':email_sort',$_POST['email'],PDO::PARAM_STR);
$req->bindValue(':telephone_sort',$_POST['telephone'],PDO::PARAM_STR);
$req->bindValue(':commentaire_sort',$_POST['commentaire'],PDO::PARAM_STR);



$executeIsOk = $req->execute();


  
if($executeIsOk){

echo '<p style="color:red">  <script>alert( "Modification effectuée avec succés ");window.location.href="Mise_Ajour.php";</script> </p>';

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
<body>
  <p align="center" style="font-size:28px;color:white;"> </p>
         <?php 

         echo '<p align="right"    style="color:red;font-family:verdana; font-size:17px;"><b style="color:black">Bienvenu(e):</b> '.$_SESSION['nom_agent_sen'].' '.$_SESSION['postnom_agent_sen'].' '.$_SESSION['prenom_agent_sen'].'</p>';

   
        $_SESSION['mat_agent_sen'];?>
        <div align="center">
     <div  class="text-center animated  bounceInDown"  style="background-color: #00BFFF;border-radius:6px;margin-top:-30px;width:85%">
     <h1 style="color:white;font-size:25px;color:white;font-family:sans-serif;">MODIFICATION DES COURRIERS SORTANTS</h1>
     </div></br>
     </div>

     <div style="margin-top:-80px">
<div style="margin-left:600px;margin-top:100px">
              <form method = "POST" action = "" >

                     

     
                       <div class = "form-group">
                  <label style="color:#00BFFF;font-size:20px;">Jour:</label>

              <select  name="jour" style="color:black;background-color:white;border-color:silver;width:160px" class = "form-control"  >
     <?php
    $valeur=$result['jour_sort'];

    ?>
    <option value = "<?= $result['jour_sort']; ?>"><?= $result['jour_sort']; ?></option>;
      <option <?php if($valeur=='2') 'selected';?> value='2' >2     </option>
      <option <?php if($valeur=='3') echo 'selected';?> value='3' >3</option>
      <option <?php if($valeur=='4') echo 'selected';?> value='4' >4</option>
      <option <?php if($valeur=='5') echo 'selected';?> value='5' >5</option>
      <option <?php if($valeur=='6') echo 'selected';?> value='6' >6</option>
      <option <?php if($valeur=='7') echo 'selected';?> value='7' >7</option>
      <option <?php if($valeur=='8') echo 'selected';?> value='8' >8</option>
      <option <?php if($valeur=='1')  'selected';?> value='1' >1 </option>
      <option <?php if($valeur=='9') echo 'selected';?> value='9' >9</option>
      <option <?php if($valeur=='10') echo 'selected';?> value='10' >10</option>
      <option <?php if($valeur=='11') echo 'selected';?> value='11' >11</option>
      <option <?php if($valeur=='12') echo 'selected';?> value='12' >12</option>
      <option <?php if($valeur=='13') echo 'selected';?> value='13' >13</option>
      <option <?php if($valeur=='14') echo 'selected';?> value='14' >14</option>
      <option <?php if($valeur=='15') echo 'selected';?> value='15' >15</option>
      <option <?php if($valeur=='16') echo 'selected';?> value='16' >16</option>
      <option <?php if($valeur=='17') echo 'selected';?> value='17' >17</option>
      <option <?php if($valeur=='18') echo 'selected';?> value='18' >18</option>
      <option <?php if($valeur=='19') echo 'selected';?> value='19' >19</option>
      <option <?php if($valeur=='20') echo 'selected';?> value='20' >20</option>
      <option <?php if($valeur=='21') echo 'selected';?> value='21' >21</option>
      <option <?php if($valeur=='22') echo 'selected';?> value='22' >22</option>
      <option <?php if($valeur=='23') echo 'selected';?> value='23' >23</option>
      <option <?php if($valeur=='24') echo 'selected';?> value='24' >24</option>
      <option <?php if($valeur=='25') echo 'selected';?> value='25' >25</option>
      <option <?php if($valeur=='26') echo 'selected';?> value='26' >26</option>
      <option <?php if($valeur=='27') echo 'selected';?> value='27' >27</option>
      <option <?php if($valeur=='28') echo 'selected';?> value='28' >28</option>
      <option <?php if($valeur=='29') echo 'selected';?> value='29' >29</option>
      <option <?php if($valeur=='30') echo 'selected';?> value='30' >30</option>
      <option <?php if($valeur=='31') echo 'selected';?> value='31' >31</option>









      </select>
                </div>
                         <div class = "form-group" style="">
                  <label style="color:#00BFFF;font-size:20px;">Mois:</label>

              <select  name="mois" style="color:black;background-color:white;border-color:silver;width:160px" class = "form-control"  >

     <?php
    $valeur=$result['mois_sort'];

    ?>
    <option value = "<?= $result['mois_sort']; ?>"><?= $result['mois_sort']; ?></option>;
      <option <?php if($valeur=='2') 'selected';?> value='2' >2     </option>
      <option <?php if($valeur=='3') echo 'selected';?> value='3' >3</option>
      <option <?php if($valeur=='4') echo 'selected';?> value='4' >4</option>
      <option <?php if($valeur=='5') echo 'selected';?> value='5' >5</option>
      <option <?php if($valeur=='6') echo 'selected';?> value='6' >6</option>
      <option <?php if($valeur=='7') echo 'selected';?> value='7' >7</option>
      <option <?php if($valeur=='8') echo 'selected';?> value='8' >8</option>
      <option <?php if($valeur=='9') echo 'selected';?> value='9' >9</option>
      <option <?php if($valeur=='1')  'selected';?> value='1' >1 </option>
      <option <?php if($valeur=='10') echo 'selected';?> value='10' >10</option>
      <option <?php if($valeur=='11') echo 'selected';?> value='11' >11</option>
      <option <?php if($valeur=='12') echo 'selected';?> value='12' >12</option>

      </select>
                </div>
                                         <div class = "form-group" style="">
                  <label style="color:#00BFFF;font-size:20px;">Année:</label>

              <select  name="annee" style="color:black;background-color:white;border-color:silver;width:160px" class = "form-control"  >
  <?php
    $valeur=$result['annee_sort'];

    ?>
    <option value = "<?= $result['annee_sort']; ?>"><?= $result['annee_sort']; ?></option>;
      <option <?php if($valeur=='2018')  'selected';?> value='2018' >2018 </option>

      </select>
                </div>
                <div class = "form-group"  style="">
                  <label style="color:#00BFFF;font-size:20px;">Nom:</label>
                  <input type = "text" name = "nom" value="<?= $result['nom_sort']; ?>" style="color:black;background-color:white;border-color:silver;width:270px" class = "form-control"  />

    

                </div>
                              <div class = "form-group"  style="">
                  <label style="color:#00BFFF;font-size:20px;">Postnom:</label>
                  <input type = "text" name = "postnom" value="<?= $result['postnom_sort']; ?>" style="color:black;background-color:white;border-color:silver;width:270px" class = "form-control"  />

    

                </div>

                          <div class = "form-group"  style="">
                  <label style="color:#00BFFF;font-size:20px;">Prenom:</label>
                  <input type = "text" name = "prenom" value="<?= $result['prenom_sort']; ?>" style="color:black;background-color:white;border-color:silver;width:270px" class = "form-control"  />

    

                </div>

                          <div class = "form-group"  style="">
                  <label style="color:#00BFFF;font-size:20px;">Sexe:</label>
        <select  name="code_sexe" style="color:black;background-color:white;border-color:silver;width:160px" class = "form-control"  >

    <option value="<?php echo $result['code_sexe']; ?>"><?php echo $result['code_sexe']; ?></option>
                                            <option value="M">M</option>
                                            <option value="F">F</option>
                                        </select>
                </div>
                                          <div class = "form-group"  style="">
                  <label style="color:#00BFFF;font-size:20px;">Email:</label>
                  <input type = "email" name = "email" value="<?= $result['email_sort']; ?>" style="color:black;background-color:white;border-color:silver;width:170px" class = "form-control"  />

    

                </div>
     
  

                                          <div class = "form-group"  style="">
                  <label style="color:#00BFFF;font-size:20px;">Téléphone:</label>
                  <input type = "text" name = "telephone" value="<?= $result['telephone_sort']; ?>" style="color:black;background-color:white;border-color:silver;width:170px" class = "form-control"  />

    

                </div>

                                          <div class = "form-group"  style="">
                  <label style="color:#00BFFF;font-size:20px;">Entreprise:</label>
                  <input type = "text" value="<?= $result['entreprise_sort']; ?>" name = "entreprise" style="color:black;background-color:white;border-color:silver;width:170px" class = "form-control"  />

    

                </div>

   
                           <input type="hidden" name="modify" class="form-control" id="formGroupExampleInput" value="<?= $result['num_lettre_sort']; ?>" placeholder="prenom du correspondant" required style="border-color:silver;width:500px">

                <div class = "form-group">
                  <label style="color:#00BFFF;font-size:20px;">Objet:</label>
                  <input type = "text" name = "objet" value="<?= $result['objet_sort']; ?>" style="color:black;background-color:white;border-color:silver;width:338px;" class = "form-control" required = "required"/> 
                </div>
                                           <div class = "form-group" >
                  <label style="color:#00BFFF;font-size:20px;">Service:</label>

              <select  name="code_service" style="color:black;background-color:white;border-color:silver;width:335px" class = "form-control"  >
     <?php
    $valeur=$result['code_service'];

    ?>
    <option value = "<?= $result['code_service']; ?>"><?= $result['code_service']; ?></option>;
      <option <?php if($valeur=='DAFF')  'selected';?> value='DAFF' >DAFF </option>
      <option <?php if($valeur=='DAFL') 'selected';?> value='DAFL' >DAFL     </option>
      <option <?php if($valeur=='DAFR') echo 'selected';?> value='DAFR' >DAFR</option>
      <option <?php if($valeur=='CP') echo 'selected';?> value='CP' >CP</option>
      <option <?php if($valeur=='PRC') echo 'selected';?> value='PRC' >PRC</option>
      <option <?php if($valeur=='SEV') echo 'selected';?> value='SEV' >SEV</option>
      <option <?php if($valeur=='SEN') echo 'selected';?> value='SEN' >SEN</option>
      <option <?php if($valeur=='SEP') echo 'selected';?> value='SEP' >SEP</option>
      <option <?php if($valeur=='AC') echo 'selected';?> value='AC' >AC</option>
      <option <?php if($valeur=='INFO') echo 'selected';?> value='INFO' >INFO</option>

      </select>
                </div>
                    <div class = "form-group">
                  <label style="color:#00BFFF;font-size:20px;">commentaire:</label>
                  <input type = "text" name = "commentaire" value="<?= $result['commentaire_sort']; ?>" style="color:black;background-color:white;border-color:silver;width:338px;" class = "form-control" /> 
                </div>
            <div class = "form-group"  style="">
                  <label style="color:#00BFFF;font-size:20px;">Observation:</label>

              <select  name="observation" style="color:black;background-color:white;border-color:silver;width:160px" class = "form-control"  >
     <?php
    $valeur=$result['observation_sort'];

    ?>
      <option value = "<?= $result['observation_sort']; ?>"><?= $result['observation_sort']; ?></option>
      <option <?php if($valeur=='Déjà traité') echo 'selected';?> value='Déjà traité' >En cours</option>
      <option <?php if($valeur=='En cours') echo 'selected';?> value='En cours' >En cours</option>
      <option <?php if($valeur=='A traité')  'selected';?> value='A traité' >A traité </option>
      <option <?php if($valeur=='A classer') echo 'selected';?> value='A classer' >A classer</option>
      <option <?php if($valeur=='A integré') echo 'selected';?> value='A integré' >A integré</option>
      <option <?php if($valeur=='A representer') echo 'selected';?> value='A representer' >A representer</option>
      <option <?php if($valeur=='A réintegrer') echo 'selected';?> value='A réintegrer' >A réintegrer</option>
      <option <?php if($valeur=='A analyser') echo 'selected';?> value='A analyser' >A analyser</option>
      <option <?php if($valeur=='A participer') echo 'selected';?> value='A participer' >A participer</option>
      <option <?php if($valeur=='Suite') echo 'selected';?> value='Suite' >Suite</option>
      <option <?php if($valeur=='Planification') echo 'selected';?> value='Planification' >Planification</option>
      </select>
                </div>
                          

  </div>
          </div>


                <div class = "form-group" align="center">
                  <button name = "submit" style="background-color: #00BFFF; color: #fff;border-radius: 6px;font-size:20px;width:40%;font-family:verdana;height:40px"><span class = "glyphicon glyphicon-save"></span> Valider</button>
              </form>   
          </div>
                    </div>




  </body>


    <script src="Menu/assets/plugins/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP CORE SCRIPT   -->
    <script src="Menu/assets/plugins/bootstrap.min.js"></script>  
    <!-- CUSTOM SCRIPTS -->
    <script src="Menu/assets/js/custom.js"></script>
</html>
