<?php

/*
    template Name: Updates
*/

?>
<?php get_header(); ?>
<section class="update__trends">
    <div class="container">
        <div class="trends__info">
            <h1><?php echo get_field('update_title'); ?></h1>
            <p><?php echo get_field('updates_content'); ?></p>
        </div>
        <div class="trends__wrapper">
       
        <?php

$args = array(

'post_type' => 'blogPost', 
'posts_per_page' => 1,
'tax_query' => array(
  array(
    'taxonomy' =>'category',
    'field' => 'slug',
    'terms' => 'uncategorized'
  ),
),

);
$newQuery = new WP_Query($args);

?>

<?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>
            <div class="trends__wrapper1">
               <div class="trends__content">
               <?php echo get_the_post_thumbnail(); ?>
    
                    <ul>
                        <li><a href=""><i class="fa-solid fa-user"></i><small><?php the_tags(''); ?></small> </a></li>
                        <li><a href=""><i class="fa-solid fa-calendar-days"></i> <small><?php echo get_the_date('M d, Y')?></small></a></li>
                        <li><a href=""><i class="fa-solid fa-tags"></i> </a></li>
                    </ul>
                    <h3><?php the_title(); ?></h3>
                     <p><?php the_excerpt(); ?></p>
    
                     <a href="<?php the_permalink(); ?>">Read more...</a>
               </div> 
               <?php
                endwhile;
            else: echo "no content";
        endif;
        wp_reset_postdata();
        ?>











               <br>
               <div class="trends__content">
                      
        <?php

$args = array(

'post_type' => 'blogPost', 
'posts_per_page' => 1,
'tax_query' => array(
  array(
    'taxonomy' =>'category',
    'field' => 'slug',
    'terms' => 'designconcept'
  ),
),

);
$newQuery = new WP_Query($args);

?>

<?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>
<?php echo get_the_post_thumbnail(); ?>
    
                    <ul>
                        <li><a href=""><i class="fa-solid fa-user"></i><small><?php the_tags(''); ?></small> </a></li>
                        <li><a href=""><i class="fa-solid fa-calendar-days"></i> <small><?php echo get_the_date('M d, Y')?></small></a></li>
                        <li><a href=""><i class="fa-solid fa-tags"> </i></a>
                    </ul>
    
                    <h3><?php the_title(); ?></h3>
                     <p><?php the_excerpt(); ?></p>
    
    
                    <a href="<?php the_permalink(); ?>">Read more...</a>
               </div> 
               <?php
                endwhile;
            else: echo "no content";
        endif;
        wp_reset_postdata();
        ?>
            </div>

            <div class="trends__wrapper2">
                <div class="trends__content2">
                    <h3>CATEGORIES</h3>
                    <table>
                       <tr>
                            <td>Web Design</td>
                            <td>(2)</td>
                       </tr>
                       <tr>
                            <td>Web Development</td>
                            <td>(3)</td>
                        </tr>
                       <tr>
                            <td>Wire Frame</td>
                            <td>(1)</td>
                        </tr>
                       <tr>
                            <td>Vector & Logo</td>
                            <td>(5)</td>
                        </tr>
                       <tr>
                            <td>Social Media</td>
                            <td>(2)</td>
                   </tr>
                    </table>
                </div>
                

                
    
                <div class="trends__content2">
               
                    <h3 id="h3"><?php echo get_field('recent_title'); ?> </h3>
                    <?php if(have_rows('recent_post')) : while(the_repeater_field('recent_post')) : ?>

                    <div class="recent">
                        
                   
            <?php
                $img = get_sub_field('recent_image');
                if(!empty($img) ):?>
                <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
                <?php endif; ?>
                        <p> <b> <?php echo get_sub_field('recent_context'); ?></b> <br> <br> <small><?php echo get_the_date('M d, Y')?></small></p>
                    </div>
                    <?php
                endwhile;
            else: echo "no content";
        endif;
        wp_reset_postdata();
        ?>
                </div>
                





                <div class="trends__content2">
                    <h3 id="h3__1">TAGS</h3>
                    <div class="tags__wrapper">
                        <a href="#">Web Design</a>
                        <a href="#">Wireframe</a>
                        <a class="webdev"  href="#">Web Development</a>
                        <a href="#">Logo</a>
                        <a href="#">Vector</a>
                        <a href="#">Social Media</a>
                    </div>
                </div>
    
        </div>
    </div>
    </section>



                <?php get_footer(); ?>