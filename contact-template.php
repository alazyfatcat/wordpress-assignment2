<?php
  /**
  * Template Name: Contact Us template
  * @version 1.0
  * Description: This template is contact us page template
  */
  // header template
  get_header();
?>
<main>
  <div class="main-block">
    <form action="/">
      <h1>Contact Us</h1>
      <div class="info">
        <input class="fname" type="text" name="name" placeholder="Full name">
        <input type="text" name="name" placeholder="Email">
        <input type="text" name="name" placeholder="Phone number">
      </div>
      <p>Message</p>
      <div>
        <textarea rows="4"></textarea>
      </div>
      <button type="submit" href="/">Submit</button>
    </form>
  </div>
</main>

<?php
  // footer template
  get_footer();
?>
