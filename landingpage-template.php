<?php
  /**
  * Template Name: Landingpage Template
  * @version 1.0
  * Description: This template will use the plugin Advanced Custom Fields
  */
  // header template
  get_header();
?>
  <main>
    <!-- this is the landing page content above posts in landing page -->

    <div class="head-mast">
      <section class="masthead">
        <div class="space"></div>
        <div class="head-wrap">
          <img src=" <?php echo esc_url( home_url( 'wp-content/uploads/2021/04/BG-2048x1365.png' ) );?>"
          alt="background image">
          <h1><?php the_field('masthead_title'); ?></h1>
          <p><?php the_field('text_1'); ?></p>
        </div>
      </section>
    </div>

    <?php
      while(have_posts()) :
          the_post();
          get_template_part('template-parts/content/content-page');
      endwhile;
     ?>

  </main>


<?php
  // footer template
  get_footer();
?>
