<?php get_header(); ?>

<main class="site-main">
  <section class="hero">
    <div class="container">
      <?php
      if (have_posts()) :
        while (have_posts()) : the_post();
          the_content(); // 🔥 This pulls in content from the WP editor
        endwhile;
      endif;
      ?>
    </div>
  </section>

</main>

<?php get_footer(); ?>
