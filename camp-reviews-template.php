<?php
  /**
  * Template Name: Camp Reviews template
  * @version 1.0
  * Description: This template will show the camp reviews
  */
  // header template
  get_header();
?>
<section class="camp-review-section">
  <article>
    <?php
      $args2     = array('post-type' => 'camps', 'posts_per_page' => 12);
      $the_query = new WP_Query($args2);
      if($the_query->have_posts()) :
        while($the_query->have_posts()) : $the_query->the_post();
    ?>
    <div>
      <?php if(has_post_thumbnail()): ?>
        <img src="<?php the_post_thumbnail_url('largest'); ?>" alt="camp image">
      <?php endif; ?>
    </div>
    <div>
      <h3><?php the_title(); ?></h3>
      <?php the_excerpt(); ?>
      <!-- <a href=" <?php the_permalink(); ?>">Read More</a> -->
    </div>
    <?php
        endwhile;
        wp_reset_postdata();
        else:
        endif;
    ?>

  </article>
  <div class="custom-post-type">
    <?php the_content(); ?>
  </div>
</section>
<?php
  // footer template
  get_footer();
?>
