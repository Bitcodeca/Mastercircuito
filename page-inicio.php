<?php get_header(); ?>
<?php global $mltlngg_current_language; $lenguaje=explode('_', $mltlngg_current_language)[0]; ?>
    <div class="parallax-container pini">
        <div class=parallax> <img src=<?php echo get_bloginfo('template_directory');?>/img/p0.jpg> </div>
        <div class="valign-wrapper full">
            <div class="valign marginauto">
                <img src="<?php echo get_bloginfo('template_directory');?>/img/logoini.png" class="responsive-img">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="margintop50">
            <?php if($lenguaje=='es'){ ?>
            <h2 class="letra1 tituloini letravacia">¡Bienvenido!</h2>
            <h2 class="letraazul letra1 tituloini">¡Bienvenido!</h2>
           <?php } else { ?>
            <h2 class="letra1 tituloini letravacia">¡Welcome!</h2>
            <h2 class="letraazul letra1 tituloini">¡Welcome!</h2>
            <?php } ?>
        </div>
    </div>
    <div class="container margintop50">
        <div class="row">
            <div class="col-xs-12">
                    <?php $args=array('post_status' => 'publish', 'posts_per_page' => 1, 'order' => 'ASC', 'post_type'=>'post', 'category_name'=>'quienes-somos'); $my_query = new WP_Query($args);
                    if( $my_query->have_posts() ) {
                        while ($my_query->have_posts()) : 
                            $my_query->the_post();
                            $id = get_the_ID(); ?>
                        <?php the_content(); ?>
                        <?php endwhile; }  wp_reset_query(); ?>
            </div>
        </div>
    </div>
    <div class="fondogrisclaro margintop50">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4 paddingtop50 paddingbot25">
                    <div class="col-xs-4 right-align">
                        <img class="icon icons8-Best-Seller" src="data:image/png;base64,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" width="50" height="50">
                    </div>
                    <div class="col-xs-8 marginbot0">
                        <?php if($lenguaje=='es'){ ?>
                            <h3 class="left-align margintop12">Calidad total</h3>
                        <? } else { ?>
                            <h3 class="left-align margintop12">Total quality</h3>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 paddingtop50 paddingbot25">
                    <div class="col-xs-4 right-align">
                        <img class="icon icons8-Circuit" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAADu0lEQVRoQ+2a/1HbMBTHJXmAphM0TFBFGqDpBMAGMEG7QWECYIKyQZMJSgeQIiZomKAwgJ96zydzirFk2ZYTuMP/xUme9LHeL31lSgghQogrQsgZpXSGnzNfRim1qG1yzmdFUfwmhPCx41hrHwkhtwBwSYUQF5TSH2ONhv5vrb3XWleTzgnhj2etvUGQv5TSeVmWC2OMGQvkTxYhAGBpjHkM3R8zHuecF0WxwZWhUkqLxpRSdIzR5hOfGqKeaz3/bCD7XAn/gWcFORQEAmUDOSTEIBCcMGPsG6X0xEudxlo7w2QxNCYidlcAcIOJIha7vVZECHFGCLkK1ZmhEAl2Hyml50qpVQgmGQQHo5T+dIbWZVleG2PuXJZaMsaWAID3eqXYLrtFUXwnhBy7cU9DMEkgbtmxzsysteda69vQk+lTJ1Lt1rBYJwDgqM3NkkC8qr9WSmFsBK/6t9baBwDgMd/uY1dKiW51bK291FpfNCeQBCKl3GBgl2X5teFOlasBwLl/3/VQO71VG3lOu6kgL6p+3dLgBK21W631UbPKdnUJbd3EULuDQaSUmA4/OJAHrfU8B8hQu0kgQghDKf3c4lpV0APAWdO1/G43kjIrv89hNxWkbvFXSqnTjsKEe4xlKCjr/zayW2sAN3qpqN0kEDfoFl0pln69mvBUluU8lLH6pGiESbGbBOJ6GUy7v9xTwrbherPZ/MHPi8XiC2MMC1edmoOFK9aTYesDALgdWve1mwziwWBcVEHecj3hVjlUfVMayyF23dyqzJq8H3HVuHr6mABc1ronhFSr1NedmnCUUnThpXPjTrvNTJkMEgv00HcpK+E3nEPG6OVaQwbYB8Qg1+oDsy+ISUH2CTEZyL4hJgE5BER2kENBZAU5JMQgkIDagV0stvF8qADxrqK4epBcEGNqh5TyxFrL31WUDnXm0CrK81FCqBt41SoKupnbt3RKR29CRUExTWv9MdabvasoLYdRSVlrKhWlj93aZUPqTCpIdhXFiQrJdj0pdgsAeM65c8yQBJJbRanjJtUu/p5zPmeMrdz22jgt7BkmCcQTHkarKM3g97IcfrWjznDOjxljWGirgx7Xxty1wSSD5FBRQhnMwcTUmecVCMH0AnFLjEdvvVWUri1yRJ3BI71PhJAoTFEU/3rJQV0Tyv19aAWa9+vzzEnloLFwiTDVMK8axHPpF4HegHz9ICkw1YoIIbYYVLleqhnrTqH/x1JwDTLpa05TgWE2898Dq94IwjbAvXiG6e6tXDvbhf8ZtJHGIkVbewAAAABJRU5ErkJggg==" width="50" height="50">
                    </div>
                    <div class="col-xs-8 marginbot0">
                        <?php if($lenguaje=='es'){ ?>
                            <h3 class="left-align margintop12">Alta tecnología</h3>
                        <? } else { ?>
                            <h3 class="left-align margintop12">Technology</h3>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 paddingtop50 paddingbot25">
                    <div class="col-xs-4 right-align">
                        <img class="icon icons8-Maintenance" src="data:image/png;base64,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" width="50" height="50">
                    </div>
                    <div class="col-xs-8">
                        <?php if($lenguaje=='es'){ ?>
                            <h3 class="left-align margintop12">Eficiencia</h3>
                        <? } else { ?>
                            <h3 class="left-align margintop12">Efficiency</h3>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fondogris cogtl">
        <div class="cogbr">
            <div class="container paddingtop25 paddingbot25">
                <div class="row">
                        <?php if($lenguaje=='es'){ ?>
                            <h2 class="marginbot25 letraazul letra1"> Últimas Noticias </h2>
                        <? } else { ?>
                            <h2 class="marginbot25 letraazul letra1"> Lastest News </h2>
                        <?php } ?>
                    
                    
                    <?php $args=array('post_status' => 'publish', 'posts_per_page' => 3, 'order' => 'DESC', 'post_type'=>'post', 'category_name'=>'eventos'); $my_query = new WP_Query($args);
                    if( $my_query->have_posts() ) {
                        while ($my_query->have_posts()) : 
                            $my_query->the_post();
                            $id = get_the_ID();
                            global $dynamic_featured_image;
                            $nth_image = $dynamic_featured_image -> get_all_featured_images( $id );
                            $num=count($nth_image); ?>
                                <div class="col-xs-12 col-sm-4">
                                    <div class="card">
                                        <div class="card-image waves-effect waves-block waves-light">
                                            <img src="<?php echo $nth_image[0]['full']; ?>" class="responsive-img z-depth-1 activator">
                                        </div>
                                        <div class="card-content">
                                          <span class="card-title activator grey-text text-darken-4"><?php the_title(); ?><i class="material-icons right">more_vert</i></span>
                                            <?php if($lenguaje=='es'){ ?>
                                                  <p><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Eventos' ) ) ); ?>">Ver Noticia</a></p>
                                            <? } else { ?>
                                                  <p><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Eventos' ) ) ); ?>">Read more</a></p>
                                            <?php } ?>
                                        </div>
                                        <div class="card-reveal">
                                          <span class="card-title grey-text text-darken-4"><?php the_title(); ?><i class="material-icons right">close</i></span>
                                          <?php the_content(); ?>
                                        </div>
                                     </div>
                                </div>
                        <?php endwhile; }  wp_reset_query(); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row paddingtop50 paddingbot25  valign-wrapper">
                    <?php $args=array('post_status' => 'publish', 'posts_per_page' => 1, 'order' => 'ASC', 'post_type'=>'post', 'category_name'=>'certificaciones'); $my_query = new WP_Query($args);
                    if( $my_query->have_posts() ) {
                        while ($my_query->have_posts()) : 
                            $my_query->the_post();
                            $id = get_the_ID();
                            global $dynamic_featured_image;
                            $nth_image = $dynamic_featured_image -> get_all_featured_images( $id );
                            $num=count($nth_image); ?>
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <img src="<?php echo $nth_image[0]['full']; ?>" class="valign activator marginauto z-depth-1 responsive-img">
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <?php if($lenguaje=='es'){ ?>
                                    <h2 class="marginbot10 letraazul letra1"> Nuestro trabajo </h2>
                                <? } else { ?>
                                    <h2 class="marginbot10 letraazul letra1"> Our work </h2>
                                <?php } ?>
                                <h2 class="marginbot10 letraazul letra1"> <?php the_title(); ?> </h2>
                                <?php the_content(); ?>
                            </div>
                        <?php endwhile; }  wp_reset_query(); ?>
        </div>
    </div>
<?php get_footer(); ?>