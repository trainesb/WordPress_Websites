<footer style="background-color: #000000;">


<?php if( is_front_page() ) : ?>

<div class="callout-section">
<div class="container">
<div class="row">

	<?php if( get_field('callout_blocks', $post_id ) ): $cob = get_field('callout_blocks', $post_id ); switch (count($cob)) { case 0: $divclass = false; break; case 1: $divclass = "col-sm-12"; break; case 2: $divclass = "col-sm-6"; break; case 3: $divclass = "col-sm-4";break; case 4: $divclass = "col-sm-3"; break; } ?>
    <?php while( has_sub_field('callout_blocks', $post_id ) ): ?>
    <div class="col-xs-12 <? echo $divclass; ?>">
          <div class="callout-boxes equalheight">
            <h1><?php the_sub_field('co_header' ); ?></h1>
            <div class="callout-content">
              <p><?php the_sub_field('co_content' ); ?></p>

              <a href="<?php the_sub_field('co_button_link' ); ?>" class="btn btn-default" role="button"><?php the_sub_field('co_button_label' ); ?></a>

          </div>
        </div>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
<?php wp_enqueue_script('equalheight'); wp_enqueue_script('equalheight2'); ?>
</div></div></div></div>
<?php endif; ?>




<!-- banner2 -->
<div class="container-fluid" style="background-color: #3baf29;">
  <div class="col-xs-12" id="bannertwo">
    <p class="bannertwoitem">BEST OF TRAVERSE CITY REWARDS</p>
  </div>
 </div>



<!-- awrads -->
<div class="container-fluid">
  <div class="col-xs-12" id="awards" style="background-color: #ffffff;">
<!-- img one -->
<img class="awardone" src="http://tbk.prowebtesting.com/wp-content/uploads/2015-award.jpg" alt="" width="168" height="236" />

<!-- img two -->

<div><img  class="awardtwo" src="http://tbk.prowebtesting.com/wp-content/uploads/2016-award.jpg" alt="" width="166" height="236" />

<!-- img three -->
<img class="awardthree"  src="http://tbk.prowebtesting.com/wp-content/uploads/new2017-award.jpg" alt="" width="205" height="236" />
  </div>
</div> </div>



<!-- banner3 -->
<div class="container-fluid" >
  <div class="col-xs-12" id="bannerthree">
    <p class="bannerthreeitem">Not Sure the Best Solution for Your Business Needs?</p>
    <button>Let Us Help You <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
  </div>
</div>


<!--google maps -->
<div class="container-fluid">
  <div class="col-xs-12" style="background-color: #3e601b;">
    <div class="map-section">
      <div class="container-fluid nopadding">
        <div class="overlay" onClick="style.pointerEvents='none'"></div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4765.168925426523!2d-85.59729373109249!3d44.752533933985916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x881fcd4ee05c520f%3A0x949b13c60268646b!2s801+S+Garfield+Ave%2C+Traverse+City%2C+MI+49686!5e0!3m2!1sen!2sus!4v1501858744930" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
        <?php the_field('map', 'options' ); ?>
      </div>
    </div>
  </div>

  <?php the_field('map', 'options' ); ?>
</div>


<!-- footer and bottom-footer -->
<div class="container-fluid">

<!-- footer -->
  <div class="col-xs-12" style="background-color: #3e601b; top: 0px;">
    <div>
      <img class="size-full wp-image-309 alignleft" style="padding-left: 24px;" src="http://tbk.prowebtesting.com/wp-content/uploads/footer-logo.png" alt="" width="257" height="82" />
    </div>
    <div>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p><img class="size-medium wp-image-307 alignright" style="padding-right: 20px;" src="http://tbk.prowebtesting.com/wp-content/uploads/auth-net-logo-300x82.jpg" alt="" width="300" height="82" /></p>
      <div class="footeritems">
        <p>&nbsp;</p>
        <p  style="color: #ffffff;font-size: 20px;"><i class="fa fa-map-marker" aria-hidden="true"><strong> Address</strong>: 801 s Garfield, Traverse City MI 49685</i></p>
        <p  style="color: #ffffff;font-size: 20px;"><i class="fa fa-phone" aria-hidden="true"><strong> Phone:</strong><a href="tel:231-715-8889"> 231-715-8889</a></i></p>
        <p  style="color: #ffffff;font-size: 20px;"><i class="fa fa-envelope" aria-hidden="true"><strong> Email</strong>: trent@tcpayment.com</i></p>
        <p style="margin: 0;"><i class="fa fa-facebook-square" aria-hidden="true"></i></p>
      </div>
    </div>
  </div>

<!--bottom footer -->
  <div class="col-xs-12" id="bottomfooter">
    <p>Website Design and Development by: Pro Web Marketing</p>

    &copy; <?php echo date("Y"); ?>
  </div>
</div>

</footer>

<?php wp_footer(); ?>
</body>
</html>
