<?php get_header(); ?>

<div id="about-background">
<div class="container nopadding">
    <div class="col-sm-12 col-md-6 about-photo">
      <img id="about-photo" src="<?php the_field('about_img', $post_id ); ?>" alt="">
    </div>
      <div class="col-sm-12 col-md-6 about-content">
        <h1 id="about"><?php the_field('header', $post_id ); ?></h1>
        <p><?php the_field('about_content', $post_id ); ?><p>
    </div>
  </div>
</div>


<!-- featured home -->
<div id="featured-home">
  <div class="container">
    <div class="row">

      <div class="col-sm-12 featured-home-img hidden-md hidden-lg hidden-xl">
        <img src="<?php the_field('house_img', $post_id ); ?>">
      </div>

      <div class="col-sm-12 col-md-6 featured-home-content">
        <h2><?php the_field('house_header', $post_id ); ?></h2>
        <ul>
			<?php if( get_field('house_info', $post_id ) ): ?>
            <?php while( has_sub_field('house_info', $post_id ) ): ?>
              <li><p><?php the_sub_field('house_description' ); ?></p></li>
            <?php endwhile; ?>
            <?php endif; ?>
        </ul>
      </div>
      <div class="col-md-6 featured-home-img hidden-xs hidden-sm">
        <img src="<?php the_field('house_img', $post_id ); ?>">
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
