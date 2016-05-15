<?php get_header(); ?>

          <div class="content-section-c" style="margin-top:50px">
                <div class="row text-center">             
                <h3 class="section-heading" style="color:black">Contáctanos</h3>
      		    </div>
       		</div>
    <section id="contact-info">            
        
        <div class="gmap-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 text-center" style="margin-top:5%;">
                        <address>
                            <h3><i class="glyphicon glyphicon-envelope"> </i> Emails:</h3>
                            <p class="lead">
								 <?php $args=array(
									  'post_type'=> 'contactos',
									  'post_status' => 'publish',
									  'posts_per_page' => 30,
									  'title' => 'emails'
									 );
								$my_query = new WP_Query($args);
								if( $my_query->have_posts() ) {
								  while ($my_query->have_posts()) : $my_query->the_post();
										$titulo=  get_the_title();
										if ($titulo == 'emails'){
											echo the_content();
										}
								  endwhile;
								}	 ?>						
							</p>
                            <h3 style="margin-top:50px;"><i class="glyphicon glyphicon-earphone"> </i> Teléfono:</h3>
                            <p class="lead">
								 <?php $args=array(
									  'post_type'=> 'contactos',
									  'post_status' => 'publish',
									  'posts_per_page' => 30,
									  'title' => 'telefonos'
									 );
								$my_query = new WP_Query($args);
								if( $my_query->have_posts() ) {
								  while ($my_query->have_posts()) : $my_query->the_post();
										$titulo=  get_the_title();
										if ($titulo == 'telefonos'){
											echo the_content();
										}
								  endwhile;
								}	 ?>						
							</p>
                        </address>
                    </div>
                    <div class=" col-md-offset-1 col-md-4">
                        <div class="gmap">
                  			  <div id="map-canvas" style="height:400px; width:400px"></div>
                        </div>
                    </div>
                    <div class=" col-md-offset-1 col-md-3 text-center" style="margin-top:5%;">
                        <address>
                            <h3><i class="glyphicon glyphicon-print"> </i> Fax:</h3>
                            <p class="lead">
								 <?php $args=array(
									  'post_type'=> 'contactos',
									  'post_status' => 'publish',
									  'posts_per_page' => 30,
									  'title' => 'fax'
									 );
								$my_query = new WP_Query($args);
								if( $my_query->have_posts() ) {
								  while ($my_query->have_posts()) : $my_query->the_post();
										$titulo=  get_the_title();
										if ($titulo == 'fax'){
											echo the_content();
										}
								  endwhile;
								}	 ?>						
							</p>                         
                            <h3 style="margin-top:50px;"><i class="glyphicon glyphicon-map-marker"> </i> Dirección:</h3>
                            <p class="lead">
								 <?php $args=array(
									  'post_type'=> 'contactos',
									  'post_status' => 'publish',
									  'posts_per_page' => 30,
									  'title' => 'direccion'
									 );
								$my_query = new WP_Query($args);
								if( $my_query->have_posts() ) {
								  while ($my_query->have_posts()) : $my_query->the_post();
										$titulo=  get_the_title();
										if ($titulo == 'direccion'){
											echo the_content();
										}
								  endwhile;
								}	 ?>						
							</p>
                        </address>
                    </div>
                </div>
            </div>
        </div>
</section>

<div class="content-section-b">
            <div class="row">
        <div class="container">
  
                    <div class="col-md-offset-1 col-md-10 col-xs-12">
                        <form role="form" class="col-xs-12 col-md-12 go-right" action="<?php echo get_bloginfo('template_directory');?>/phpmailer/mail.php" method="post">
                        	<div class="col-md-6 col-sm-12">
                                    <h4 class="wow fadeIn" data-wow-duration="900ms" data-wow-delay="350ms">Empresa *</h4>
                                    <div class="wow fadeIn" data-wow-duration="900ms" data-wow-delay="350ms">
                                        <input id="empresa" name="empresa" type="text" class="form-control" required>
                                    </div>
                                    <h4 class="wow fadeIn" data-wow-duration="900ms" data-wow-delay="350ms">Nombre *</h4>
                                    <div class="wow fadeIn" data-wow-duration="900ms" data-wow-delay="350ms">
                                        <input id="name" name="name" type="text" class="form-control" required>
                                    </div>
                                    <h4 class="wow fadeIn" data-wow-duration="900ms" data-wow-delay="350ms">Teléfono *</h4>
                                    <div class="wow fadeIn" data-wow-duration="900ms" data-wow-delay="350ms">
                                        <input id="telefono" name="telefono" type="tel" class="form-control" required>
                                    </div>
                          </div>
                             <div class="col-md-6 col-sm-12">
                                    <h4 class="wow fadeIn" data-wow-duration="900ms" data-wow-delay="350ms">Fax</h4>
                                    <div class="wow fadeIn" data-wow-duration="900ms" data-wow-delay="350ms">
                                        <input id="fax" name="fax" type="tel" class="form-control">
                                    </div>
                                        <h4 class="wow fadeIn" data-wow-duration="900ms" data-wow-delay="550ms">Correo *</h4>
                                    <div class="wow fadeIn" data-wow-duration="900ms" data-wow-delay="550ms">
                                        <input id="email" name="email" type="email" class="form-control" required>
                                    </div>
                                    <h4 class="wow fadeIn" data-wow-duration="900ms" data-wow-delay="350ms">Motivo *</h4>
                                    <div class="wow fadeIn" data-wow-duration="900ms" data-wow-delay="350ms">
                                        <select id="motivo" name="motivo" class="form-control" required>
                                          <option value="Compra">Compra</option>
                                          <option value="Venta">Venta</option>
                                          <option value="Gerencia">Gerencia</option>
                                          <option value="Otro">Otro</option>
                                          <option value="Gestion">Gestion de Calidad</option>
                                        </select>
                                    </div>
                             </div>
                             <div class="col-md-12">
                                        <h4 class="wow fadeIn" data-wow-duration="900ms" data-wow-delay="750ms">Mensaje *</h4>
                                    <div class="wow fadeIn" data-wow-duration="900ms" data-wow-delay="750ms">
                                        <textarea id="message" name="message" class="form-control" required style="height:200px"></textarea>
                                    </div>
                             </div>
                             <div class="col-md-12">
                            <center><button class="btn btn-mc wow fadeIn" type="submit" formtarget="_new" data-wow-duration="900ms" data-wow-delay="950ms" style="margin-top:50px"><i class="fa fa-send-o"> </i> Enviar</button></center>
                            </div>
                        </form>
                    </div>
            </div>
        </div>   
</div>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
		function initialize() {
		  var myLatlng = new google.maps.LatLng(10.081684, -69.348115);
		  var mapOptions = {
			zoom: 14,
			center: myLatlng
		  };
		
		  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
		
		  var contentString = '<div id="content">'+
			  '<div id="siteNotice">'+
			  '</div>'+
			  '<h3 id="firstHeading" class="firstHeading">Master Circuito</h3>'+
			  '<div id="bodyContent">'+
			  '<p>Calle 25 con Carrera 5, Zona Industrial 1, Barquisimeto Edo. Lara</p>'+
			  ''+
			  '</div>'+
			  '</div>';
		
		  var infowindow = new google.maps.InfoWindow({
			  content: contentString
		  });
		
		  var marker = new google.maps.Marker({
			  position: myLatlng,
			  map: map,
			  title: 'Uluru (Ayers Rock)'
		  });
		  google.maps.event.addListener(marker, 'click', function() {
			infowindow.open(map,marker);
		  });
		}
		
		google.maps.event.addDomListener(window, 'load', initialize);
    </script>
<?php get_footer(); ?>