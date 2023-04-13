<?php

/*
    template Name: Home
*/

?>

<?php get_header(); ?> 
<section class="banner">
    <div class="container">
        <div class="About__wrapper">
            <div class="about__contents">
               <h1><?php echo get_field('banner_title'); ?></h1>
                <p><?php echo get_field('banner_content'); ?></p>
               
                <a href="#" class="myButton">EXPLORE MORE</a>
            </div>
                <?php
                $img = get_field('banner_img');
                if(!empty($img) ):?>
                <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
                <?php endif; ?>
        </div>
    </div>

</section>



<section class="services">
    <div class="container">
        <div class="services__wrapper">
        <?php if(have_rows('serv_card')) : while(the_repeater_field('serv_card')) : ?>
            <div class="services__content">
            <?php
                $img = get_sub_field('card_img');
                if(!empty($img) ):?>
                <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
                <?php endif; ?>
                <h4></h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum impedit accusamus dolores reprehenderit cumque quam, adipisci veritatis culpa, voluptates neque voluptate libero similique vero dolorum! Perferendis, excepturi! Sapiente, deserunt voluptates?</p>

                <a href="#">GET A QUOTE</a>
            </div>
            <?php
                endwhile;
            else: echo "no content";
        endif;
        wp_reset_postdata();
        ?>
        </div>
    </div>
</section>
<!--------About page---->
<section class="aboutme">
            
    <div class="container">

            <div class="about__wrapper">

                <div class="about__img">
                    <img src="<?php echo get_template_directory_uri(); ?>./images/about2.png" alt="">

                </div>
             
             
                <div class="about__contents">
                    
                    <h2 style="color:var(--primary)"><?php echo get_field('about_title'); ?></h2>
                   
                    <p> <?php echo get_field('about_content'); ?></p>

                   
                </div>
            </div>


        </div>


    </section>


<section  class="LatestTrends">
    <div class="container">
        <h2>LatestTrends</h2>
        <p>Latest Happenings in Virtual Space</p>
        <div class="LatestTrends_wrapper">
            <div class="LatestTrend_Card">

                <img src="<?php echo get_template_directory_uri(); ?>./images/latest3.png" alt="" >

                <div class="cardContent">
                    <h4></h4>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis doloribus natus veniam ratione excepturi consectetur, dolorum non nihil aspernatur voluptatem!

                    </p>
                    <a href="#">Readmore</a>
                </div>
            </div>
            <div class="LatestTrend_Card">

                <img src="<?php echo get_template_directory_uri(); ?>./images/latest1.png" alt="" >

                <div class="cardContent">
                    <h4></h4>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis doloribus natus veniam ratione excepturi consectetur, dolorum non nihil aspernatur voluptatem!

                    </p>
                    <a href="#">Readmore</a>
                </div>
            </div>
            <div class="LatestTrend_Card">

                <img src="<?php echo get_template_directory_uri(); ?>./images/latest2.png" alt="" >

                <div class="cardContent">
                    <h4></h4>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis doloribus natus veniam ratione excepturi consectetur, dolorum non nihil aspernatur voluptatem!
                    </p>
                    <a href="#">Readmore</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section">
            <div class="container">
                <div class="section_text">
                <h3>Feel free to talk us about your Projects</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, ab?</p>
            </div>
            <div class="section__content">
                <a href="">Contact us</a>
            </div>
        </div>



    </section>
    <?php wp_footer(); ?>