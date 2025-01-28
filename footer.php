<footer id="footer" class="footer ">
			<!-- Footer Top -->
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
							<?php
							 	$options = get_option( 'myThemeOption' ); // unique id of the framework
								$allSocialdata = $options['all_social_data'];
								// var_dump($jamil);
							 ?>
								<h2>About Us</h2>
								<p><?php echo $options['f_about']; ?></p>
								<!-- Social -->
								<ul class="social">
									<?php 
										foreach($allSocialdata as $socialdata){	
									?>
									<li><a href="<?php echo $socialdata['opt-textarea'];?>"><i class="<?php echo $socialdata['social_icon'];?>"></i></a></li>
									<?php
									}
									?>
								
								</ul>
								<!-- End Social -->
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer f-link">
								<h2>Quick Links</h2>
								<div class="row">
									<div class="col-lg-6 col-md-6 col-12">

									<?php 
										wp_nav_menu( array(
											'theme_location' => 'primary_menu',
											"link_before" => '<i class="fa fa-caret-right" aria-hidden="true"></i>'
										));							 
										?>
										<!-- <ul>
											<li><a href="<?php //echo home_url();?>"><i class="fa fa-caret-right" aria-hidden="true"></i>Home</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>About Us</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Services</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Our Cases</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Other Links</a></li>	
										</ul> -->
									</div>
									<div class="col-lg-6 col-md-6 col-12">
									<?php 
										wp_nav_menu( array(
											'theme_location' => 'footer_menu',
											"link_before" => '<i class="fa fa-caret-right" aria-hidden="true"></i>'
										));							 
										?>
										<!-- <ul>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Consuling</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Finance</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Testimonials</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>FAQ</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Contact Us</a></li>	
										</ul> -->
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>Open Hours</h2>
								<p>Lorem ipsum dolor sit ame consectetur adipisicing elit do eiusmod tempor incididunt.</p>
								<ul class="time-sidual">
									<li class="day">Monday - Fridayp <span>8.00-20.00</span></li>
									<li class="day">Saturday <span>9.00-18.30</span></li>
									<li class="day">Monday - Thusday <span>9.00-15.00</span></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>Newsletter</h2>
								<p>subscribe to our newsletter to get allour news in your inbox.. Lorem ipsum dolor sit amet, consectetur adipisicing elit,</p>
								<form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
									<input name="email" placeholder="Email Address" class="common-input" onfocus="this.placeholder = ''"
										onblur="this.placeholder = 'Your email address'" required="" type="email">
									<button class="button"><i class="icofont icofont-paper-plane"></i></button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Footer Top -->
			<!-- Copyright -->
			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-12">
						<?php
							 	$options = get_option( 'myThemeOption' ); // unique id of the framework
								// var_dump($options);
							 ?>
							<div class="copyright-content">
								<p><?php echo $options['copy_right']; ?> <a href="<?php echo $options['dev_author']; ?>" target="_blank">jubaer jamil</a> </p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Copyright -->
		</footer>
		<!--/ End Footer Area -->
		
		
        <?php wp_footer(); ?>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
		<script>
			$(document).ready(function(){
				$("ul.sub-menu").addClass("dropdown");
			})
		</script>
    </body>
</html>