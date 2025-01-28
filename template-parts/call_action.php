<section class="call-action overlay" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-12">
						<div class="content">
							<?php
								$options = get_option('myThemeOption');
							?>
							<h2>Do you need Emergency Medical Care? Call @ <?php echo esc_html( $options['emergency_number']);?></h2>
							<p><?php echo esc_html( $options['emergency_content']);?></p>
							<div class="button">
								<a href="#" class="btn">Contact Now</a>
								<a href="#" class="btn second">Learn More<i class="fa fa-long-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>