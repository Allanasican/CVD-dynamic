<?php

/*
    template Name: Services
*/

?>
<?php get_header(); ?>

<section class="banner">
    <div class="container">
        <div class="Aboutme__wrapper">

        <?php if(have_rows('services_repeater')) : while(the_repeater_field('services_repeater')) : ?>

            <div class="Aboutme__content">
                <h1><?php echo get_sub_field('services_title'); ?></h1>
                <p><?php echo get_sub_field('services_content'); ?></p>
             <h5>Price Start at</h5>
             <h2><?php echo get_sub_field('services_price'); ?></h2>
             <p id="Price">Price may vary depending on<br>
design development</p>
            </div>
            <?php
                $img = get_sub_field('services_image');
                if(!empty($img) ):?>
                <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
                <?php endif; ?>

        </div>

        <?php
                endwhile;
            else: echo "no content";
        endif;
        wp_reset_postdata();
        ?>

    </div>
</div>
<div class="chevron">
    <i class="fa-sharp fa-solid fa-chevron-down fa-2xl"></i>
    </div>
</section>

<!----Services----->
<section class="services">
            
    <div class="container">

            <div class="About__wrapper">
            <?php if(have_rows('graphic_repeater')) : while(the_repeater_field('graphic_repeater')) : ?>
                <div class="About__img">
                 
                <?php
                $img = get_sub_field('graphic_image');
                if(!empty($img) ):?>
                <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
                <?php endif; ?>


                </div>
             
             
                <div class="About__content">
                    
                    <h2> <?php echo get_sub_field('graphic_title'); ?>  </h2>
                   
                    <p><?php echo get_sub_field('graphic_content'); ?>     </p>
                </div>
                <?php
                endwhile;
            else: echo "no content";
        endif;
        wp_reset_postdata();
        ?>
            </div>


        </div>
        <div class="chevron1">
            <i class="fa-sharp fa-solid fa-chevron-down fa-2xl"></i>
            </div>

    </section>
    <!---------->
    <section class="banner">
    <div class="container">
        <div class="Aboutme__wrapper">
        <?php if(have_rows('footer_services')) : while(the_repeater_field('footer_services')) : ?>
            <div class="Aboutme__content">
                <h1> <?php echo get_sub_field('services_title'); ?></h1>
                <p><?php echo get_sub_field('services_content'); ?> </p>
            
             <h5>Price Start at</h5>
             <h2><?php echo get_sub_field('services_price'); ?> </h2>
             <p id="Price">Price may vary depending on<br> the task given</p>
            </div>
            <?php
                $img = get_sub_field('footer_image');
                if(!empty($img) ):?>
                <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
                <?php endif; ?>


        </div>
        <?php
                endwhile;
            else: echo "no content";
        endif;
        wp_reset_postdata();
        ?>
    </div>
</div>
<div class="chevron">
    <i class="fa-sharp fa-solid fa-chevron-down fa-2xl"></i>
    </div>
</section>
    <!--------footer------->
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