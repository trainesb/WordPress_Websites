<footer>


<?php if( is_front_page() ) : ?>

<div class="callout-section">
<div class="container">
<div class="row">

	<?php if( get_field('callout_blocks', $post_id ) ): $cob = get_field('callout_blocks', $post_id ); switch (count($cob)) { case 0: $divclass = false; break; case 1: $divclass = "col-sm-12"; break; case 2: $divclass = "col-sm-6"; break; case 3: $divclass = "col-sm-4";break; case 4: $divclass = "col-sm-3"; break; } ?>
    <?php while( has_sub_field('callout_blocks', $post_id ) ): ?>
    <div class="col-sm-12 col-md-4">
          <div class="callout-boxes equalheight">
            <h1><?php the_sub_field('co_header' ); ?></h1>
            <div class="callout-content">
              <p><?php the_sub_field('co_content' ); ?></p>

              <a href="<?php the_sub_field('co_button_link' ); ?>" class="btn btn-default" role="button"><span class="btn-label"><?php the_sub_field('co_button_label' ); ?>&nbsp;</span><i class="fa fa-arrow-circle-right" aria-hidden="true" id="button-arrow"></i></a>

          </div>
        </div>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
<?php wp_enqueue_script('equalheight'); wp_enqueue_script('equalheight2'); ?>
</div></div></div></div>
<?php endif; ?>




<!-- banner2 -->
<div class="bannertwoback">
	<div class="container">
  	<div class="col-xs-12" id="bannertwo">
    	<p class="bannertwoitem">BEST OF TRAVERSE CITY REWARDS</p>
  	</div>
 	</div>
</div>


<div class="awards-section">
<div class="container">
<div class="col-xs-12 col-sm-4">
<img src="http://tbk.prowebtesting.com/wp-content/uploads/2015-award.jpg" />
</div>
<div class="col-xs-12 col-sm-4">
<img src="http://tbk.prowebtesting.com/wp-content/uploads/2016-award.jpg" />
</div>
<div class="col-xs-12 col-sm-4">
<img src="http://tbk.prowebtesting.com/wp-content/uploads/new2017-award.jpg" />
</div>
</div></div>



<!-- banner3 -->
<div class="container-fluid" >
  <div class="col-xs-12" id="bannerthree">
    <p class="bannerthreeitem">Not Sure the Best Solution for Your Business Needs?</p>
    <button>Let Us Help You <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
  </div>
</div>


<!--google maps -->
<div class="map-section">
<div class="container-fluid nopadding">
<div class="overlay" onClick="style.pointerEvents='none'"></div>
<?php the_field('map', 'options' ); ?>
</div></div></div>


<!-- footer and bottom-footer -->
<div class="topfooterback">
<div class="container">

<!-- footer -->
  <div class="col-xs-12">
    <div>
      <img id="footerlogoone" class="size-full wp-image-309 alignleft" src="http://tbk.prowebtesting.com/wp-content/uploads/footer-logo.png" alt="" width="257" height="82" />
    </div>
    <div>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p><img class="size-medium wp-image-307 alignright" id="footerlogotwo" src="http://tbk.prowebtesting.com/wp-content/uploads/auth-net-logo-300x82.jpg" alt="" width="300" height="82" /></p>
      <div class="footeritems">
        <p>&nbsp;</p>
        <p><i class="fa fa-map-marker" aria-hidden="true"><strong> Address:</strong>  <?php the_field('address', 'options' ); ?></i></p>
        <p><i class="fa fa-phone" aria-hidden="true"></a><strong> Phone: </strong><a class="phonelink" href="tel:+1<?php the_field('phone', 'options' ); ?>"><?php the_field('phone', 'options' ); ?></i></p>
        <p><i class="fa fa-envelope" aria-hidden="true"></i><strong> Email: </strong><a class="emaillink" href="mailto:<?php the_field('email', 'options' ); ?>"><?php the_field('email', 'options' ); ?></a></i></p>
        <p><i class="fa fa-facebook-square" aria-hidden="true"></i></p>
      </div>
    </div>
  </div></div>

<!--bottom footer -->
  <div class="col-xs-12" id="bottomfooter">
    <p>Website Design and Development by: Pro Web Marketing</p>

    &copy; <?php echo date("Y"); ?>
</div></div>

</footer>

<?php wp_footer(); ?>
</body>
</html>
