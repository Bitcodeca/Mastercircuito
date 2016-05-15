<?php get_header(); ?>
<div class="banner6">
</div>
<div class="" style="margin-top:40px;">
			<?php
            $args = array('order'=> 'ASC','numberposts' => 1000 , 'orderby' => 'post_date', 'category_name' =>'certificaciones');
            $postslist = get_posts( $args );
            foreach ($postslist as $post) :  setup_postdata($post); 
				$alltags=get_the_tags();
				foreach($alltags as $latag){
					
					if( $latag->name=='derecha'){ ?>
							<div class="container">
								<div class="row">
										  <div class="col-md-6 col-sm-12 wow fadeIn">
                                          		<?php the_post_thumbnail( 'full', array( 'class' => 'img-responsive wow fadeInLeft' , 'style' => 'padding-top: 4%' ) ); ?>
										  </div>
										  <div class="col-md-6 wow fadeIn">
												<hr class="section-heading-spacer">
												<div class="clearfix"></div>
												<h2 class="section-heading"><?php the_title(); ?></h2>
												<p class="lead"><?php the_content(); ?></p>
										  </div>
									 </div>
    							</div>
    						
                            
					<?php } if($latag->name=='izquierda'){ ?>
							<div class="container">
								<div class="row">
										  <div class="col-md-6 wow fadeIn">
												<hr class="section-heading-spacer">
												<div class="clearfix"></div>
												<h2 class="section-heading"><?php the_title(); ?></h2>
												<p class="lead"><?php the_content(); ?></p>
										  </div>
										  <div class="col-md-4 col-md-offset-2 col-xs-12">
                                          		<?php the_post_thumbnail( 'full', array( 'class' => 'img-responsive wow fadeInRight' , 'style' => 'padding-top: 4%' ) ); ?>
										  </div>
								</div>
    						</div>
                            
            		<?php }if($latag->name=='platinum'){ ?>
                    
     <div class="banner3">
     <div class=" overlay">
        <div class="container">
			<div class="row">
				<div class="col-md-6 col-xs-12">
                     <?php the_post_thumbnail( 'full', array( 'class' => 'img-responsive wow fadeInLeft' ) ); ?>
				</div>
                <div class="col-md-6 col-sm-12 wow fadeIn" data-wow-duration="900ms" data-wow-delay="350ms">
                <br><br>
                    <h2 class="section-heading"><?php the_title(); ?></h2>
                    <p class="lead"><font class="" size="+1"><?php the_content(); ?></font></p>
           		 </div>
			</div>
        </div>
        </div>
     </div>
            		<?php } } ?>
					<br><br>
			<?php endforeach; ?>
</div>

<?php get_footer(); ?>