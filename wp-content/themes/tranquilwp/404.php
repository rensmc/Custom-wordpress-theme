<?php

/*
 * TEMPLATE NAME: 404 PAGE
 */

get_header(); ?>

    <!-- ==== ABOUT US SECTION ==== -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <h2><?php _e("Let's get back on track:"); ?></h2>
                    <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/divider-purple.png" alt="divider">
                </div><!-- /col -->
            </div><!-- /row -->

            <div class="row">
                <div class="col-sm-6">
                    <?php the_widget('WP_Widget_Archives'); ?>
                </div>
                <div class="col-sm-6">
                    <?php the_widget('WP_Widget_Categories'); ?>
                </div>
                <div class="col-sm-6">
                    <?php the_widget('WP_Widget_Recent_Posts'); ?>
                </div>
                <div class="col-sm-6">
                    <?php the_widget('WP_Widget_Tag_Cloud'); ?>
                </div>
            </div>

            <div class="row facilities">
                <div class="col-sm-3">
                    <a href="">
                        <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/makeup.png" alt="Hair & Make up">Hair &amp; Make Up
                    </a>
                </div><!-- /col -->
                <div class="col-sm-3">
                    <a href="">
                        <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/candles.png" alt="Spa Facilities">Spa Facilities
                    </a>
                </div><!-- /col -->
                <div class="col-sm-3">
                    <a href="">
                        <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/lake.png" alt="Lakeside Retreat">Lakeside Retreat
                    </a>
                </div><!-- /col -->
                <div class="col-sm-3">
                    <a href="">
                        <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/pool.png" alt="All Our Facilities">All Our Facilities
                    </a>
                </div><!-- /col -->
            </div><!-- /row -->
        </div><!-- /container -->
    </section>


<?php get_footer(); ?>