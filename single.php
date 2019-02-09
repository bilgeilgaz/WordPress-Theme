<?php get_header(); ?>

<?php if (have_posts()) : the_post(); ?>

<article class="post single">

    <h2><?php the_title(); ?></h2>

    <div class="single-banner"> <?php the_post_thumbnail('banner-image'); ?> </div>

    <p><?php the_content(); ?></p>

    <div class="post-sidebar">  <?php get_sidebar(); ?>  </div>

</article>

  <?php endif; ?>

<div class ="post-nav">

 <?php previous_post_link(); ?>   |   <?php next_post_link(); ?>

</div>

 <?php get_footer(); ?>
