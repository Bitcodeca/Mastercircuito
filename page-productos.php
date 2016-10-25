<?php get_header();
    global $mltlngg_current_language;
    $lenguaje=explode('_', $mltlngg_current_language)[0]; 
    if($lenguaje=='es'){ $idioma='espanol'; $descargar='Descargar ficha técnica'; } else { $idioma="ingles"; $descargar='Download technical sheet'; }
?>
    <div class="parallax-container ppag">
        <div class=parallax> <img src=<?php echo get_bloginfo('template_directory');?>/img/p3.jpg> </div>
    </div>
    <div class="margintop75" id="productos"> 
        <div class="container">
                        <?php if($lenguaje=='es'){ ?>
                            <h2 class="letra1 tituloini letravacia">Productos</h2>
                            <h2 class="letraazul letra1 tituloini">Productos</h2>
                        <? } else { ?>
                            <h2 class="letra1 tituloini letravacia">Products</h2>
                            <h2 class="letraazul letra1 tituloini">Products</h2>
                        <?php } ?>
        </div>
    </div>
    <div class="cogtr margintop50">
        <div class="cogbr">
            <div class="container">
                <div class="fondogris paddingleft15 paddingright15 paddingtop10">
                    <div class="row marginauto productos center-align">
                        <form class="controls" id="Filters">
                            <a class="waves-effect waves-light btn btn-mc amber darken-3 filter"  data-filter="*">Todos</a>
                            <?php $grupo = get_terms( 'grupo', array( 'orderby' => 'name', 'hide_empty' => 1 ) );
                            foreach ($grupo as $i) {
                                $string = preg_replace('#[ /-]+#', '-', $i->name);
                                echo '<a class="waves-effect waves-light btn btn-mc amber darken-3 filter" data-filter=".'.$string.'">'.$i->name.'</a>';
                             } ?>
                        </form>
                    </div>
                </div>
                <div class="row margintop25 pagproductos" id="Container">
                    <?php $args=array('post_status' => 'publish', 'posts_per_page' => 100, 'order' => 'DESC', 'post_type'=>'productos', 'tax_query' => array( array(  'taxonomy' => 'idioma', 'field' => 'slug', 'terms' => $idioma ) ) ); $my_query = new WP_Query($args);
                    if( $my_query->have_posts() ) {
                      while ($my_query->have_posts()) : 
                        $my_query->the_post();
                        $id = get_the_ID();
                        $grupoarray = get_the_terms( $post->ID , 'grupo' ); 
                        $grupo=$grupoarray[0]->name; 
                        global $dynamic_featured_image;
                        $nth_image = $dynamic_featured_image -> get_all_featured_images( $id );
                        $num=count($nth_image);
                        $string = preg_replace('#[ /-]+#', '-', $grupo);?>
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 mix <?php echo $string; ?>">
                            <div class="card">
                                <div class="card-image">
                                    <a class="modal-trigger" href="#<?php echo $id; ?>">
                                        <img src="<?php echo $nth_image[0]['full']; ?>">
                                        <span class="card-title black-text"><?php the_title(); ?></span>
                                    </a>
                                </div>
                                <div class="card-action">
                                    <a href="#"><?php echo pdf_attachment_file("1",$descargar); ?></a>
                                </div>
                            </div>
                        </div>
                        <div id="<?php echo $id; ?>" class="modal modal-fixed-footer">
                            <div class="modal-content">
                                <h4><?php the_title(); ?></h4>
                                        <?php for($x=0; $x<$num; $x++){ ?>
                                                 <img class="materialboxed responsive-img" src="<?php echo $nth_image[$x]['full']; ?>">
                                        <?php } ?>
                                <?php the_content(); ?>
                                <p class="center-align"><?php echo pdf_attachment_file("1",$descargar); ?></p>
                            </div>
                            <div class="modal-footer">
                                <a href="#!" class="red white-text modal-action modal-close waves-effect waves-green btn-flat">Cerrar</a>
                            </div>
                        </div>
                    <?php endwhile; }  wp_reset_query(); ?>
                </div>
                <div class="pager-list marginbot10"></div>
            </div>
        </div>
    </div>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>
        jQuery(function(){
            jQuery('#Container').mixItUp({
                animation: { duration: 200 },
                pagination: { limit: 20, loop: true, prevButtonHTML: '<a><h4>Anterior</h4></a>', nextButtonHTML: '<a ><h4>Siguiente</h4></a>' },
                selectors: { filter: '.filter',pagersWrapper: '.pager-list' }
            });
        });
    </script>
<?php get_footer(); ?>