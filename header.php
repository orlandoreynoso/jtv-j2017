<?php 

include get_template_directory().'/libs/headermeta.php';

?>


<body>

<div class="e-menu">
	<div class="container">
		<div class="row">
				<div class="col-md-12">
					<nav class="navbar navbar-default" role="navigation">
					  <div class="container-fluid">
					    <!-- Brand and toggle get grouped for better mobile display -->
					    <div class="navbar-header">
					      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>
			    		  <a class="navbar-brand" href="#">Menu</a> 
					    </div>

					        <?php
					            wp_nav_menu( array(
					                'menu'              => 'primary',
					                'theme_location'    => 'primary',
					                'depth'             => 2,
					                'container'         => 'div',
					                'container_class'   => 'collapse navbar-collapse',
					        		'container_id'      => 'bs-example-navbar-collapse-1',
					                'menu_class'        => 'nav navbar-nav',
					                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
					                'walker'            => new wp_bootstrap_navwalker())
					            );
					        ?>
					    </div>
					</nav>
			</div>
		</div>
	</div>
</div>
<div class="m-header">
<div class="container">
	<div class="row">
		<div class="m-h">
			<div class="col-xs-12 col-sm-4 col-md-4">
				<div class="ls">
					<?php logo(); ?>
				</div>					
			</div>
			<div class="col-xs-12  col-sm-8 col-md-8">
				<div class="sm">
					<div class="social">
						<p>Síguenos en: </p>
						<div>
							<a href="https://www.facebook.com/Jesustvguatemala"><i class="fe fa fa-facebook"></i></a>
							<a href="https://twitter.com/canaljesustv"><i class="tw fa fa-twitter"></i></a>
							<a href="https://www.youtube.com/user/JesustvOnline/"><i class="yo fa fa-youtube"></i></a>
						</div>
					</div>
					<div class="teljtv">
						<p><i class="dir fa fa-map-marker"></i> 6av. 39-35 zona 8</p>
						<p><i class="cel fa fa-phone"></i> (502) 2440 - 4032 / (502) 2440 - 4719</p>
					</div>
				</div>					
			</div>
		</div>
	</div>		
</div>
</div>