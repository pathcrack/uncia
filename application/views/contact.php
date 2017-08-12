<?php $this->load->view('templates/header'); ?>
<!-- banner -->
	<div class="banner-1">
			<?php $this->load->view('templates/header2'); ?>
			</div>
	</div>
<!-- //banner -->
	<!-- contact -->
	<div class="contact-top">
		<!-- container -->
		<div class="container">
			<div class="w3l-heading">
				<h2 class="w3ls_head">Contact</h2>
			</div>
			<div class="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d158858.18237072596!2d-0.10159865000003898!3d51.52864165000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1436514341845" allowfullscreen></iframe>
			</div>
			<div class="mail-grids">
				<div class="col-md-6 mail-grid-left">
					<h3>Address</h3>
					<h5>Cras porttitor imperdiet volutpat nulla malesuada lectus eros <span>ut convallis felis consectetur ut </span></h5>
					<h4>Headquarters</h4>
					<p>123 T. Globel Place.
						<span>CG 09-123</span>
						London, Ba. 4567
					</p>
					<h4>Get In Touch</h4>
					<p>Telephone: +1 234 567 9871
						<span>FAX: +1 234 567 9871</span>
						E-mail: <a href="mailto:info@example.com">mail@example.com</a>
					</p>
				</div>
				<div class="col-md-6 contact-form">
					<form action="#" method="post">
						<input type="text" name="Name" placeholder="Name" required="">
						<input type="email" name="Email" placeholder="Email" required="">
						<input type="text" name="Subject" placeholder="Subject" required="">
						<textarea name="Message" placeholder="Message" required=""></textarea>
						<input type="submit" value="SEND">
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- //container -->
	</div>
	<!-- //contact -->

<!-- subscribe -->
	<div class="sub-agileitsinfo">  
		<div class="subscribe wthree-sub"> 
			<div class="container">    
				<h3 class="w3ls_head">Subscribe Now</h3>
					<p class="para">Lorem Ipsum is simply dummy text <span> type setting industry</span> esse cillum dolore eu 
					fugiat nulla pariatur. Excepteur sint occaecat.</p>	
				<div class="subsc-agile">
					<form action="#" method="post"> 
						<input type="email" name="email" placeholder="Enter your Email..." required="">
						<input type="submit" value="Subscribe"> 
						<div class="clearfix"> </div>
					
					</form>
				</div>				
			</div>
		</div>
	</div>
	<!-- //subscribe -->

<?php $this->load->view('templates/footer'); ?>