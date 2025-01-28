<section class="why-choose section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <?php 
                        $options = get_option('myThemeOption');
                        $loopcontent = $options['loop_content_main'];
                        $loopcontent_2 = $options['loop_content_main_2'];
                        // var_dump($options);
                     ?>
                    <h2><?php echo htmlspecialchars($options['why_head_title'], ENT_QUOTES, 'UTF-8');?></h2>
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/section-img.png" alt="#">
                    <p><?php echo htmlspecialchars($options['head_content'], ENT_QUOTES, 'UTF-8');?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-12">
                <!-- Start Choose Left -->
                <div class="choose-left">
                    <h3>Who We Are</h3>
                    <p><?php echo htmlspecialchars($options['main_content'], ENT_QUOTES, 'UTF-8');?></p>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list">
                            <?php 
                                foreach($loopcontent as $singleData){
                                
                            ?>
                                <li><i class="fa fa-caret-right"></i><?php echo htmlspecialchars($singleData['loop_content']);?> </li>
                            <?php
                                }
                             ?>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="list">
                            <?php 
                                foreach($loopcontent_2 as $singleData){
                                
                            ?>
                                <li><i class="fa fa-caret-right"></i><?php echo htmlspecialchars($singleData['loop_content_2']);?> </li>
                            <?php
                                }
                             ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Choose Left -->
            </div>
            <style>
            .why-choose .choose-right {
                background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/video-bg.jpg');
            }
            </style>
            <div class="col-lg-6 col-12">
                <!-- Start Choose Rights -->
                <div class="choose-right">
                    <div class="video-image">
                        <!-- Video Animation -->
                        <div class="promo-video">
                            <div class="waves-block">
                                <div class="waves wave-1"></div>
                                <div class="waves wave-2"></div>
                                <div class="waves wave-3"></div>
                            </div>
                        </div>
                        <!--/ End Video Animation -->
                        <a href="<?php echo $options['video_link'];?>" class="video video-popup mfp-iframe"><i
                                class="fa fa-play"></i></a>
                    </div>
                </div>
                <!-- End Choose Rights -->
            </div>
        </div>
    </div>
</section>