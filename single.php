        <?php get_header(); ?>
        <!-- End Header Area -->

        <!-- Breadcrumbs -->
        <div class="breadcrumbs overlay">
            <div class="container">
                <div class="bread-inner">
                    <div class="row">
                        <div class="col-12">
                            <h2>Blog Single</h2>
                            <ul class="bread-list">
                                <li><a href="<?php echo home_url();?>">Home</a></li>
                                <li><i class="icofont-simple-right"></i></li>
                                <li class="active">Blog Single</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumbs -->

        <!-- Single News -->
        <section class="news-single section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="single-main">
                                    <!-- News Head -->
                                    <div class="news-head">
                                        <?php the_post_thumbnail('large', ['class' => 'img-responsive responsive--full', 'title' => 'Feature image']);?>
                                    </div>
                                    <!-- News Title -->
                                    <h1 class="news-title"><a href="news-single.html"><?php the_title();?></a></h1>
                                    <!-- Meta -->
                                    <div class="meta">
                                        <div class="meta-left">
                                            <span class="author"><a href="#">
                                                    <?php echo get_avatar( get_the_author_meta('user_email'), 52, '', 'Author Image' );?>
                                                    <!-- <img src="img/author1.jpg" alt="#"> -->

                                                    <?php the_author_meta('display_name', 1); ?>
                                                </a></span>
                                            <span class="date"><i
                                                    class="fa fa-clock-o"></i><?php echo get_the_date("d M, Y");?></span>
                                        </div>
                                        <div class="meta-right">
                                            <span class="comments"><a href="#"><i class="fa fa-comments"></i><?php echo get_comments_number();?>
                                                    Comments</a></span>
                                            <span class="views"><i class="fa fa-eye"></i>33K Views</span>
                                        </div>
                                    </div>
                                    <!-- News Text -->
                                    <div class="news-text">
                                        <p><?php the_content();?></p>
                                    </div>
                                    <div class="blog-bottom">
                                        <!-- Social Share -->
                                        <ul class="social-share">
                                            <li class="facebook"><a href="#"><i
                                                        class="fa fa-facebook"></i><span>Facebook</span></a></li>
                                            <li class="twitter"><a href="#"><i
                                                        class="fa fa-twitter"></i><span>Twitter</span></a></li>
                                            <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a>
                                            </li>
                                            <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        </ul>
                                        <!-- Next Prev -->
                                        <ul class="prev-next">
                                        <li class="prev">
                                            <?php
                                            $prev_post = get_previous_post();
                                            if (!empty($prev_post)) : ?>
                                                <a href="<?php echo get_permalink($prev_post->ID); ?>">
                                                    <i class="fa fa-angle-double-left"></i>
                                                </a>
                                            <?php endif; ?>
                                        </li>
                                        <li class="next">
                                            <?php
                                            $next_post = get_next_post();
                                            if (!empty($next_post)) : ?>
                                                <a href="<?php echo get_permalink($next_post->ID); ?>">
                                                    <i class="fa fa-angle-double-right"></i>
                                                </a>
                                            <?php endif; ?>
                                        </li>
                                        </ul>
                                        <!--/ End Next Prev -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="comments-form">
                                    <h2>Leave Comments</h2>
                                    
                                    <!-- Contact Form -->
                                        <?php // get_template_part('template-parts/contact');?>
                                        <?php //comment_form(); ?>
                                        <?php comments_template(); ?>
                                    <!--/ End Contact Form -->
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="main-sidebar">
                            <!-- Single Widget -->
                            <div class="single-widget search">
                                <div class="form">
                                    <input type="email" placeholder="Search Here...">
                                    <a class="button" href="#"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                            <!--/ End Single Widget -->
                            <!-- Single Widget -->
                            <div class="single-widget category">
                                <h3 class="title">Blog Categories</h3>
                                <ul class="categor-list">

                                    <?php 
                                    $allCategories = get_categories(array(
                                        'orderby' => 'name',
                                        'order' => 'ASC'
                                    ));

                                    foreach($allCategories as $category){
                                ?>
                                    <li><a href="<?php echo esc_url(get_category_link( $category->term_id)); ?>"><?php echo esc_html($category-> name);?></a></li>
                                    <?php
                                    }
                                ?>

                                </ul>
                            </div>
                            <!--/ End Single Widget -->
                            <!-- Single Widget -->
                            <div class="single-widget recent-post">
                                <h3 class="title">Recent post</h3>
                                <?php 
                                        $recent_posts = new WP_Query([
                                            'posts_per_page' => 5,
                                            // 'category__in'   => wp_get_post_categories(get_the_ID()),
                                            'post__not_in' => [get_the_ID()],
                                            'orderby' => 'date',
                                            'order' => 'DESC'
                                        ]);

                                        if($recent_posts->have_posts()):
                                            while($recent_posts->have_posts()):
                                                $recent_posts->the_post();
                                    ?>
                                        <!-- Single Post -->
                                        <div class="single-post">
                                            <div class="image">
                                                <?php the_post_thumbnail('thumbnail');?>
                                            </div>
                                            <div class="content">
                                                <h5><a href="<?php echo get_permalink(); ?>"><?php the_title();?></a></h5>
                                                <ul class="comment">
                                                    <li><i class="fa fa-calendar" aria-hidden="true"></i><?php the_date("M d, Y");?></li>
                                                    <li><i class="fa fa-commenting-o" aria-hidden="true"></i><?php echo get_comments_number($post->ID);?></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- End Single Post -->
                                <?php
                                    endwhile;
                                    wp_reset_postdata();
                                    else:
                                        echo "no recent post";
                                    endif;    
                                ?>




                            </div>
                            <!--/ End Single Widget -->
                            <!-- Single Widget -->
                            <!--/ End Single Widget -->
                            <!-- Single Widget -->
                            <div class="single-widget side-tags">
                                <h3 class="title">Tags</h3>
                                <ul class="tag">
                                <?php
                                    $tags = get_the_tags(); // Fetch tags of the current post
                                    if ($tags) :
                                        foreach ($tags as $tag) :
                                ?>
                                            <li>
                                                <a href="<?php // echo get_tag_link($tag->term_id); ?>#">
                                                    <?php echo esc_html($tag->name); ?>
                                                </a>
                                            </li>
                                <?php
                                        endforeach;
                                    else :
                                        echo '<p>No tags found.</p>';
                                    endif;
                                ?>
                                    <!-- <li><a href="#">business</a></li> -->
                                </ul>
                            </div>
                            <!--/ End Single Widget -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ End Single News -->

        <!-- Footer Area -->
        <?php get_footer(); ?>