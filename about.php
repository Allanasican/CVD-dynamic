<?php

/*
    template Name: About
*/

?>
<?php get_header(); ?> 
<section class="banner">
    <div class="container">
        <div class="About__wrapper">
            <div class="about__contents">
                <h3><?php echo get_field('label_title'); ?></h3>
               <h1><?php echo get_field('banner_title'); ?></h1>
                <p><?php echo get_field('banner_content'); ?></p>
                <div class="About__icons">
                    <i class="fa-brands fa-facebook fa-2xl"></i>
                    <i class="fa-brands fa-twitter fa-2xl"></i>
                    <i class="fa-brands fa-instagram fa-2xl"></i>
                    <i class="fa-brands fa-youtube fa-2xl"></i>
                </div>
            </div>
            <?php
                $img = get_field('banner_img');
                if(!empty($img) ):?>
                <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
                <?php endif; ?>

        </div>
    </div>
</div>
<div class="chevron">
    <i class="fa-sharp fa-solid fa-chevron-down fa-2xl"></i>
</section>



<section class="services">
<div class="Recentprojects">
    
    <div class="container">
        <h1><?php echo get_field('label_title'); ?></h1>
        <p><?php echo get_field('banner_title'); ?></p>
        <div class="LatestTrends_wrapper">

            <?php if(have_rows('card_repeater')) : while(the_repeater_field('card_repeater')) : ?>

            <div class="LatestTrend_Card">

            <?php
                $img = get_sub_field('card_image');
                if(!empty($img) ):?>
                <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
                <?php endif; ?>

                <div class="CardContent">
                    <h4><?php echo get_sub_field('label_image'); ?></h4>
                    <p><?php echo get_sub_field('text_image'); ?></p>
                </div>
                </div>
                <?php
                endwhile;
            else: echo "no content";
        endif;
        wp_reset_postdata();
        ?>
            </div>
            </div>
        </div>
    </div>
   
</section>

<section class="section">
            <div class="container">
                <div class="section_text">
                <h3><?php echo get_field('contact_title'); ?></h3>
                <p><?php echo get_field('contact_text'); ?></p>
            </div>
            <div class="section__content">
                <a href="">Contact us</a>
            </div>
        </div>
        <br>




<?php get_footer(); ?>