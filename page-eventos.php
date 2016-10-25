<?php get_header(); ?>
<?php global $mltlngg_current_language; $lenguaje=explode('_', $mltlngg_current_language)[0]; ?>
    <div class="parallax-container ppag">
        <div class=parallax> <img src=<?php echo get_bloginfo('template_directory');?>/img/p4.jpg> </div>
    </div>
    <div class="margintop50" id="eventos"> 
        <div class="container">
                        <?php if($lenguaje=='es'){ ?>
                            <h2 class="letra1 tituloini letravacia quienesosmostitulo">Eventos</h2>
                            <h2 class="letraazul letra1 tituloini quienesosmostitulo2">Eventos</h2>
                        <? } else { ?>
                            <h2 class="letra1 tituloini letravacia quienesosmostitulo">Events</h2>
                            <h2 class="letraazul letra1 tituloini quienesosmostitulo2">Events</h2>
                        <?php } ?>
        </div>
    </div>
    <div class="margintop50">
        <?php $args=array('post_status' => 'publish', 'posts_per_page' => 100, 'order' => 'DESC', 'post_type'=>'post', 'category_name'=>'eventos'); $my_query = new WP_Query($args);
        if( $my_query->have_posts() ) {
            $x=0;
            while ($my_query->have_posts()) : 
                $my_query->the_post();
                $id = get_the_ID();
                global $dynamic_featured_image;
                $nth_image = $dynamic_featured_image -> get_all_featured_images( $id );
                $num=count($nth_image); ?>
                <div class="<?php if($x==1){ echo "fondogris cogbl"; } else { echo"cogtr";} ?>">
                    <div class="container margintop25 paddingtop25 paddingbot25">
                        <div class="row contenido">
                            <div class="col-xs-12">
                                <img src="<?php echo $nth_image[0]['full']; ?>" class="<?php if($x==0){ echo "left";} else { echo "right"; } ?> responsive-img z-depth-1">
                                <h2 class="letranaranja"><?php the_title(); ?></h2>
                                <?php the_content(); ?>
                            </div>        
                        </div>
                    </div>
                </div>
            <?php $x++; if($x>=2){ $x=0; } endwhile; }  wp_reset_query(); ?>
    </div>
<?php get_footer(); ?>