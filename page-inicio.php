<?php get_header(); ?>
		<style>
		.carousel-fade .carousel-inner .item {
		  -webkit-transition-property: opacity;
				  transition-property: opacity;
		}
		.carousel-fade .carousel-inner .item,
		.carousel-fade .carousel-inner .active.left,
		.carousel-fade .carousel-inner .active.right {
		  opacity: 0;
		}
		.carousel-fade .carousel-inner .active,
		.carousel-fade .carousel-inner .next.left,
		.carousel-fade .carousel-inner .prev.right {
		  opacity: 1;
		}
		.carousel-fade .carousel-inner .next,
		.carousel-fade .carousel-inner .prev,
		.carousel-fade .carousel-inner .active.left,
		.carousel-fade .carousel-inner .active.right {
		  left: 0;
		  -webkit-transform: translate3d(0, 0, 0);
				  transform: translate3d(0, 0, 0);
		}
		.carousel-fade .carousel-control {
		  z-index: 2;
		}
		</style>
    
<div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel" style="margin-top: -1px">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>   
<div class="carousel-inner">
               <?php
 $class_active="active";

 $args=array(
      'post_type'=> 'sliders',
      'post_status' => 'publish',
      'posts_per_page' => 30,
 
     );
$my_query = new WP_Query($args);
if( $my_query->have_posts() ) {
  while ($my_query->have_posts()) : $my_query->the_post(); ?>
             
                <div class="imgcarousel item <?php echo $class_active ;?>">
					<?php the_content();?>          
                  </div>
                   <?php

 $class_active="";
  endwhile;
}
wp_reset_query();  // Restore global post data stomped by the_post().
?>


</div>

<!-- Left and right controls -->
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left glyphicon glyphicon-triangle-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right glyphicon glyphicon-triangle-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a> 
</div>
<!-- <div style="position:fixed; transform: translate(-50%, -50%); top:25%; left:50%; z-index:1000;">
			<img src="<?php echo get_bloginfo('template_directory');?>/img/Logo-Master-Circuitos.png" class="img-responsive resp">
</div> -->
<?php get_footer(); ?>