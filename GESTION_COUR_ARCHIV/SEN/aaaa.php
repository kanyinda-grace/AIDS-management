<?php session_start();?>
<?php 
include ('connect.php');
if(isset($_SESSION['uname_agent']) ){
}else{
header('location:deconnection.php');  
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>GESTION DE STOCK</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <!-- Favicons -->
  <link href="img/pp.jpg" rel="icon">
  <link href="img/pp.jpg" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Ruda:400,900,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/prettyphoto/css/prettyphoto.css" rel="stylesheet">
  <link href="lib/hover/hoverex-all.css" rel="stylesheet">
  <link href="lib/jetmenu/jetmenu.css" rel="stylesheet">
  <link href="lib/owl-carousel/owl-carousel.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="css/colors/blue.css">
    <link rel = "stylesheet" type = "text/css" href = "csstp/bootstrap.css" />
    <link rel = "stylesheet" type = "text/css" href = "csstp/jquery.dataTables.css" />
  <!-- =======================================================
    Template Name: MaxiBiz
    Template URL: https://templatemag.com/maxibiz-bootstrap-business-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
    <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/php-mail-form/validate.js"></script>
  <script src="lib/prettyphoto/js/prettyphoto.js"></script>
  <script src="lib/isotope/isotope.min.js"></script>
  <script src="lib/hover/hoverdir.js"></script>
  <script src="lib/hover/hoverex.min.js"></script>
  <script src="lib/unveil-effects/unveil-effects.js"></script>
  <script src="lib/owl-carousel/owl-carousel.js"></script>
  <script src="lib/jetmenu/jetmenu.js"></script>
  <script src="lib/animate-enhanced/animate-enhanced.min.js"></script>
  <script src="lib/jigowatt/jigowatt.js"></script>
  <script src="lib/easypiechart/easypiechart.min.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
</head>

<body>
 <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="" class="logo"><b>GESTION DE <span>STOCK </span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- settings start -->
          <li class="dropdown">
       
            <ul class="dropdown-menu extended tasks-bar">
              <div class="notify-arrow notify-arrow-green"></div>
             
              <li>
                <a href="index.html#">
            
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                    </div>
                  </div>
                </a>
              </li>
              <li>
             
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                      <span class="sr-only">60% Complete (warning)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                              <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                      <span class="sr-only">80% Complete</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
            
                  <div class>
                    <div   >
                      <span class="sr-only">70% Complete (Important)</span>
                    </div>
                  </div>
                </a>
              </li>
        
            </ul>
          </li>
          <!-- settings end -->
     
          <!-- inbox dropdown end -->
          <!-- notification dropdown start-->
          <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-user"></i>
                            <span ><?php echo $_SESSION['prenom_agent']." ".$_SESSION['nom_agent']." ".$_SESSION['postnom_agent'];  ?></span>

              </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-yellow"></div>
         

   
            </ul>
          </li>
          <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="deconnection.php" style="font-family:verdana;font-size:17px">Deconnecter</a></li>
        </ul>
      </div>
    </header>    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
 <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href=""><img src="img/pp.jpg" class="img-circle" width="100"></a></p>
          <h5 class="centered">LOGISTIQUE</h5>
          <li class="mt">
            <a class="active" href="personnel">
              <i class="fa fa-home"></i>
              <span>Accueil</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="rech_fichier_indiv.php">
              <i class="fa fa-search"></i>
              <span>Fichier Individuel</span>
              </a>
      
          </li>
             <li class="sub-menu">
            <a href="rech_mesure.php">
              <i class="fa fa-search"></i>
              <span>Mesures Disciplinaires</span>
              </a>
      
          </li>
             <li class="sub-menu">
            <a href="rech_autre.php">
              <i class="fa fa-search"></i>
              <span>Autres</span>
              </a>
      
          </li>


            </ul>
          </li>
          
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside> 
  <!-- end head
  <!-- end header -->
 <section id="main-content">
      <section class="wrapper">
        <div class="row">
<div class = "col-lg-1"></div>
      <div class = "col-lg-9 well" style = "margin-top:60px;">
        <div class = "alert alert-info">RAPPORT DE STOCK PAR NATURE</div>
        
          <form action=""    name="form" > 
              <label>Nature:</label>
             <span>
     
              <select  name="code_categ" style="border-radius:6px;height:30px;width:350px"    >
   
      <?php
          $reponse =$db->query("SELECT DISTINCT categorie.libelle_categ FROM article
 
join categorie on article.code_categ=categorie.code_categ ") ;
          while($donnees  =$reponse->fetch()){
          
 echo '<option value = "'.$donnees['code_categ'].'"> '.$donnees['libelle_categ'].'</option>';}

        ?>
      </select>
       </span>
             


            <button  type = "submit" value="Search" id="search-btn" class = "btn btn-primary"><span class = "glyphicon glyphicon-search"></span> Rechercher</button></br></br>
<div id = "s-results">
  <!-- Search results here! -->
</div>

<script type = "text/javascript">
$(document).ready(function(){
  $('#s-results').load('search_fiche_rapp_stock.php').show();
  
  
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
    $('#s-results').html('<img src="img/lo.gif" />');  
    
    $.post('search_fiche_rapp_stock.php', { code_categ: form.code_categ.value, },
    
    function(result){
      $('#s-results').html(result).show();
    });
  }
    
});
</script>
   
     </form>   

          <br />
          
        
    <br />
    <br />
    <br />

  </body>
  <script src = "jsn/jquery.js"></script>
  <script src = "jsn/bootstrap.js"></script>
  <script src = "jsn/login.js"></script>
  <script src = "jsn/sidebar.js"></script>
  <script src = "jsn/jquery.dataTables.js"></script>
  <script type = "text/javascript">
    $(document).ready(function(){
      $('#table').DataTable();
    });
  </script>
  <script type = "text/javascript">
    $(document).ready(function(){
      $('#add_book').click(function(){
        $(this).hide();
        $('#show_book').show();
        $('#book_table').slideUp();
        $('#book_form').slideDown();
        $('#show_book').click(function(){
          $(this).hide();
          $('#add_book').show();
          $('#book_table').slideDown();
          $('#book_form').slideUp();
        });
      });
    });
  </script>
  <script type = "text/javascript">
    $(document).ready(function(){
      $result = $('<center><label>Deleting...</label></center>');
      $('.delbook_id').click(function(){
        $book_id = $(this).attr('value');
        $(this).parents('td').empty().append($result);
        $('.delbook_id').attr('disabled', 'disabled');
        $('.ebook_id').attr('disabled', 'disabled');
        setTimeout(function(){
          window.location = 'delete_book.php?book_id=' + $book_id;
        }, 1000);
      });
      $('.ebook_id').click(function(){
        $book_id = $(this).attr('value');
        $('#show_book').show();
        $('#show_book').click(function(){
          $(this).hide();
          $('#edit_form').empty();
          $('#book_table').show();
          $('#book_admin').show();
        });
        $('#book_table').fadeOut();
        $('#add_book').hide();
        $('#edit_form').load('load_book.php?book_id=' + $book_id);
      });
    });
  </script>

    <!-- JavaScript Libraries -->

  <!-- JavaScript Libraries -->

  <!-- Template Main Javascript File -->
</html>