<!DOCTYPE html>

<html lang="en">
<head>
	
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>">

	<meta name="viewport" content="width=device-width">

	<?php wp_head(); ?>

	

	<style>
		
		

	</style>
	
</head>

<body <?php body_class(); ?>>



<header class="header clearfic">

	<a href="<?php bloginfo('url'); ?>" class="logo left"><img src="<?php bloginfo('template_url'); ?>/images/logo.svg" title="Title" alt="Title"></a>
	
	<a class="menu-link right" href="#nav">&#9776; Menu</a>

	<?php

		$defaults = array(
			'menu'            => 'Main Menu',
			'container'       => 'nav',
			'container_class' => 'nav right',
			'container_id'    => 'nav',
			'menu_class'      => ''
		);

		wp_nav_menu( $defaults );

	?>

</header><!-- end header -->