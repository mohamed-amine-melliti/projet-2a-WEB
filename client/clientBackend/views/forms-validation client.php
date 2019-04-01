<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>réponse à des réclamations | B&B-Admin</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="assets/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="assets/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="assets/stylesheets/theme-custom.css">

		<!-- Head Libs -->
		<script src="assets/vendor/modernizr/modernizr.js"></script>

	</head>
	<body>
		<section class="body">

			<!-- start: header -->
			<header class="header">
				<div class="logo-container">
					<a href="../" class="logo">
						<img src="assets/images/logo.png" height="35" alt="Porto Admin" />
					</a>
					<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>
			
				<!-- start: search & user box -->
				<div class="header-right">
			
					<form action="pages-search-results.html" class="search nav-form">
						<div class="input-group input-search">
							<input type="text" class="form-control" name="q" id="q" placeholder="Search...">
							<span class="input-group-btn">
								<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
							</span>
						</div>
					</form>
			
					<span class="separator"></span>
			
					<ul class="notifications">
						<li>
							<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
								<i class="fa fa-tasks"></i>
								<span class="badge">3</span>
							</a>
			
							<div class="dropdown-menu notification-menu large">
								<div class="notification-title">
									<span class="pull-right label label-default">3</span>
									Tasks
								</div>
			
								<div class="content">
									<ul>
										<li>
											<p class="clearfix mb-xs">
												<span class="message pull-left">Generating Sales Report</span>
												<span class="message pull-right text-dark">60%</span>
											</p>
											<div class="progress progress-xs light">
												<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
											</div>
										</li>
			
										<li>
											<p class="clearfix mb-xs">
												<span class="message pull-left">Importing Contacts</span>
												<span class="message pull-right text-dark">98%</span>
											</p>
											<div class="progress progress-xs light">
												<div class="progress-bar" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100" style="width: 98%;"></div>
											</div>
										</li>
			
										<li>
											<p class="clearfix mb-xs">
												<span class="message pull-left">Uploading something big</span>
												<span class="message pull-right text-dark">33%</span>
											</p>
											<div class="progress progress-xs light mb-xs">
												<div class="progress-bar" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 33%;"></div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</li>
<?PHP
include "../core/client.php";

$notifications=ClientC::notificationsReclamation();
//var_dump($listeEmployes->fetchAll());
?>


						<li>
							
							<a href="tables-editable reclamations.php" class="dropdown-toggle notification-icon" >
								<i class="fa fa-envelope"></i>
								<span  class="badge" ><?PHP echo $notifications['NbNews']; ?></span>
							</a>
							<?php 
$url="/clientBackend/views/tables-editable%20reclamations.php";
//$monUrl = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; 
 $adresse=$_SERVER['REQUEST_URI'];
//echo '' .$adresse."<br />"; 

if ($url!=$adresse){

ClientC::updateEtatN();
}
							 ?>
						<li>
							<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
								<i class="fa fa-bell"></i>
								<span class="badge">3</span>
							</a>
			
							<div class="dropdown-menu notification-menu">
								<div class="notification-title">
									<span class="pull-right label label-default">3</span>
									Alerts
								</div>
			
								<div class="content">
									<ul>
										<li>
											<a href="#" class="clearfix">
												<div class="image">
													<i class="fa fa-thumbs-down bg-danger"></i>
												</div>
												<span class="title">Server is Down!</span>
												<span class="message">Just now</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<div class="image">
													<i class="fa fa-lock bg-warning"></i>
												</div>
												<span class="title">User Locked</span>
												<span class="message">15 minutes ago</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<div class="image">
													<i class="fa fa-signal bg-success"></i>
												</div>
												<span class="title">Connection Restaured</span>
												<span class="message">10/10/2014</span>
											</a>
										</li>
									</ul>
			
									<hr />
			
									<div class="text-right">
										<a href="#" class="view-more">View All</a>
									</div>
								</div>
							</div>
						</li>
					</ul>
			
					<span class="separator"></span>
			
					<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<figure class="profile-picture">
								<img src="assets/images/!logged-user.jpg" alt="Joseph Doe" class="img-circle" data-lock-picture="assets/images/!logged-user.jpg" />
							</figure>
							<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
								<span class="name">Wajdi Khlifa</span>
								<span class="role">administrator</span>
							</div>
			
							<i class="fa custom-caret"></i>
						</a>
			
						<div class="dropdown-menu">
							<ul class="list-unstyled">
								<li class="divider"></li>
								<li>
									<a role="menuitem" tabindex="-1" href="pages-user-profile.php"><i class="fa fa-user"></i> My Profile</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="fa fa-lock"></i> Lock Screen</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="pages-signin.php"><i class="fa fa-power-off"></i> Logout</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end: search & user box -->
			</header>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">
				
					<div class="sidebar-header">
						<div class="sidebar-title">
							Navigation
						</div>
						<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
							<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
						</div>
					</div>
				
					<div class="nano">
						<div class="nano-content">
							<nav id="menu" class="nav-main" role="navigation">
								<ul class="nav nav-main">
									<li>
										<a href="index.php">
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>Dashboard</span>
										</a>
									</li>
									<li>
										<a href="mailbox-folder.html">
											<span class="pull-right label label-primary">182</span>
											<i class="fa fa-envelope" aria-hidden="true"></i>
											<span>Mailbox</span>
										</a>
									</li>



									<li class="nav-parent">
										<a>
											<i class="fa fa-map-marker" aria-hidden="true"></i>
											<span>Maps</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="maps-google-maps.html">
													 Basic
												</a>
											</li>

										</ul>
									</li>
									<li class="nav-parent nav-expanded nav-active">
										<a>
											<i class="fa fa-columns" aria-hidden="true"></i>
											<span>Gestion des clients</span>
										</a>
										<ul class="nav nav-children">
											<li class="nav-active">
												<a href="tables-editable reclamations.php">
													 réponse à des réclamations
												</a>
											</li>
											<li>
												<a href="tables-advanced clients.php">
													 afficher liste des clients
												</a>
											</li>
											<li>
												<a href="tables-editable client.php">
													 modifier et supprimer 
												</a>
											</li>
										</ul>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-columns" aria-hidden="true"></i>
											<span>Gestion des produits</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="tables-advanced produits.html">
													  afficher liste des produits 
												</a>
											</li>
											<li>
												<a href="forms-advanced produits.html">
													ajouter 
												</a>
											</li>
											<li>
												<a href="tables-editable produits.html">
													 modifier et supprimer 
												</a>
											</li>
										</ul>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-columns" aria-hidden="true"></i>
											<span>Gestion des factures</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="tables-advanced factures.html">
													 afficher liste des factures
												</a>
											</li>
											<li>
												<a href="forms-advanced factures.html">
													 ajouter  
												</a>
											</li>
											<li>
												<a href="tables-editable factures.html">
													modifier et supprimer 
												</a>
											</li>
										</ul>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-columns" aria-hidden="true"></i>
											<span>Gestion des commandes</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="tables-advanced  commandes.html">
													 afficher liste des commandes
												</a>
											</li>
											<li>
												<a href="forms-advanced commandes.html">
													 ajouter  
												</a>
											</li>
											<li>
												<a href="tables-editable commandes.html">
													 modifier et supprimer 
												</a>
											</li>
										</ul>
									</li>
								    <li class="nav-parent">
										<a>
											<i class="fa fa-columns" aria-hidden="true"></i>
											<span>Gestion De Communauté  </span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="tables-advanced  Communauté.html">
													 afficher liste des événements
												</a>
											</li>
											<li>
												<a href="forms-advanced Communauté .html">
													  ajouter
												</a>
											</li>
											<li>
												<a href="tables-editable Communauté .html">
													 modifier et supprimer 
												</a>
											</li>
											<li>
												<a href="pages-calendar.html">
													 calendrier
												</a>
											</li>

										</ul>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-columns" aria-hidden="true"></i>
											<span>Gestion des promotions et Publictés</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="tables-advanced promotions et Publictés.html">
													 afficher liste de promotions
												</a>
											</li>
											<li>
												<a href="forms-advanced promotions et Publictés.html">
													  ajouter
												</a>
											</li>
											<li>
												<a href="tables-editable promotions et Publictés.html">
													 modifier et supprimer 
												</a>
											</li>
										</ul>
									</li>

						</div>
				
					</div>
				
				</aside>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Réponse à des réclamations</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.php">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Forms</span></li>
								<li><span>Validation</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
					<div class="row">
						<div class="col-md-6">




<?PHP
include "../entities/reclamation.php";
include "../core/reclamation.php";



if (isset($_GET['id_reclamation'])){
	$reclamationC=new ReclamationC();
    $result=$reclamationC->recupererReclamation($_GET['id_reclamation']);
	foreach($result as $row){
		$id_reclamation=$row['id_reclamation'];
		$email=$row['email'];
		$message=$row['message'];

?>
							<form id="form" method="POST"class="form-horizontal">
								<section class="panel">
									<header class="panel-heading">
										<div class="panel-actions">
											<a href="#" class="fa fa-caret-down"></a>
											<a href="#" class="fa fa-times"></a>
										</div>

										<h2 class="panel-title">Réponse à des réclamations</h2>
									</header>
									<div class="panel-body">
										<div class="form-group">
											<label class="col-sm-3 control-label">Full Name <span class="required">*</span></label>
											<div class="col-sm-9">
												<input type="text"  name="id_reclamation" value="<?PHP echo $id_reclamation ?>" class="form-control" placeholder="eg.: John Doe" required/>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label">Email <span class="required">*</span></label>
											<div class="col-sm-9">
												<div class="input-group">
													<span class="input-group-addon">
														<i class="fa fa-envelope"></i>
													</span>
													<input type="email" name="email" class="form-control" placeholder="eg.: email@email.com"value="<?PHP echo $email ?>" required/>
												</div>
											</div>
											<div class="col-sm-9">

											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label">message de client <span class="required">*</span></label>
											<div class="col-sm-9">
												<input name="message" rows="5" class="form-control" value="<?PHP echo $message ?>" placeholder="Describe your skills" required>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label">Répondre <span class="required">*</span></label>
											<div class="col-sm-9">
												<textarea name="reponse" rows="5" class="form-control" placeholder="Describe your skills" required></textarea>
											</div>
										</div>
									</div>

									<footer class="panel-footer">
										<div class="row">
											<div class="col-sm-9 col-sm-offset-3">
											
												<input type="submit"class="btn btn-primary" name="Envoyer" value="Envoyer">
												
											</div>
										</div>
									</footer>
			     <?php 
                         }
                         } 
     if (isset($_POST['Envoyer'])){
     	if ($_POST['id_reclamation']==$id_reclamation) {
								$id_reclamation=$_POST['id_reclamation'];
							$reclamation=new reclamation("","","","","","","",$_POST['reponse']);
							$reclamation1C=new ReclamationC();
							$reclamation1C->modifierReclamation($reclamation,$id_reclamation);
							echo "<script type='text/javascript'>
		             alert('Reclamation répondus ');
		                       
		                      </script>";}

else {echo "<script type='text/javascript'>
		             alert('veuillez vérifier id réclamation de ce client');
		                       
		                      </script>";
}    
}         
						 ?>			
								</section>
							</form>
						</div>
						<!-- col-md-6 -->
					</div>
					<!-- end: page -->
				</section>
			</div>

			<aside id="sidebar-right" class="sidebar-right">
				<div class="nano">
					<div class="nano-content">
						<a href="#" class="mobile-close visible-xs">
							Collapse <i class="fa fa-chevron-right"></i>
						</a>
			
						<div class="sidebar-right-wrapper">
			
							<div class="sidebar-widget widget-calendar">
								<h6>Upcoming Tasks</h6>
								<div data-plugin-datepicker data-plugin-skin="dark" ></div>
			
								<ul>
									<li>
										<time datetime="2014-04-19T00:00+00:00">04/19/2014</time>
										<span>Company Meeting</span>
									</li>
								</ul>
							</div>
			
							<div class="sidebar-widget widget-friends">
								<h6>Friends</h6>
								<ul>
									<li class="status-online">
										<figure class="profile-picture">
											<img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-online">
										<figure class="profile-picture">
											<img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-offline">
										<figure class="profile-picture">
											<img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-offline">
										<figure class="profile-picture">
											<img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
								</ul>
							</div>
			
						</div>
					</div>
				</div>
			</aside>
		</section>

		<!-- Vendor -->
		<script src="assets/vendor/jquery/jquery.js"></script>
		<script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="assets/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		
		<!-- Specific Page Vendor -->
		<script src="assets/vendor/jquery-validation/jquery.validate.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="assets/javascripts/theme.init.js"></script>


		<!-- Examples -->
		<script src="assets/javascripts/forms/examples.validation.js"></script>
	</body>
</html>