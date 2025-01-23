<section class="services section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>We Offer Different Services To Improve Your Health</h2>
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/section-img.png" alt="#">
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
                </div>
            </div>
        </div>
        <div class="row">

            <?php
					$allItem = new WP_Query(array(
						'post_type' => 'my_service',
						'orderby' => 'ID',
						'order' => 'DESC'
					));

					while($allItem->have_posts()): $allItem->the_post();
				?>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="<?php echo get_post_meta( get_the_ID(), 'my_Service_Unique_Key', true);?>"></i>
                    <h4><a href="<?php the_permalink();?>"><?php echo esc_html( the_title() ); ?></a></h4>
                    <p><?php echo esc_html( the_excerpt() );?></p>
                </div>
                <!-- End Single Service -->
            </div>
            <?php
					endwhile;
				?>

        </div>
    </div>
</section>