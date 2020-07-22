<!DOCTYPE html>
<html>
<head>
	<title></title>

	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?> >

<header class="bg-light">
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light justify-space">
			<a class="navbar-brand" href="#"><img class="img-fluid logo" src="<?php echo(get_template_directory_uri(). '/images/logo.svg'); ?>"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>

			 <div class="collapse navbar-collapse" id="navbarSupportedContent">
			 	<?php 
			 		wp_nav_menu(
			 		 array( 'theme_location'=>'top-menu' ) 
			 		);
			 	 ?>
			 </div>
		</nav>
	</div>
</header>