<?php $this->load->view('templates/header'); ?>
<!-- banner -->
	<div class="banner jarallax">
		<div class="banner-dot">
			<?php $this->load->view('templates/header2'); ?>
			<div class="w3layouts-banner">
				<div class="container">
					<section class="slider">
						<div class="flexslider">
							<ul class="slides">
								<li>
									<div class="agileits_w3layouts_banner_info">
										<h3>Mantenimiento Industrial</h3>
										<p>Limpieza Industrial, Reparación de infraestructura metalica, Aplicación de pintura</p>
									</div>
								</li>
								<li>
									<div class="agileits_w3layouts_banner_info">
										<h3>Acceso Vertical</h3>
										<p>Trabajos en condiciones críticas, Mantenimiento de estructuras de altura, Instalación de anclajes para trabajos en altura</p>
									</div>
								</li>		
								<li>
									<div class="agileits_w3layouts_banner_info">
										<h3>Asesoria y entrenamiento de personal</h3>
										<p>Gestión de seguridad industrial para proyectos mineros, energeticos, hidrocarburos. Entrenamiento y certificación en trabajos en altura, espacios confinados y gestion de riesgo</p>
									</div>
								</li>
							</ul>
						</div>
				</section>
			<!-- flexSlider -->
				<script language="JavaScript" defer src="<?php echo base_url() ?>assets/uncia/js/jquery.flexslider.js"></script>
				<script type="text/javascript">
					$(window).load(function(){
					  $('.flexslider').flexslider({
						animation: "slide",
						start: function(slider){
						  $('body').removeClass('loading');
						}
					  });
					});
				</script>
			<!-- //flexSlider -->
				</div>
			</div>
		</div>
	</div>
<!-- //banner -->
<!-- Specialize-section -->
			<div class="w3-about text-center">
				<div class="container">
					<h2 class="w3ls_head" style="font-size: 54px;">Bienvenido</h2>
					<p class="para" style="font-size: 44px;">conoce nuestros servicios.</p>
					<div class="w3-ab-top">
						<div class="col-md-4 w3l-abt-grid">
							<div class="hi-icon-wrap hi-icon-effect-7 hi-icon-effect-7b">
								<a href="#" class="hi-icon icon1"><i class="fa fa-cog" aria-hidden="true"></i></a>
							</div>
							<h4>Ejecución & desarrollo de trabajos críticos</h4>
							<p style="font-size: 16px;">Nos especializamos en el mantenimiento de infraestructura de cualquier material, mediante servicios como limpieza industrial, reparación de estructuras de altura, aplicación de pintura, etc.</p>

						</div>
						<div class="col-md-4 w3l-abt-grid-1">	
							<div class="hi-icon-wrap hi-icon-effect-7 hi-icon-effect-7b">
								<a href="#" class="hi-icon icon2"><i class="fa fa-sun-o" aria-hidden="true"></i></a>
							</div>
							<h4>Entrenamiento & Certificación de Personal</h4>
							<p style="font-size: 16px;">Si buscas ser compente en trabajos en altura, control en energía peligrosa, espacios confinados, entre otros, entrena con nosotros y obtén una certificación.</p>
						</div>
						<div class="col-md-4 w3l-abt-grid-2">
							<div class="hi-icon-wrap hi-icon-effect-7 hi-icon-effect-7b">
								<a href="#" class="hi-icon icon3"><i class="fa fa-gift" aria-hidden="true"></i></i></a>
							</div>
							<h4>Asesoría & Consultoría (HSE)</h4>
							<p style="font-size: 16px;">Brindamos soporte en elaboración de Matrices de Control de Energía Peligrosa, Asesoramiento para Programas de Riesgo Critico, Auditorías Externas, etc.</p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
	<!-- //Specialize-section -->
	<!-- news -->
	<div class="services news">
		<div class="container"> 
				<div class="new-w3l">
					<h3 class="w3ls_head">Nuestra Experiencia</h3>
					<p class="para">Proyectos concluidos con cero accidentes hasta la fecha</p>			
				</div>
			<div class="news-agileinfo">
				<div class="col-sm-4 news-w3lgrids">
					<div class="news-gridtext">
						<div class="news-w3img">
							<a href="#" data-toggle="modal" data-target="#myModal"><img src="<?php echo base_url() ?>assets/uncia/images/s11.jpg" class="img-responsive zoom-img" alt=""/></a>
						</div>
						<div class="news-w3imgtext">
							<h5 class="w3-agilep">MAR 12, 2017 </h5>
							<h4><a href="#" data-toggle="modal" data-target="#myModal">Fringilla</a></h4> 
							<p>In dignissim nunc curabitur eleifend orci eu sapien imperdiet tempus.</p>
							</div>
					</div>
				</div>
				<div class="col-sm-4 news-w3lgrids">
					<div class="news-gridtext">
						<div class="news-w3img">
							<a href="#" data-toggle="modal" data-target="#myModal"><img src="<?php echo base_url() ?>assets/uncia/images/s10.jpg" class="img-responsive zoom-img" alt=""/></a>
						</div>
						<div class="news-w3imgtext">
							<h5 class="w3-agilep">MAR 4, 2017</h5>
							<h4><a href="#" data-toggle="modal" data-target="#myModal">Fringilla</a></h4> 
							<p>Curabitur eleifend orci eu sapien imperdiet tempus dignissim nunc.</p>
							</div>
					</div>
				</div>
				<div class="col-sm-4 news-w3lgrids">
					<div class="news-gridtext">
						<div class="news-w3img">
							<a href="#" data-toggle="modal" data-target="#myModal"><img src="<?php echo base_url() ?>assets/uncia/images/s12.jpg" class="img-responsive zoom-img" alt=""/></a>
						</div>
						<div class="news-w3imgtext">
							<h5 class="w3-agilep">MAR 21, 2017</h5>
							<h4><a href="#" data-toggle="modal" data-target="#myModal">Sectetur</a></h4> 
							<p>Morbi a vehicula risus, vitae interdum orci Praesent acelei turpis.</p> 
							</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //news --> 
<!-- testimonials -->
	<div class="testimonials">
		<div class="container"> 
			<h3 class="w3ls_head">Nuestros clientes</h3>
					<p class="para">Lorem Ipsum is simply dummy text <span> type setting industry</span> esse cillum dolore eu 
					fugiat nulla pariatur. Excepteur sint occaecat.</p>	
			<div class="testi-w3agileinfo"> 
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active"><a href="#testi" aria-controls="testi" role="tab" data-toggle="tab"><img src="<?php echo base_url() ?>assets/uncia/images/1.png" alt=""/></a></li>
					<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><img src="<?php echo base_url() ?>assets/uncia/images/3.png" alt=""/></a></li>
					<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab"><img src="<?php echo base_url() ?>assets/uncia/images/2.png" alt=""/></a></li>
					<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab"><img src="<?php echo base_url() ?>assets/uncia/images/2.png" alt=""/></a></li>
					<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab"><img src="<?php echo base_url() ?>assets/uncia/images/2.png" alt=""/></a></li>
					<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab"><img src="<?php echo base_url() ?>assets/uncia/images/2.png" alt=""/></a></li>
					<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab"><img src="<?php echo base_url() ?>assets/uncia/images/2.png" alt=""/></a></li>
					<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab"><img src="<?php echo base_url() ?>assets/uncia/images/2.png" alt=""/></a></li>
				</ul> 
				<!-- Tab panes -->
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="testi">
						<h5>FILAN FISTEKU</h5>
						<p>Donec libero dui, scelerisque ac augue id, tristique ullamcorper elit. Nam ultrices, lacus vitae adipiscing aliquet, metus ipsum imperdiet libero, vitae dignissim sapien diam ac nibh convallis.</p>
					</div>
					<div role="tabpanel" class="tab-pane" id="profile">
						<h5>ULLAMCORPER FILAN </h5>
						<p>Scelerisque ac augue id Donec libero dui, , tristique ullamcorper elit. Nam ultrices, lacus vitae adipiscing aliquet, metus ipsum imperdiet libero, vitae dignissim sapien diam ac nibh convallis.</p>
					</div>
					<div role="tabpanel" class="tab-pane" id="messages"> 
						<h5>SCELERISQUE AUGUE</h5>
						<p>Nam ultrices lacus vitae adipiscing aliquet, metus ipsum imperdiet libero, vitae dignissim sapientristique Donec libero dui, scelerisque ac augue id,  ullamcorper elit,diam ac nibh convallis.</p>
					</div>
				</div> 
			</div>
		</div>
	</div>
	<!-- //testimonials -->
<!-- subscribe -->
	<div class="sub-agileitsinfo">  
		<div class="subscribe wthree-sub"> 
			<div class="container">    
				<h3 class="w3ls_head">Suscríbete</h3>
					<p class="para">Lorem Ipsum is simply dummy text <span> type setting industry</span> esse cillum dolore eu 
					fugiat nulla pariatur. Excepteur sint occaecat.</p>	
				<div class="subsc-agile">
					<!--//Cuadro de registro de email-->
					<!--<form action="#" method="post"> 
						<input type="email" name="email" placeholder="Enter your Email..." required="">
						<input type="submit" value="Subscribe"> 
						<div class="clearfix"> </div>
					
					</form>-->
				</div>				
			</div>
		</div>
	</div>
	<!-- //subscribe -->

<!-- footer -->
	<div class="w3-agile-footer"> 
		<div class="container">
			<div class="footer-grids">

				<div class="col-md-3 footer-grid">
					<div class="footer-grid-heading">
						<h4>CONTACTO</h4>
					</div>
					<div class="footer-grid-info">
						<p>UNCIA
							<span>!!DIRECCION!!</span>
						</p>
						<p class="phone">Telefono : !!TELEFONO!!
							<span>Email : <a href="mailto:bpb1594@gmail.com">!!EMAIL!!</a></span>
							<span>FAX : <a href="mailto:example@email.com">123 456 7890</a></span>
						</p>
					</div>
				</div>

				<div class="col-md-3 footer-grid">
					<div class="footer-grid-heading">
						<h4>Navegacion</h4>
					</div>

					<div class="footer-grid-info">
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="about.html">La Empresa</a></li>
							<li><a href="gallery.html">Galeria</a></li>
							<li><a href="contact.html">Contacto</a></li>
							<li><a href="<?php echo site_url('User/signin') ?>"><b>Administrador</b></a></li>
							<!--<li><a href="icons.html">Icons</a></li>
							<li><a href="typography.html">Typography</a></li>-->
						</ul>
					</div>
				</div>

				<div class="col-md-3 footer-grid">
					<div class="footer-grid-heading">
						<h4>Noticias</h4>
					</div>
					<div class="agile-footer-grid">
						<ul class="w3agile_footer_grid_list">
							<li>Ut aut reiciendis voluptatibus maiores <a href="#">http://example.com</a> alias, ut aut reiciendis.
								<span><i class="fa fa-twitter" aria-hidden="true"></i> 02 days ago</span></li>
							<li>Itaque earum rerum hic tenetur a sapiente delectus <a href="#">http://example.com</a><span><i class="fa fa-twitter" aria-hidden="true"></i> 03 days ago</span></li>
						</ul>
					</div>
				</div>

				<div class="col-md-3 footer-grid">
					<div class="footer-grid-heading">
						<h4>Follow Us</h4>
					</div>
					<div class="social">
						<ul>
							<li><a href="https://facebook.com/"><i class="fa fa-facebook"></i></a></li>
							<li><a href="http://linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
							<!--<li><a href="#"><i class="fa fa-rss"></i></a></li>-->
							<!--<li><a href="#"><i class="fa fa-vk"></i></a></li>-->
						</ul>
					</div>
				</div>

				<div class="clearfix"> </div>
			</div>

			<div class="agileits-w3layouts-copyright">
				<p>© 2017 In Industry . All Rights Reserved | Design by <a href="http://w3layouts.com/"> W3layouts</a> </p>
			</div>

		</div>
	</div>
	<!-- //footer -->

	
	<!-- bootstrap-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					In Industry
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<img src="<?php echo base_url() ?>assets/uncia/images/s12.jpg" alt=" " class="img-responsive" />
						<p>Ut enim ad minima veniam, quis nostrum 
							exercitationem ullam corporis suscipit laboriosam, 
							nisi ut aliquid ex ea commodi consequatur? Quis autem 
							vel eum iure reprehenderit qui in ea voluptate velit 
							esse quam nihil molestiae consequatur, vel illum qui 
							dolorem eum fugiat quo voluptas nulla pariatur.
							<i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit 
								esse quam nihil molestiae consequatur.</i></p>
					</div>
				</section>
			</div>
		</div>
	</div>
<!-- //bootstrap-pop-up -->

	<script src="<?php echo base_url() ?>assets/uncia/js/jarallax.js"></script>
	<script src="<?php echo base_url() ?>assets/uncia/js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
</body>	
</html>