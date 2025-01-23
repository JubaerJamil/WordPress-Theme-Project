<section class="schedule">
    <div class="container">
        <div class="schedule-inner">
            <div class="row">
                <?php
					$allItem = new WP_Query(array(
						'post_type' => 'my_schedule',
						'orderby' => 'ID',
						'order' => 'DESC'
					));

					while($allItem->have_posts()): $allItem->the_post();
				?>
                <div class="col-lg-4 col-md-6 col-12 ">
                    <!-- single-schedule -->
                    <div class="single-schedule first">
                        <div class="inner">
                            <div class="icon">
                                <i class="fa fa-ambulance"></i>
                            </div>
                            <div class="single-content">
                                <span><?php echo esc_html( the_excerpt() );?></span>
                                <h4><?php echo esc_html( the_title() ); ?></h4>

                                <?php
										$content = get_the_content();
										$short_content = substr(strip_tags($content), 0, 110); // Strip HTML tags and limit to 20 characters
									?>
                                <p><?php echo esc_html($short_content); ?></p>

                                <a href="<?php the_permalink();?>">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
					endwhile;
				?>
            </div>
        </div>
    </div>
</section>