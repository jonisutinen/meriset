<?php get_header(); ?>

<div class="container content">
<h1><?php the_title(); ?></h1>
<p>
    <?php 
    if (have_posts()) : while(have_posts()) : the_post();
        the_content();
    endwhile; endif;
    ?>
</p>
</div>

<?php get_footer(); ?>
