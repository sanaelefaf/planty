<?php
/**
 * The Header for our theme.
 *
 * @package OceanWP WordPress theme
 */

?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="style.css">
	

	<?php wp_head(); ?>
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary mn-4">
      <div class="container-fluid">
     <a class="navbar-brand" href="#"><?php bloginfo('name')?></a>
     <div class="collapse navbar-collapse" id="navbarNav">
         <?php wp_nav_menu([
		 'theme_location'=> 'header',
	     'container' => false,
	     'menu_class' => 'navbar-nav mr-auto'
	      ])?>   
      </div>
  </nav>

