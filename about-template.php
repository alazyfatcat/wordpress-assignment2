<?php
  /**
  * Template Name: About page template
  * @version 1.0
  * Description: This template will use the plugin Advanced Custom Fields
  */
  // header template
  get_header();
?>
<main>
  <section>
    <div class="row-one">
      <article>
        <h1><?php the_field('title_1'); ?></h1>
        <p><?php the_field('text_1'); ?></p>
        <img src="<?php the_field('image_one'); ?>" alt="image one">
      </article>
    </div>
  </section>

  </main>

  <div class="about-footer">
    <?php
      // footer template
      get_footer();
    ?>
  </div>
