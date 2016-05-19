<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<title>Master Circuito</title>
		<?php wp_head(); ?>
		<link rel="icon" type="image/png" href="<?php echo get_bloginfo('template_directory');?>/img/favicon.ico">
	</head>
		<?php 
		
		if( is_front_page() ):
			$awesome_classes = "overflow-y:hidden; background-color:#111;";
		else:
			$awesome_classes = "";
		endif;
		
	?>
	
	<body style="overflow-x:hidden; <?php echo $awesome_classes ?>">
		<script>
  			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  			ga('create', 'UA-70364405-10', 'auto');
  			ga('send', 'pageview');
		</script>
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                 <a class="navbar-brand" href="#"><img src="<?php echo get_bloginfo('template_directory');?>/img/logonav5.png" class="img-responsive" id="imgnavbar"></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<?php 
								wp_nav_menu(array(
									'theme_location' => 'primary',
									'container' => false,
									'menu_class' => 'nav navbar-nav navbar-right barradenav'
									)
								);
							?>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>