<?php
  /**
  * Template Name: Contact Us template
  * @version 1.0
  * Description: This template is contact us page template
  */
  // header template
  get_header();
?>
<main class="contact-us">
  <div class="contactus-form"><?php dynamic_sidebar('footer_area_three' ); ?></div>
</main>
<div class="contact-footer">
  <?php
    // footer template
    get_footer();
  ?>
</div>
