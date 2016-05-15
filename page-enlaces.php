<?php get_header(); ?>
<div class="" style="margin-top:40px;">
    	<div class="container">
			<hr class="section-heading-spacer2">
         </div>
<div class="banner6">
</div>
         
	<div class="container" style="margin-bottom:80px;"> <center>
							<?php $args = array('order'=> 'ASC', 'numberposts' => 1000 , 'orderby' => 'post_date', 'page_name' =>'Enlaces', 'posts_per_page'   => 1000);
								$postslist = get_posts( $args );
								foreach ($postslist as $post) :  setup_postdata($post);
								$titulo=  get_the_title();
											if ($titulo == 'enlaces'){
												echo the_content();
											}
											endforeach; ?>	</center>
	</div>
  </div>  
<?php get_footer(); ?>