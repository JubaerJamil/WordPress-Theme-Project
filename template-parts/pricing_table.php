<section class="pricing-table section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>We Provide You The Best Treatment In Resonable Price</h2>
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/section-img.png" alt="#">
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Single Table -->
            <?php
					$allItem = new WP_Query(array(
						'post_type' => 'pricing',
						'orderby' => 'ID',
						'order' => 'DESC'
					));

					while($allItem->have_posts()): $allItem->the_post();
				?>
            <div class="col-lg-4 col-md-12 col-12">
                <div class="single-table">
                    <!-- Table Head -->
                    <div class="table-head">
                        <div class="icon">
                            <i class="<?php echo esc_html( get_post_meta( get_the_ID(), 'pricing_icon', true) );?>"></i>
                        </div>
                        <h4 class="title"><?php echo esc_html( the_title() ); ?></h4>
                        <div class="price">
                            <p class="amount">$<?php echo esc_html( get_post_meta( get_the_ID(), 'price_tk', true) );?>
							<span>/ <?php echo esc_html( get_post_meta( get_the_ID(), 'pricing_duration', true) );?></span></p>
                        </div>
                    </div>
                    <!-- Table List -->
					
					<?php 
						$featureList = get_post_meta( get_the_ID(), 'yourprefix_group_demo', true);
						// var_dump($featureList);
					?>
                    <ul class="table-list">
						<?php
							foreach($featureList as $singleFeature){
						?>
                        <li class="<?php echo $singleFeature['title'] == 'icofont icofont-ui-close' ? 'cross' : '' ;?>">
							<i class="<?php echo esc_html($singleFeature['title']);?>"></i>
							<?php echo esc_html($singleFeature['description']);?>
						</li>
						<?php
						}
						?>
                    </ul>
                    <div class="table-bottom">
                        <a class="btn" href="<?php echo esc_html( get_post_meta( get_the_ID(), 'pricing_url', true) );?>">Book Now</a>
                    </div>
                    <!-- Table Bottom -->
                </div>
            </div>
            <?php
					endwhile;
				?>
            <!-- End Single Table-->

        </div>
    </div>
</section>