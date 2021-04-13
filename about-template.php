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
  <section class="all-posts">
      <!-- in this section we will just display all out posts -->
      <?php
        $args = array(
          'post_type' => 'post',
          'post_status' => 'publish'
        );
        $arr_posts = new WP_Query($args);
        if ( $arr_posts->have_posts() ) :
          while ( $arr_posts->have_posts() ) :
          $arr_posts->the_post();
      ?>
      <article>
        <?php
          if ( has_post_thumbnail() ) :
            the_post_thumbnail();
          endif;
        ?>
        <header>
            <h4><?php the_title(); ?></h4>
        </header>
        <div>
            <?php the_excerpt(10); ?>
            <a href="<?php the_permalink(); ?>">Read More</a>
        </div>
    </article>
      <?php
      endwhile;
      endif;
      ?>
    </section>
    <section class="some-posts">
      <!-- in this section we will just display our posts by category -->
       <?php
        $args1 = array(
          'post_type' => 'post',
          'category_name' => 'camps',
          'post_status' => 'publish'
        );
        $arr_posts1 = new WP_Query($args1);
        if($arr_posts1->have_posts()) :
          while ( $arr_posts1->have_posts() ) :
          $arr_posts1->the_post();
        ?>
        <article>
            <?php
              if(has_post_thumbnail()) :
                the_post_thumbnail();
              endif;
            ?>
            <header>
                <h4><?php the_title(); ?></h4>
            </header>
            <div>
                <?php the_excerpt(); ?>
                <?php the_category(); ?>
                <a href="<?php the_permalink(); ?>">Read More</a>
            </div>
        </article>
        <?php
        endwhile;
        endif;
        ?>
    </section>
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
          <?php the_category(); ?>
          <a href=" <?php the_permalink(); ?>">Read More</a>
        </div>
        <?php
            endwhile;
            wp_reset_postdata();
            else:
            endif;
        ?>
      </article>
    </section>

  </main>

<?php
  // footer template
  get_footer();
?>
