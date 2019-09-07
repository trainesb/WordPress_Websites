

<footer>

<!-- Testimonials -->
  <img src="<?php the_field('testimonials_background_img', $post_id ); ?>" al="" class="testimonials-img">
  <div id="testimonials">

  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h2><?php the_field('testimonials_header', $post_id ); ?></h2>
        <p><?php the_field('testimonials_content', $post_id ); ?></p>
      </div>
    </div>
  </div>
</div>


<!-- contact form -->
<div id="contact">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <?php echo do_shortcode("[formidable id=6]"); ?>
      </div>
    </div>
  </div>
</div>

</footer>

<!-- footer credits -->
<div id="credits">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <p><a href="http://www.prowebmarketing.com/" title="Website Designed by Pro Web Marketing" rel="nofollow" target="_blank">DESIGNED &amp; DEVELOPED BY PRO WEB MARKETING</a></p>
      </div>
    </div>
  </div>
</div>

<!-- creates stickynav -->
<script>
$(document).ready(function() {
  //change the integers below to match the height of your upper dive, which I called
  //banner.  Just add a 1 to the last number.  console.log($(window).scrollTop())
  //to figure out what the scroll position is when exactly you want to fix the nav
  //bar or div or whatever.  I stuck in the console.log for you.  Just remove when
  //you know the position.
  $(window).scroll(function () {

    console.log($(window).scrollTop());

    if ($(window).scrollTop() > 138) {
      $('#topnav').addClass('navbar-fixed-top');
    }

    if ($(window).scrollTop() < 139) {
      $('#topnav').removeClass('navbar-fixed-top');
    }
  });
});
</script>

<?php wp_footer(); ?>
</body>
</html>
