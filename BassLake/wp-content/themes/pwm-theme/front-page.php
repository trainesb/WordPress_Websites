<?php get_header(); ?>

<!-- about -->
<div class="about-section">
<div class="container nomargin nopadding">
  <h1><?php the_field('header', $post_id ); ?></h1>
  <p class="wp-caption-text"><?php the_field('about_content', $post_id ); ?><p>
</div>
<div class="center"><a href="http://bll.prowebtesting.com/about/" class="btn btn-default">&#8810;READ MORE&#8811;</a></div>
</p>
<!-- readmore btn and gallery imgs -->

<!--slide md and lg -->
<div class="gallery-section">
<div class="container-fluid nopadding">
<div class="col-sm-12"><?php the_field('photo_carousel', $post_id ); ?></div>
</div></div>

      <!-- details -->
      <div class="details-section">
      <div class="container-fluid nopadding">
      <div class="icon-wrapper">
        <h1>DETAILS</h1>
      <div class="col-container">

        <div class="col icon">
          <div class="icon-content"><img src="<?php bloginfo( 'template_directory' ); ?>/img/house.png" alt="">
          <p class="wp-caption-icon"><strong><?php the_field('house_header', $post_id ); ?></strong><br />
            <?php the_field('house_content', $post_id ); ?></p>
        </div></div>

        <div class="col icon1">
          <div class="icon-content"><img src="<?php bloginfo( 'template_directory' ); ?>/img/sleep.png" alt="">
          <p class="wp-caption-icon"><strong><?php the_field('sleep_header', $post_id ); ?></strong><br />
            <?php the_field('sleep_content', $post_id ); ?></p>
        </div></div>

        <div class="col icon">
          <div class="icon-content"><img src="<?php bloginfo( 'template_directory' ); ?>/img/bed.png" alt="">
          <p class="wp-caption-icon"><strong><?php the_field('bedroom_header', $post_id ); ?></strong><br />
            <?php the_field('bedroom_content', $post_id ); ?></p>
        </div></div>


        <div class="col icon1">
          <div class="icon-content"><img src="<?php bloginfo( 'template_directory' ); ?>/img/bathroom.png" alt="">
          <p class="wp-caption-icon"><strong><?php the_field('bathroom_header', $post_id ); ?></strong><br />
            <?php the_field('bathroom_content', $post_id ); ?></p>
        </div></div>


        <div class="col icon">
          <div class="icon-content"><img src="<?php bloginfo( 'template_directory' ); ?>/img/moon.png" alt="">
          <p  class="wp-caption-icon"><strong><?php the_field('min-stay_header', $post_id ); ?></strong><br />
            <?php the_field('min-stay_content', $post_id ); ?></p>
        </div></div>

      </div>
    </div></div></div></div>


<?php get_footer(); ?>
