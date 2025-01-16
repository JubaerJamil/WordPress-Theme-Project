<section class="blog section" id="blog">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Keep up with Our Most Recent Medical News.</h2>
							<img src="<?php echo get_template_directory_uri();?>/assets/img/section-img.png" alt="#">
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
						</div>
					</div>
				</div>
				<div class="row">
					<?php 
						if(have_posts()):
							$count = 0;
						while(have_posts()): the_post();
							$count ++;
							if($count > 6) break;
					?>
					<div class="col-lg-4 col-md-6 col-12 mt-2">
						<!-- Single Blog -->
						<div class="single-news">
							<div class="news-head">
								<?php the_post_thumbnail('full', ['class' => 'img-responsive responsive--full', 'title' => 'Feature image']);?>
							</div>
							<div class="news-body">
								<div class="news-content">
									<div class="date"><?php the_date("d M, Y");?></div>
									<h2><a href="<?php echo get_permalink(); ?>"><?php the_title();?></a></h2>
									<?php
										$content = get_the_content();
										$short_content = substr(strip_tags($content), 0, 70); // Strip HTML tags and limit to 20 characters
									?>
									<p class="text"><?php echo esc_html($short_content); ?>....<a href="<?php echo get_permalink(); ?>" style="color: green;">Read More</a></p> <!-- Output the truncated content -->
								</div>
							</div>
						</div>
						<!-- End Single Blog -->
					</div>
					<?php
						endwhile;
						endif;
					?>
				</div>
			</div>
		</section>