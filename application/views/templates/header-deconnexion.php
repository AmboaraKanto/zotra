<?php
  if (isset($this->session->userdata['client'])) {
    $nom = ($this->session->userdata['client']['nom']);
    $prenom = ($this->session->userdata['client']['prenom']);
    $idclient = ($this->session->userdata['client']['idclient']);
    $email = ($this->session->userdata['client']['email']);
    // var_dump($_SESSION['client']);
  }
  // var_dump($_SESSION['client']);
?>
<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="<?php echo site_url(); ?>/assets/images/logo1.png" />
	<title>Zotra</title>
	<link rel="stylesheet" href="<?php echo site_url(); ?>assets/css/style.css" type="text/css">
	<link rel="stylesheet" href="<?php echo site_url(); ?>assets/css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="<?php echo site_url(); ?>assets/css/font-awesome.min.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>assets/css/mobile.css">
	<link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>assets/css/timeline.css">
	<link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>assets/css/vendor.css">
  	<link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>assets/css/flat-admin.css">	

	  <!-- Theme -->
	  <link rel="stylesheet" type="text/css" href="<?php echo site_url();?>assets/flat/css/theme/blue-sky.css">
	  <link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>assets/flat/css/theme/blue.css">
	  <link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>assets/flat/css/theme/red.css">
	  <link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>assets/flat/css/theme/yellow.css">
	  <script src="<?php echo site_url(); ?>assets/js/mobile.js" type="text/javascript"></script>
	  <script src="<?php echo site_url(); ?>assets/js/parsFR.js" type="text/javascript"></script>
	  <script src="<?php echo site_url(); ?>assets/js/parsley.min.js" type="text/javascript"></script>	
	  <script src="<?php echo site_url(); ?>assets/js/jquery.min.js" type="text/javascript"></script>   
	
</head>
<body>
	<div id="page">
		<div id="header">
			<div>
				<div class="col-md-offset-1 col-md-1"><a href="<?php echo base_url(); ?>" class="logo"><img src="<?php echo site_url(); ?>/assets/images/logo.png" alt=""></a></div>
				<div class="col-md-offset-5 col-md-5">
					<ul id="navigation">
						<li>
							<a href="<?php echo base_url(); ?>">Accueil</a>
						</li>
						<!-- <li>
							<a href="<?php echo base_url(); ?>inscription">Inscription</a>
						</li> -->
						<li>
							<a href="<?php echo base_url();?>pannier">  <i class="fa fa-shopping-cart" ></i> Panier <span class="badge badge-success " id="test">3</span></a>
							
						</li>
						<li>
							<?php if($this->session->flashdata('success_message')){?>
								<a href="#"><i class="fa fa-user" ></i> <?php echo $this->session->flashdata('success_message');?></a>
							<?php }else{?>
								<a href="#"><i class="fa fa-user" ></i> <?php echo $prenom;?></a>
							<?php } ?>
						</li>
						
						<li>
							<a href="<?php echo base_url(); ?>client/deconnexion">Déconnexion</a>
						</li>
					</ul>
				</div>
			</div>
		</div>