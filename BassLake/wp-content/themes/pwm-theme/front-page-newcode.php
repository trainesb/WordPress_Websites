<?php get_header(); ?>

        <!-- about -->
        <div class="about-section">
          <h1 class="wp-caption"><?php the_field('header', $post_id ); ?></h1>
          <p><?php the_field('about_content', $post_id ); ?><p>
      </div>
      <h2 class="wp-caption"><a href="#" class="btn btn-default"><bold>&#8810;READ MORE&#8811;</bold></a></h2>
      <!-- readmore btn and gallery imgs -->

<!--slide md and lg -->
      <div class="gallery-wrapper container nomargin">

      <div class="slide">
          <img class="col-xs-4 gal" src="gal1.jpg" alt="">
          <img class="col-xs-4 gal" src="gal2.jpg" alt="">
          <img class="col-xs-4 gal" src="gal4.jpg" alt="">
      </div>
      <div class="slide">
          <img class="col-xs-4 gal" src="gal5.jpg" salt="">
          <img class="col-xs-4 gal" src="gal2.jpg" alt="">
          <img class="col-xs-4 gal" src="gal4.jpg" alt="">
      </div>

        <button class="btn display-left" onclick="plusDivs(-1)">&#10094;</button>
        <button class="btn display-right" onclick="plusDivs(1)">&#10095;</button>
      </div>

      <!-- details -->
      <div class="container nopadding nomargin" id="details">
        <h1 class="wp-caption"><bold>DETAILS</bold></h1>
      <div class="row">

        <div class="col-xs-6 col-md-2  col-md-offset-1  icon">
          <p  class="wp-caption-icon"><i class="fa fa-home" aria-hidden="true"><br>House<br>1,250 Sq. Ft.</i></p>
        </div>

        <div class="col-xs-6 col-md-2 icon1">
          <p  class="wp-caption-icon"><i class="fa fa-male" aria-hidden="true"><br>Sleeps<br>6</i></p>
        </div>

        <div class="col-xs-6 col-md-2 icon">
          <p  class="wp-caption-icon"><i class="fa fa-bed" aria-hidden="true"><br>Bedrooms<br>3</i></p>
        </div>


        <div class="col-xs-6 col-md-2 icon1">
          <p  class="wp-caption-icon"><i class="fa fa-bath" aria-hidden="true"><br>Bathrooms<br>1</i>
        </div>


        <div class="col-xs-6 col-xs-offset-3 col-md-offset-0 col-md-2 icon">
          <p  class="wp-caption-icon"><i class="fa fa-moon-o" aria-hidden="true"><br>Minimum Stay<br>2-7 Nights</i></p>
        </div>

      </div>
    </div>

<?php get_footer(); ?>