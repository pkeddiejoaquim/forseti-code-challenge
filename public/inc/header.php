<?php 
//include_once('inc/inicio.php');

include_once('source/TLogin.class.php');
$loginapp = new TLogin;
?>

<header id="header" class="navbar-fixed-top" role="banner">
        
<div id="main-navigation" class="navbar navbar-default">
	<nav class="navbar-collapse navbar-main-navigation" role="navigation">
		<div class="">
			<span class="mais" style="" onclick="openNav()">&#9776;</span><!-- menu lateral / para desativar comente ou exclua -->
			<div class="logo_container">
				<span class="logo_helper"></span>
				<img width='73px;' src="assets/images/ca-branco.png" id="appCA"  />				
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
							<b style="color: #ffffff; font-size:15px; font-weight: 600;"><?php $loginapp->usuario();?></b>
						</div>
						</a>
					</li>						
				</ul>
			</div> 
 		</div>

		<!--</div><!-- .container-->
    </nav><!-- .navbar-collapse -->
</div><!-- #main-navigation-->


    <?php include_once 'inc/menu.php' ?>
	
    <!-- modal login-->
    <div id="myModalLogin" class="modal">
        <div class="modal-content">
          <span class="close">&times;</span>
			<div class='modal-header' style='min-height: 45px !important; background-image: linear-gradient(to top, #0075be, #005a9c); '>
				<h4 class='modal-title'> <font style='font-weight: bold; color: #FFFFFF; font-size: 1.0em;'>Login</font></h4>
			</div>

            <div class='modal-body' style="border-radius: 0px 0px 12px 12px; width: 100%; min-height: 65%; background-blend-mode: collor-dodge;">
                <form accept-charset='ISO-8859-1' name='formLogin' id='formLogin' method='post' action="">
                    <label>
						<b>e-mail:</b>
						<input type="text" name="login_mail" id="login_mail"  class="modal-campo email" placeholder="login" />
					</label>
					<br><br>
					<label>
						<b>senha:</b>
						<input type="password" name="login_pwd" id="login_pwd"  class="modal-campo required" min="4" placeholder="password" />
					</label>
					<br><br><br>
						<p class="submit">
						<input type="button" value="OK" onclick="return login_sessao();"><!-- app-function.js -->
						</p>
				</form>						
			</div>
			
			
			<!--<div id='go'><a href="javascript:maria();">função maria</a></div>-->
			
        </div>
    </div>
    <!-- fim modal login -->
	
  </header>
  <!-- #header -->
  <div class="spaceheader"></div>