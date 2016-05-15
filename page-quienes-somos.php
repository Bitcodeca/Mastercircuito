<?php get_header(); ?>
<div class="" style="margin-top:40px;">
    <div class="container">
			<hr class="section-heading-spacer2">
 		   <center style="padding-bottom:50px"><div class="embed-responsive embed-responsive-16by9" id="video">
 		   <iframe src="https://www.youtube.com/embed/KMMGiKYWcjA?rel=0&amp;showinfo=0" frameborder="1" allowfullscreen></iframe>
           </div></center>
           </div>
<div class="banner6">
</div>
			<?php
			$x='0';
			$y='0';
            $args = array('order'=> 'ASC', 'numberposts' => 1000 , 'orderby' => 'post_date', 'category_name' =>'quienes somos');
            $postslist = get_posts( $args );
            foreach ($postslist as $post) :  setup_postdata($post); 
				$alltags=get_the_tags();
				if ($x=='0') { if($y==0){ ?> <div class="content-section-a"><?php } else {  ?> <div class="content-section-b"> <?php } }
				foreach($alltags as $latag){
					
					
					
					if( $latag->name=='derecha'){ $loquetu = get_the_title(); ?>
                    		<div <?php if ($loquetu == 'Vision') {echo 'style="padding-top: -70px;"';} ?> class="container">
                            
									<div class="row">
										  <div class="col-md-6 col-sm-12 wow fadeIn" <?php if ($loquetu == 'Mision') {echo 'style="padding-top: 70px;"';} ?>>
                                          		<?php the_post_thumbnail( 'full', array( 'class' => 'img-responsive wow fadeInLeft' , 'style' => 'padding-top: 4%' ) ); ?>
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
										  <div class="col-md-5 wow fadeIn">
												<hr class="section-heading-spacer">
												<div class="clearfix"></div>
												<h2 class="section-heading"><?php the_title(); ?></h2>
												<p class="lead"><?php the_content(); ?></p>
										  </div>
										  <div class="col-md-6 col-sm-12 col-md-offset-1 wow fadeIn">
                                          		<?php the_post_thumbnail( 'full', array( 'class' => 'img-responsive wow fadeInRight' , 'style' => 'padding-top: 4%' ) ); ?>
										  </div>
								 </div>
   							</div>
                                 <br>
                                 
                                 <?php $x++; if ($x=='2'){?></div> <div class="banner"></div> <?php $x='0'; if($y=='0'){$y++;}else{$y--;} } }
						 if($latag->name=='trabajo'){ ?> 
                         
                         
                             <div class="banner2" style=" padding:100px">
    </div>
    <div class="content-section-d">

        <div class="container">

            <div class="row">
                <div class="col-lg-12 col-sm-12 wow fadeIn text-center" data-wow-duration="900ms" data-wow-delay="350ms">
                    <hr class="section-heading-spacer2">
                    <div class="clearfix"></div>
                      <h2 class="section-heading"><?php the_title(); ?></h2>
                    <p class="lead" style="text-align:justify;"><?php the_content(); ?></p>
                </div>
             </div>
        </div>
    </div>
    <div class="banner2">

        <div class="container">

            <div class="row">
            </div>

        </div>
        <!-- /.container -->

    </div>
                         
                         
				
                                 
            		<?php $x++; if ($x=='2' && $latag->name!='trabajo'){?></div> <div class="banner"></div> <?php  $x='0'; if($y=='0'){$y++;}else{$y--;} } }
					} ?>
			<?php endforeach; ?>
</div>
<?php get_footer(); ?>