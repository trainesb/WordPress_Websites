<?php
/*
Template Name: Road Map
*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<title>Road Map</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0" />
<?php wp_head(); ?>
</head>
<body ontouchstart="">

<div id="header">
<div class="container">
<div class="row">
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 hleft"><img src="<?php bloginfo( 'template_directory' ); ?>/roadmap/logo.jpg" /></div>
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 hright"><?php if(get_field('development_mode') == "Yes"): ?><a href="/" class="btn btn-default">View Site</a><?php endif; ?>&nbsp;<a href="/wp-admin/" class="btn btn-default">Login</a>&nbsp;<a href="http://www.prowebmarketing.com/contact/" target="_blank" class="btn btn-default">Contact Us</a></div>
</div>
</div></div>

<div class="container">

<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
  <h1><?php bloginfo('name'); ?></h1>
    <h3>Content Hierarchy</h3>
	
  <p><em>Content Hierarchy</em> is our text-only outline of the content that will be on your site, including branding, navigation, graphics, and text. We may use example text (<a href="http://www.lipsum.com/" target="_blank">"Lorem Ipsum"</a>) to mock-up elements that we do not already have content for. This will give you an example of the approximate content and length of each bit of text we will need to complete your project.</p>
  
<?php if( get_field('content_hierarchy', $post_id) ): ?>
<?php while( has_sub_field('content_hierarchy', $post_id) ): ?>

<?php if(get_sub_field('content_hierarchy_link')): ?>
<p><a href="<?php the_sub_field('content_hierarchy_link'); ?>">Content Hierarchy #<?php the_sub_field('content_hierarchy_version'); ?></a></p>
<?php endif; ?>

<?php endwhile; ?>
<?php endif; ?>

<h3>Concepts</h3>
  
<?php if( get_field('concepts', $post_id) ): ?>
<?php while( has_sub_field('concepts', $post_id) ): ?>

<?php if(get_sub_field('concept_link')): ?>
<p><a href="<?php the_sub_field('concept_link'); ?>"><?php the_sub_field('concept_title'); ?></a></p>
<?php endif; ?>

<?php endwhile; ?>
<?php endif; ?>

</div>
</div> 
</div>

<?php wp_footer(); ?>
</body>
</html>
