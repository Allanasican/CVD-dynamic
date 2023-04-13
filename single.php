<?php get_header(); ?>

<div class="post">
    <div class="container">
        <div class="post__wrapper">
            <h1><?php the_title(); ?></h1>
            <?php echo get_the_post_thumbnail(); ?>
            <small><?php echo get_the_date('M-d-Y')?></small>
            <p><?php the_excerpt(); ?></p>
            <p><?php the_content(); ?></p>
        </div>
    </div>
</div>

<?php get_footer(); ?>