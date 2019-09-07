<!--Content-->

   <!--testimonials -->
    <div id="testimonials" class="container nopadding nomargin">
      <h1 class="wp-caption"><bold>TESTIMONIALS</bold></h1>

      <div class="cycle-slideshow"
          data-cycle-fx="fade"
          data-cycle-timeout="12000"
          data-cycle-auto-height="container"
          data-cycle-slides="> div"
          >
      <?php if(have_rows('testimonial_repeater', 'options')): ?>
      <?php while(have_rows('testimonial_repeater', 'options')): the_row(); ?>
      <p class="wp-caption-text"><?php the_sub_field('testimonial_text' ); ?></p>
    <?php endwhile; ?>
    <?php endif; ?>
    </div>
      <h2 class="wp-caption"><a href="#" class="btn btn-default"><bold>&#8810;VIEW MORE&#8811;</bold></a></h2>
    </div>

    <!--messege-->
    <div id="messege" class="container nopadding nomargin">
      <h1 class="wp-caption"><bold>SEND A MESSAGE TODAY</bold></h1>
      <div class="col-sm-12"><?php echo do_shortcode("[formidable id=11]"); ?></div>
    </div>

<!-- footer crdits -->
  <div class="footer-wrapper nopadding nomargin container">
    <div class="row">
      <div class="col-xs-12" id="credits">
        <p>&copy; <?php echo date("Y"); ?> The BASS LAKE LODGE, All Rights Reserved<br /></p>
          <p><a href="http://www.prowebmarketing.com/" title="Website Designed by Pro Web Marketing" rel="nofollow" target="_blank">Website Design and Development by: Pro Web Marketing</a></p>
      </div>
    </div>
  </div>

</div>
<script>
jQuery(document).ready(function($){
 $("#topnav").stick_in_parent();
});
</script>

<?php wp_footer(); ?>
</body>
</html>
