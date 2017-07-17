<?php
  if (isset($this->session->userdata['admin'])) {
    $nom = ($this->session->userdata['admin']['nom']);
    $prenom = ($this->session->userdata['admin']['prenom']);
    $idadmin = ($this->session->userdata['admin']['idadmin']);
    $email = ($this->session->userdata['admin']['email']);
    $idcooperative= ($this->session->userdata['admin']['idcooperative']);

    var_dump($_SESSION['admin']);
  }
  // var_dump($_SESSION['client']);
?>
<!DOCTYPE html>
<html>

<!-- Mirrored from tui2tone.github.io/flat-admin-bootstrap-templates/html/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 May 2017 14:22:11 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <title>Zotra</title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="<?php echo site_url(); ?>assets/images/logo1.png" />
   <link rel="stylesheet" type="text/css" href="<?php echo site_url();?>/../assets/css/vendor.css">
  <link rel="stylesheet" type="text/css" href="<?php echo site_url();?>/../assets/css/flat-admin.css">

  <!-- Theme -->
  <link rel="stylesheet" type="text/css" href="<?php echo site_url();?>/../assets/css/theme/blue-sky.css">
  <link rel="stylesheet" type="text/css" href="<?php echo site_url();?>/../assets/css/theme/blue.css">
  <link rel="stylesheet" type="text/css" href="<?php echo site_url();?>/../assets/css/theme/red.css">
  <link rel="stylesheet" type="text/css" href="<?php echo site_url();?>/../assets/css/theme/yellow.css">  


</head>
<body>
 <div class="app app-default">

<aside class="app-sidebar" id="sidebar">
    <div class="sidebar-header">
        <a class="sidebar-brand" href="#"><span class="highlight">Zotra</span> Admin</a>
        <button type="button" class="sidebar-toggle">
            <i class="fa fa-times"></i>
        </button>
    </div>
    <div class="sidebar-menu">
        <ul class="sidebar-nav">
            <li class="active">
                <a href="<?php echo base_url(); ?>admin/accueil">
                    <div class="icon">
                        <i class="fa fa-tasks" aria-hidden="true"></i>
                    </div>
                    <div class="title">Tableau de bord</div>
                </a>
            </li>   

            <li class="dropdown ">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <div class="icon">
                        <i class="fa fa-bus" aria-hidden="true"></i>
                    </div>
                    <div class="title">Gestion de Bus</div>
                </a>
                <div class="dropdown-menu">
                    <ul>
                        <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i> Bus</li>
                        <li><a href="<?php echo base_url();?>bus/liste_bus">Lister</a></li>
                        <li><a href="<?php echo base_url();?>bus/creation_bus">Ajouter</a></li>                       
                        <li class="line"></li>
                        <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i> Autres... </li>
                        <!-- <li><a href="./pages/landing.html">Landing</a></li> -->
                        <li><a href="liste-bus.php">Les bus libres</a></li>            
                        <!-- <li><a href="./pages/404.html">404</a></li> -->
                    </ul>
                </div>
            </li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <div class="icon">
                        <i class="fa fa-road" aria-hidden="true"></i>
                    </div>
                    <div class="title">Gestion de Trajet</div>
                </a>
                <div class="dropdown-menu">
                    <ul>
                        <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i> Trajet</li>
                        <li><a href="<?php echo base_url() ?>trajet/lister_trajet">Lister</a></li>
                        <li><a href="<?php echo base_url() ?>trajet/creation_trajet">Ajouter</a></li>                       
                        <li class="line"></li>
                        <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i> Autres... </li>
                        <!-- <li><a href="./pages/landing.html">Landing</a></li> -->
                        <li><a href="pages/login.html">Les plus frequentés</a></li>            
                        <!-- <li><a href="./pages/404.html">404</a></li> -->
                    </ul>
                </div>
            </li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <div class="icon">
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </div>
                    <div class="title">Gestion de Chauffeur</div>
                </a>
                <div class="dropdown-menu">
                    <ul>
                        <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i> Chauffeur</li>
                        <li><a href="<?php echo base_url() ?>chauffeur/lister_chauffeur">Lister</a></li>
                        <li><a href="<?php echo base_url() ?>chauffeur/ajout_chauffeur">Embaucher</a></li>                      
                        <li class="line"></li>
                        <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i> Autres... </li>
                        <li><a href="pages/login.html">Les plus appréciés</a></li>            
                    </ul>
                </div>
            </li>
         

        </ul>
    </div>
 
</aside>
<script type="text/ng-template" id="sidebar-dropdown.tpl.html">
  <div class="dropdown-background">
    <div class="bg"></div>
  </div>
  <div class="dropdown-container">
    {{list}}
  </div>
</script>
<div class="app-container">
<nav class="navbar navbar-default" id="navbar">
  <div class="container-fluid">
    <div class="navbar-collapse collapse in">
      <ul class="nav navbar-nav navbar-mobile">
        <li>
          <button type="button" class="sidebar-toggle">
            <i class="fa fa-bars"></i>
          </button>
        </li>
        <li class="logo">
          <a class="navbar-brand" href="#"><span class="highlight">Zotra</span> Admin</a>
        </li>
        <li>
          <button type="button" class="navbar-toggle">
            <img class="profile-img" src="<?php echo base_url();?>/../assets/images/profile.png">
          </button>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-left">
        <li class="navbar-title">Tableau de bord</li>
        <li class="navbar-search hidden-sm">
          <input id="search" type="text" placeholder="Recherche...">
          <button class="btn-search"><i class="fa fa-search"></i></button>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown notification">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <div class="icon"><i class="fa fa-shopping-basket" aria-hidden="true"></i></div>
            <div class="title">Nouvelles réservations</div>
            <div class="count">0</div>
          </a>
          <div class="dropdown-menu">
            <ul>
              <li class="dropdown-header">Réservations</li>
              <li class="dropdown-empty">Aucune nouvelle réservation</li>
              <li class="dropdown-footer">
                <a href="#">Voir tout <i class="fa fa-angle-right" aria-hidden="true"></i></a>
              </li>
            </ul>
          </div>
        </li>
        <li class="dropdown notification warning">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <div class="icon"><i class="fa fa-comments" aria-hidden="true"></i></div>
            <div class="title">Réclamations</div>
            <div class="count">99</div>
          </a>
          <div class="dropdown-menu">
            <ul>
              <li class="dropdown-header">Message</li>
              <li>
                <a href="#">
                  <span class="badge badge-warning pull-right">10</span>
                  <div class="message">
                    <img class="profile" src="https://placehold.it/100x100">
                    <div class="content">
                      <div class="title">"Confirmation de payement"</div>
                      <div class="description">Mahefarivo Razonarison</div>
                    </div>
                  </div>
                </a>
              </li>                     
            </ul>
          </div>
        </li>
        <li class="dropdown notification danger">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <div class="icon"><i class="fa fa-bell" aria-hidden="true"></i></div>
            <div class="title">Notifications</div>
            <div class="count">10</div>
          </a>
          <div class="dropdown-menu">
            <ul>
              <li class="dropdown-header">Notifications</li>
              <li>
                <a href="#">
                  <span class="badge badge-danger pull-right">8</span>
                  <div class="message">
                    <div class="content">
                      <div class="title">New Order</div>
                      <div class="description">$400 total</div>
                    </div>
                  </div>
                </a>
              </li>                      
              <li class="dropdown-footer">
                <a href="#">Voir tout <i class="fa fa-angle-right" aria-hidden="true"></i></a>
              </li>
            </ul>
          </div>
        </li>
        <li class="dropdown profile">
          <!-- Eto ny profil le administrateur -->
          <a href="" class="dropdown-toggle"  data-toggle="dropdown">
            <img class="profile-img" src="../assets/images/profile.png">
            <div class="title">Profil</div>
          </a>
          <div class="dropdown-menu">
            <div class="profile-info">
              <?php if($this->session->flashdata('success_message')){?>
               <h4 class="username"><?php echo $this->session->flashdata('success_message');?></h4>
               
              <?php }else{?>
                <h4 class="username"><?php echo ucfirst($prenom)." ". ucfirst($nom);?></h4>
               
              <?php } ?>
             
            </div>
            <ul class="action">
              <li>
                <a href="#">
                  Profil
                </a>
              </li>                       
              <li>
                <a href="<?php echo base_url(); ?>admin/deconnexion">
                  Deconnexion
                </a>
              </li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav> 
