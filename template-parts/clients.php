<div class="clients overlay">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="owl-carousel clients-slider">
                    <?php
					$allItem = new WP_Query(array(
						'post_type' => 'client_section',
						'orderby' => 'ID',
						'order' => 'DESC'
					));

					while($allItem->have_posts()): $allItem->the_post();
				?>
                    <div class="single-clients">
                        <?php the_post_thumbnail();?>
                    </div>
                    <?php
					endwhile;
				?>
                </div>
            </div>
        </div>
    </div>
</div>