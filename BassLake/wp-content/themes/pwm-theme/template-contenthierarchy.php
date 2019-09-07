<?php
/*
Template Name: Content Hierarchy
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

<div class="container" style="padding-bottom:20px;padding-top:20px;">
<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile; ?>
<?php endif; ?>
</div>

<?php wp_footer(); ?>
</body>
</html>
