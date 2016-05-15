<?php get_header(); ?>
	<div class="banner7">
	</div>
	

    <div class="" style="margin-top:40px;">
    <section id="portfolio" class="container">
        <ul id="options" class="portfolio-filter">
            <li><a class="btn btn-default active" href="#" data-filter="*">Todos</a></li>
            <li><a class="btn btn-default" href="#" data-filter=".arrancadores">Arrancadores</a></li>
            <li><a class="btn btn-default" href="#" data-filter=".cajas">Cajas y/o Gabinetes Industriales</a></li>
            <li><a class="btn btn-default" href="#" data-filter=".centro">Centro de Control de Motores</a></li>
            <li><a class="btn btn-default" href="#" data-filter=".productosvarios">Productos Varios</a></li>
            <li><a class="btn btn-default" href="#" data-filter=".tableros">Tableros</a></li>
        </ul>
    <ul class="portfolio-items col-4">

    
    <?php
			$x=1;
            $args = array('order'=> 'ASC', 'numberposts' => 1000 , 'orderby' => 'post_date', 'category_name' =>'productos');
            $postslist = get_posts( $args );
            foreach ($postslist as $post) :  setup_postdata($post); 
				$alltags=get_the_tags();
				foreach($alltags as $latag){ 
					
					
					
					  if( $latag->name=='tableros'){ ?>
                    
                    	<li class="portfolio-item tableros">
                			<div class="item-inner">
                    			<?php the_post_thumbnail( 'full' ); ?>
                    			<h4 class="section-heading"><?php the_title(); ?></h4>
                    			<div class="overlay">
                     				<a class="preview lbp-inline-link-<?php echo $x; ?> cboxElement" href="#"><button class="btn btn-mc">Saber Más</button></a> 
									<div style="display: none;">
											<div id="lbp-inline-href-<?php echo $x; ?>" style="padding:10px; background: #fff;">
												<center><h1 style="text-align: center;"><?php echo the_title();?></h1>
												<br>
												<p><?php echo the_content(); ?></p></center>
											</div>
									</div>									
                    			</div>           
                			</div>           
            			</li>
                        
                    <?php } if( $latag->name=='arrancadores'){ ?>
                    
                 	<li class="portfolio-item arrancadores">
                			<div class="item-inner">
                    			<?php the_post_thumbnail( 'full' ); ?>
                    			<h4 class="section-heading"><?php the_title(); ?></h4>
                    			<div class="overlay">
                     				<a class="preview lbp-inline-link-<?php echo $x; ?> cboxElement" href="#"><button class="btn btn-mc">Saber Más</button></a> 
									<div style="display: none;">
											<div id="lbp-inline-href-<?php echo $x; ?>" style="padding:10px; background: #fff;">
												<center><h1 style="text-align: center;"><?php echo the_title();?></h1>
												<br>
												<p><?php echo the_content(); ?></p></center>
											</div>
									</div>									
                    			</div>           
                			</div>           
            			</li>
                        
                    <?php } if( $latag->name=='centro'){ ?>
                    
                    	<li class="portfolio-item Centro de Control de Motores">
                			<div class="item-inner">
                    			<?php the_post_thumbnail( 'full' ); ?>
                    			<h4 class="section-heading"><?php the_title(); ?></h4>
                    				<div class="overlay">
                     				<a class="lbp-inline-link-<?php echo $x; ?> cboxElement" href="#"><button class="btn btn-mc">Saber Más</button></a> 
									<div style="display: none;">
											<div id="lbp-inline-href-<?php echo $x; ?>" style="padding:10px; background: #fff;">
												<h1 style="text-align: center;"><?php echo the_title();?></h1>
												<br><p><?php echo the_content(); ?></p>
											</div>
									</div>     
                    				</div>           
                			</div>           
            			</li>
                        
                    <?php } if( $latag->name=='subestaciones compactas'){ ?>
                    
                    	<li class="portfolio-item tableros">
                			<div class="item-inner">
                    			<?php the_post_thumbnail( 'full' ); ?>
                    			<h4 class="section-heading"><?php the_title(); ?></h4>
                    				<div class="overlay">
                     				<a class="lbp-inline-link-<?php echo $x; ?> cboxElement" href="#"><button class="btn btn-mc">Saber Más</button></a> 
									<div style="display: none;">
											<div id="lbp-inline-href-<?php echo $x; ?>" style="padding:10px; background: #fff;">
												<h1 style="text-align: center;"><?php echo the_title();?></h1>
												<br><p><?php echo the_content(); ?></p>
											</div>
									</div>        
                    				</div>           
                			</div>           
           				</li>
                        
                   	<?php } if( $latag->name=='productos varios'){ ?>
                    
               	<li class="portfolio-item productosvarios">
                			<div class="item-inner">
                    			<?php the_post_thumbnail( 'full' ); ?>
                    			<h4 class="section-heading"><?php the_title(); ?></h4>
                    			<div class="overlay">
                     				<a class="preview lbp-inline-link-<?php echo $x; ?> cboxElement" href="#"><button class="btn btn-mc">Saber Más</button></a> 
									<div style="display: none;">
											<div id="lbp-inline-href-<?php echo $x; ?>" style="padding:10px; background: #fff;">
												<center><h1 style="text-align: center;"><?php echo the_title();?></h1>
												<br>
												<p><?php echo the_content(); ?></p></center>
											</div>
									</div>									
                    			</div>           
                			</div>           
            			</li>
                        
                  	<?php } if( $latag->name=='cajas/gabinetes industriales'){ ?>
                    
                 <li class="portfolio-item cajas">
                			<div class="item-inner">
                    			<?php the_post_thumbnail( 'full' ); ?>
                    			<h4 class="section-heading"><?php the_title(); ?></h4>
                    			<div class="overlay">
                     				<a class="preview lbp-inline-link-<?php echo $x; ?> cboxElement" href="#"><button class="btn btn-mc">Saber Más</button></a> 
									<div style="display: none;">
											<div id="lbp-inline-href-<?php echo $x; ?>" style="padding:10px; background: #fff;">
												<center><h1 style="text-align: center;"><?php echo the_title();?></h1>
												<br>
												<p><?php echo the_content(); ?></p></center>
											</div>
									</div>									
                    			</div>           
                			</div>           
            			</li>
                        
                        <?php } if( $latag->name=='cavidades'){ ?>
                    
               	<li class="portfolio-item cavidades">
                			<div class="item-inner">
                    			<?php the_post_thumbnail( 'full' ); ?>
                    			<h4 class="section-heading"><?php the_title(); ?></h4>
                    			<div class="overlay">
                     				<a class="preview lbp-inline-link-<?php echo $x; ?> cboxElement" href="#"><button class="btn btn-mc">Saber Más</button></a> 
									<div style="display: none;">
											<div id="lbp-inline-href-<?php echo $x; ?>" style="padding:10px; background: #fff;">
												<center><h1 style="text-align: center;"><?php echo the_title();?></h1>
												<br>
												<p><?php echo the_content(); ?></p></center>
											</div>
									</div>									
                    			</div>           
                			</div>           
            			</li>
                        
                   <?php } $x++; } ?> 
                   
                   <?php endforeach; ?>
                   </ul>
                  </section>

         
<?php get_footer(); ?>    
                 

 
                 
                 
                   
                   
				   
                        
                        
                      
                        
                   
                        
                   
                        
                   
                        
                    
                        
                    
                        
                   
                        
                    
                        
                        
                        
                        
                        
                    
                 
                    
                    
                    
    