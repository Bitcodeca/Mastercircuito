<?php get_header(); ?>
<?php global $mltlngg_current_language; $lenguaje=explode('_', $mltlngg_current_language)[0]; ?>
    <div class="parallax-container ppag">
        <div class=parallax> <img src=<?php echo get_bloginfo('template_directory');?>/img/p2.jpg> </div>
    </div>
    <div class="margintop50" id="enlaces"> 
        <div class="container">
                        <?php if($lenguaje=='es'){ ?>
                            <h2 class="letra1 tituloini letravacia quienesosmostitulo">Enlaces</h2>
                            <h2 class="letraazul letra1 tituloini quienesosmostitulo2">Enlaces</h2>
                        <? } else { ?>
                            <h2 class="letra1 tituloini letravacia quienesosmostitulo">Links</h2>
                            <h2 class="letraazul letra1 tituloini quienesosmostitulo2">Links</h2>
                        <?php } ?>
        </div>
    </div>
    <div class="container margintop50">
        <div class="row center-align">
            <a href="#" target="_blank"><img src="<?php echo get_bloginfo('template_directory');?>/img/enlace/Artboard_7.png" class="responsive-img"></a>
            <a href="http://www.rockwellautomation.com/" target="_blank"><img src="<?php echo get_bloginfo('template_directory');?>/img/enlace/Artboard_8.png" class="responsive-img"></a>
            <a href="http://www.eaton.com/Eaton/index.htm" target="_blank"><img src="<?php echo get_bloginfo('template_directory');?>/img/enlace/Artboard_9.png" class="responsive-img"></a>
            <a href="http://www.capmil.org.ve/" target="_blank"><img src="<?php echo get_bloginfo('template_directory');?>/img/enlace/Artboard_10.png" class="responsive-img"></a>
            <a href="http://anatave.org/ve/" target="_blank"> <img src="<?php echo get_bloginfo('template_directory');?>/img/enlace/Artboard_11.png" class="responsive-img"></a>
            <a href="http://www.cantv.com.ve/" target="_blank"><img src="<?php echo get_bloginfo('template_directory');?>/img/enlace/Artboard_12.png" class="responsive-img"></a>
            <a href="http://www.fondonorma.org.ve/" target="_blank"><img src="<?php echo get_bloginfo('template_directory');?>/img/enlace/Artboard_13.png" class="responsive-img"></a>
            <a href="http://www.digitel.com.ve/Personas/Default.aspx" target="_blank"><img src="<?php echo get_bloginfo('template_directory');?>/img/enlace/Artboard_14.png" class="responsive-img"></a>
            <a href="http://www.movilnet.com.ve/sitio/" target="_blank"><img src="<?php echo get_bloginfo('template_directory');?>/img/enlace/Artboard_15.png" class="responsive-img"></a>
            <a href="http://es.geindustrial.com/" target="_blank"><img src="<?php echo get_bloginfo('template_directory');?>/img/enlace/Artboard_16.png" class="responsive-img"></a>
            <a href="http://www.movistar.com.ve/particulares/default.asp" target="_blank"><img src="<?php echo get_bloginfo('template_directory');?>/img/enlace/Artboard_17.png" class="responsive-img"></a>
        </div>
    </div>
<?php get_footer(); ?>