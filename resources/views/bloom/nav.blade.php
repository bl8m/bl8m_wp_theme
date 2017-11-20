<div class="navbar-blm-container">
	<div class="container">
		<nav class="navbar navbar-expand-md">

			   	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Menu">
    				<span class="navbar-toggler-icon"></span>
 				</button>

			   
			   	<?php
			   	wp_nav_menu([
				    'menu'            => 'top',
				    'theme_location'  => 'primary_navigation',
				    'container'       => 'div',
				    'container_id'    => 'bs4navbar',
				    'container_class' => 'navbar-collapse collapse navbar-blm',
				    'menu_id'         => false,
				    'menu_class'      => 'navbar-nav mx-auto ',
				    'depth'           => 2,
				    'fallback_cb'     => 'bs4navwalker::fallback',
				    'walker'          => new bs4navwalker()
			   	]);
			   	?>

			 </nav>
	</div>
</div>
