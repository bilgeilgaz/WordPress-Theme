
<?php get_header(); ?>

<?php if (have_posts()) :while (have_posts()) : the_post(); ?>

  <article class="post <?php if ( has_post_thumbnail() ) { ?>has-thumbnail <?php } ?>">

    <div class="post-thumbnail">

       <?php the_post_thumbnail('small-thumbnail'); ?>

    </div>

    <h2> <a href= "<?php the_permalink(); ?> "><?php the_title(); ?></a> </h2>

    <p> <?php the_content('Continue reading &raquo;'); ?> </p>

    <p class = "post-info"> <?php the_time('F jS, Y'); ?> </p>

  </article>

<?php endwhile;

   echo paginate_links();

  endif; ?>

 <?php get_footer();?>
