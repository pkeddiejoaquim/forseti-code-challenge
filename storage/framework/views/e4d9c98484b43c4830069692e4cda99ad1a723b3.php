<?php $__env->startSection('content'); ?>
<?php 

//include_once('source/TLogin.class.php');
//$loginapp = new TLogin;
?>

<header id="header" class="navbar-fixed-top" role="banner">
        
<div id="main-navigation" class="navbar navbar-default">
	<nav class="navbar-collapse navbar-main-navigation" role="navigation">
		<div class="">
			<span class="mais" style="" onclick="openNav()">&#9776;</span><!-- menu lateral / para desativar comente ou exclua -->
			<div class="logo_container">
				<span class="logo_helper"></span>
				<img width='73px;' src="imgs/sistema/ca-branco.png" id="ca"  />				
			</div>
			
			<div class="collapse navbar-collapse blocouser inicio" id="myNavbar"> 
				<ul class="nav navbar-nav navbar-right springy-text .visible-sm-block hidden-xs">
					<li>
						<a class="btLogin" id="myBtnLogin" data-target='#myModalLogin'>
							<span style="font-size:1.0em;" class="glyphicon glyphicon-user"></span>
						</a> 
					</li>
					<li><a>
						<div id="usuario" class="col-md-12" style="color: #ffffff; font-size:15px; font-weight: 600;">
							<b style="color: #ffffff; font-size:15px; font-weight: 600;"><?php //$loginapp->usuario();?></b>
						</div>
						</a>
					</li>						
				</ul>
			</div> 
 		</div>

		<!--</div><!-- .container-->
    </nav><!-- .navbar-collapse -->
</div><!-- #main-navigation-->

<?php $__env->stopSection(); ?>
<?php /**PATH E:\server-www\htdocs\desenv\gis\resources\views/header.blade.php ENDPATH**/ ?>