<?php get_header(); ?>

<article class="post">
  <header class="post-header">
    <h1 class="h1"><?php the_title(); ?></h1>
  </header>
  <section class="post-content">
    <?php the_content(); ?>
  </section>
</article>

<?php get_footer(); ?>