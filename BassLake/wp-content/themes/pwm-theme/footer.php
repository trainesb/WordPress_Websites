<!--Content-->
<?php if( is_front_page() ) : ?>
<!--testimonials -->
<div class="testimonial-section">
<div class="container nomargin nopadding">
    <h1>TESTIMONIALS</h1>
    <div class="col-xs-12">
    <div class="cycle-slideshow"
    data-cycle-fx="fade"
    data-cycle-timeout="12000"
    data-cycle-auto-height="container"
    data-cycle-slides="> div"
    >
    <?php if(have_rows('testimonial_repeater', 'options')): ?>
    <?php while(have_rows('testimonial_repeater', 'options')): the_row(); ?>
    <div><p><?php the_sub_field('testimonial_text' ); ?></p></div>
    <?php endwhile; ?>
    <?php endif; ?>
    </div></div>
    <div class="center"><a href="<?php the_field('testimonial_button_link', 'options' ); ?>" class="btn btn-default">&#8810;VIEW MORE&#8811;</a></div>
</div></div>
<?php endif; ?>

<?php if(!is_page('267')) : ?>
    <!--messege-->
    <div class="messege-section">
    <div class="container-fluid nopadding">
      <h1>SEND A MESSAGE TODAY</h1>
      <div class="col-sm-12"><?php echo do_shortcode("[formidable id=11]"); ?></div>
    </div></div>
<?php endif; ?>
<!-- Content Wrapper closing DIV -->
</div>

<!-- footer crdits -->
  <div class="footer-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-xs-12" id="credits">
        <p>&copy; <?php echo date("Y"); ?> The BASS LAKE LODGE, All Rights Reserved</p>
<div class="col-sm-4 hidden-xs"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-phone fa-stack-1x fa-inverse"></i></span> <a href="tel:+1<?php the_field('phone', 'options' ); ?>"><?php the_field('phone', 'options' ); ?></a></div>
<div class="col-sm-4 hidden-xs"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span> <a href="mailto:<?php the_field('email', 'options' ); ?>"><?php the_field('email', 'options' ); ?></a></div>
<div class="col-sm-4 hidden-xs"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-facebook fa-stack-1x fa-inverse"></i></span><a href="<?php the_field('facebook_link', 'options' ); ?>" target="_blank">Follow us on Facebook</a></div>

<div class="col-xs-12 header-icons-mobile hidden-sm hidden-md hidden-lg"><a href="tel:+1<?php the_field('phone', 'options' ); ?>"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-phone fa-stack-1x fa-inverse"></i></span></a>
<a href="mailto:<?php the_field('email', 'options' ); ?>"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></a>
<a href="<?php the_field('facebook_link', 'options' ); ?>" target="_blank"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-facebook fa-stack-1x fa-inverse"></i></span></a></div>
          <p><a href="http://www.prowebmarketing.com/" title="Website Designed by Pro Web Marketing" rel="nofollow" target="_blank">Website Design and Development by: Pro Web Marketing</a></p>
      </div>
    </div>
  </div></div>

<!--script for gallery slide -->


<?php wp_footer(); ?>
<script>
$(document).on("scroll", function() {

  if($(document).scrollTop()>530) { //when scrolled 100px...
    $("nav").removeClass("nonstiky").addClass("navbar-fixed-top"); //replace class="topnavstuff" with class="topnavstuffsmall"
  } else {
    $("nav").removeClass("navbar-fixed-top").addClass("nonstiky");
  }

});
</script>


</body>

</html>
