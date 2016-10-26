<?php get_header(); ?>
<?php global $mltlngg_current_language; $lenguaje=explode('_', $mltlngg_current_language)[0]; ?>
    <div class="parallax-container ppag">
        <div class=parallax> <img src=<?php echo get_bloginfo('template_directory');?>/img/p2.jpg> </div>
    </div>
    <div class="margintop50" id="contacto"> 
        <div class="container">
                        <?php if($lenguaje=='es'){ ?>
                            <h2 class="letra1 tituloini letravacia">Contacto</h2>
                            <h2 class="letraazul letra1 tituloini">Contacto</h2>
                        <? } else { ?>
                            <h2 class="letra1 tituloini letravacia">Contact</h2>
                            <h2 class="letraazul letra1 tituloini">Contact</h2>
                        <?php } ?>
        </div>
    </div>
    <div class="margintop50">
        <div class="row">
            <section id="contact-info">
                <div class="gmap-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-4 text-center" style="margin-top:5%;">
                                <address>
                                    <h3 class="letra1 letraazul"><i class="material-icons">mail_outline</i> Emails:</h3>
                                    <p class="lead">	
                                        ventas@mastercircuito.com <br>
                                        mastercircuitoca@cantv.net<br>
                                        compras@mastercircuito.com<br>
                                        mastercircuitoventas@gmail.com				
                                    </p>
                                    <h3 class="letra1 letraazul" style="margin-top:50px;"><i class="material-icons">phone</i> 
                                        <?php if($lenguaje=='es'){ ?>
                                            Teléfono:
                                        <? } else { ?>
                                            Phone Number:
                                        <?php } ?>
                                    </h3>
                                    <p class="lead">	
                                        0251-2372671 (Master)
                                    </p>
                                </address>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-4">
                                <div class="gmap">
                                      <iframe id="map-canvas" src="https://www.google.com/maps/d/embed?mid=1H35J3MhHIIAZlynhYtdqIh4_NPA"></iframe>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-offset-1 col-lg-3 text-center" style="margin-top:5%;">
                                <address>
                                    <h3 class="letra1 letraazul"><i class="material-icons verticalalign">inbox</i> Fax:</h3>
                                    <p class="lead">			
                                        0251-2370334<br>
                                        0251-2375186
                                    </p>                         
                                    <h3 class="letra1 letraazul" style="margin-top:50px;"><i class="material-icons">location_on</i> 
                                        <?php if($lenguaje=='es'){ ?>
                                            Dirección:
                                        <? } else { ?>
                                            Direction:
                                        <?php } ?>
                                    </h3>
                                    <p class="lead">	
                                        Calle 25 con Carrera 5, Zona Industrial 1, Barquisimeto Edo. Lara. Venezuela
                                    </p>
                                </address>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="container margintop50">
            <div class="row">
                
                        <div ng-controller=ContactController>
                            <form ng-submit=submit(contactform) name=contactform method=post role=form> 
                                
                                <div class="col-xs-12">
                                    <div class="col-xs-12 col-sm-6">
                                        <span class=input-field ng-class="{ 'has-error': contactform.empresa.$invalid && submitted }">
                                            <input id=empresa type=text class=validate ng-model=formData.empresa placeholder=Empresa>
                                        </span>
                                        <span class=input-field ng-class="{ 'has-error': contactform.nombre.$invalid && submitted }">
                                            <input id=nombre type=text class=validate ng-model=formData.nombre placeholder=Nombre>
                                        </span>
                                        <span class=input-field ng-class="{ 'has-error': contactform.telefono.$invalid && submitted }">
                                            <input id=telefono type=number class=validate ng-model=formData.telefono placeholder=Teléfono>
                                        </span>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <span class=input-field ng-class="{ 'has-error': contactform.fax.$invalid && submitted }">
                                            <input id=fax type=number class=validate ng-model=formData.fax placeholder=Fax>
                                        </span>
                                        <span class=input-field ng-class="{ 'has-error': contactform.email.$invalid && submitted }">
                                            <input id=email type=email class=validate ng-model=formData.email placeholder=Email>
                                        </span>
                                        <span class=input-field ng-class="{ 'has-error': contactform.motivo.$invalid && submitted }">
                                            <select ng-model=formData.motivo id="motivo" class="validate">
                                              <option value="" disabled selected>Seleccionar Motivo</option>
                                              <option value="compra">Compra</option>
                                              <option value="venta">Venta</option>
                                              <option value="gerencia">Gerencia</option>
                                              <option value="otro">Otro</option>
                                              <option value="gestion-de-calidad">Gestión de calidad</option>
                                            </select>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="col-xs-12">
                                        <div class=input-field ng-class="{ 'has-error': contactform.message.$invalid && submitted }">
                                            <textarea id=message class=materialize-textarea ng-model=formData.message placeholder=Mensaje></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="center-align margintop25 marginbot10">
                                    <button class="waves-effect btn-enviar waves-light btn amber darken-3" type=submit ng-disabled=submitButtonDisabled>ENVIAR</button>
                                </div>
                                
                            </form>
                            <p ng-class="result" style="padding: 15px; margin: 0;">{{ resultMessage }}</p>
                        </div>
                
            </div>
        </div>
    </div>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.16/angular.js"></script>
    <script src="<?php echo get_bloginfo('template_directory');?>/app.js"></script>
    <script src="<?php echo get_bloginfo('template_directory');?>/controllers.js"></script>
<?php get_footer(); ?>