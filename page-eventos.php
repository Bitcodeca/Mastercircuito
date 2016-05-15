<?php get_header(); ?>
<div class="" style="margin-top:40px;">
    	<div class="container">
			<hr class="section-heading-spacer2">
         </div>
<div class="banner6">
</div>


			<?php
			$x='0';
			$y='0';
            $args = array('order'=> 'ASC', 'numberposts' => 1000 , 'orderby' => 'post_date', 'category_name' =>'eventos' , 'page_name' => 'Eventos');
            $postslist = get_posts( $args );
            foreach ($postslist as $post) :  setup_postdata($post); 
				$alltags=get_the_tags();
				if ($x=='0') { if($y==0){ ?> <div class="content-section-a"><?php } else {  ?> <div class="content-section-b"> <?php } }
				foreach($alltags as $latag){
					
					if( $latag->name=='derecha'){ ?>
                    		<div class="container">
									<div class="row">
										  <div class="col-md-6 col-sm-12 wow fadeIn">
                                          		<?php the_post_thumbnail( 'full', array( 'class' => 'img-responsive wow fadeInLeft' ) ); ?>
										  </div>
										  <div class="col-md-6 wow fadeIn">
												<hr class="section-heading-spacer">
												<div class="clearfix"></div>
												<h2 class="section-heading"><?php the_title(); ?></h2>
												<p class="lead"><?php the_content();  ?></p>
										  </div> 
									 </div>
  							  </div>
                              <br>
                              
                              <?php $x++; if ($x=='2'){?></div> <div class="banner"></div> <?php $x='0'; if($y=='0'){$y++;}else{$y--;} } }
						 if($latag->name=='izquierda'){ ?> 
							<div class="container">
								<div class="row">
										  <div class="col-md-6 wow fadeIn">
												<hr class="section-heading-spacer">
												<div class="clearfix"></div>
												<h2 class="section-heading"><?php the_title(); ?></h2>
												<p class="lead"><?php the_content(); ?></p>
										  </div>
										  <div class="col-md-4 col-md-offset-2 col-xs-12">
                                          		<?php the_post_thumbnail( 'full', array( 'class' => 'img-responsive wow fadeInRight' ) ); ?>
										  </div>
								 </div>
   							</div>
                                 <br>
            		<?php $x++; if ($x=='2'){?></div> <div class="banner"></div> <?php  $x='0'; if($y=='0'){$y++;}else{$y--;} } }
					} ?>
			<?php endforeach; ?>
  </div>          
<?php get_footer(); ?>