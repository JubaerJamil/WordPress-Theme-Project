<div id="fun-facts" class="fun-facts section overlay">
    <div class="container">
        <div class="row">

            <?php
					$allItem = new WP_Query(array(
						'post_type' => 'count_down',
						'orderby' => 'ID',
						'order' => 'ASC'
					));

					while($allItem->have_posts()): $allItem->the_post();
				?>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Fun -->
                <div class="single-fun">
                    <i class="<?php echo get_post_meta( get_the_ID(), 'count_Down_Unique_Key', true);?>"></i>
                    <div class="content">
                        <a href="<?php the_permalink();?>">
                            <span class="counter"><?php echo esc_html( the_title() ); ?></span>
                        </a>
                        <p><?php echo esc_html( the_excerpt() );?></p>
                    </div>
                </div>
                <!-- End Single Fun -->
            </div>

            <?php
					endwhile;
				?>
        </div>
    </div>
</div>