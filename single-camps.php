<?php
/**
* Template Name: Camps Template
* Template Post Type: camps
*/
get_header();
?>
<main class="camp-main">
  <section>
    <div>
      <?php if(has_post_thumbnail()): ?>
        <img src="<?php the_post_thumbnail_url('smallest'); ?>" alt="camp image">
      <?php endif; ?>
    </div>
    <div>
       <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <h1> <?php the_title(); ?> </h1>
         <?php the_content(); ?>
       <?php endwhile; endif; ?>
    </div>
  </section>
</main>

<?php
get_footer();
?>
