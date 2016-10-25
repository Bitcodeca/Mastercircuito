<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <!-- Chrome, Firefox OS, Opera and Vivaldi -->
        <meta name="theme-color" content="#003278">
        <!-- Windows Phone -->
        <meta name="msapplication-navbutton-color" content="#003278">
        <!-- iOS Safari -->
        <meta name="apple-mobile-web-app-status-bar-style" content="#003278">
		<title>Master Circuito</title>
        <link href="https://fonts.googleapis.com/css?family=Oxygen|Work+Sans" rel="stylesheet">
		<link rel="icon" type="image/x-icon" href="<?php echo get_bloginfo('template_directory');?>/img/favicon/favicon.ico" />
		<link rel="icon" type="image/png" href="<?php echo get_bloginfo('template_directory');?>/img/favicon/favicon.png" />
		<link rel="icon" type="image/gif" href="<?php echo get_bloginfo('template_directory');?>/img/favicon/favicon.gif" />
		<?php wp_head(); ?>
        
	</head>
    <body ng-app="contactApp">
			<header>
				<div class="navbar-fixed">
					<nav id="site-navigation" class="main-navigation grey lighten-3" role="navigation">
						<div class="container-fluid">
                            <a href="#!" class="brand-logo">
                                <img src="<?php echo get_bloginfo('template_directory');?>/img/logo.svg" class="responive-img" height="76px" width="auto">
                            </a>
	   						<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                            
                            <?php  wp_nav_menu( array( 'theme_location' => 'admin', 
                                'menu_id' => 'nav-mobile', 
                                'menu_class' => 'right hide-on-med-and-down', 
                                'walker' => new Materialize_Walker_Desktop_Nav_Menu() ) 
                                ); ?> 
                            
                            
                            <?php  wp_nav_menu( array( 'theme_location' => 'user', 
                                'menu_id' => 'mobile-demo', 
                                'menu_class' => 'side-nav  grey lighten-3', 
                                'walker' => new Materialize_Walker_Desktop_Nav_Menu() ) 
                                ); ?>
						</div>
					</nav>
				</div>
				</header>
		<main>