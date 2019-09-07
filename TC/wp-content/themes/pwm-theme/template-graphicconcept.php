<?php
/*
Template Name: Graphic Concepts
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

<div class="container">
<center><img src="<?php the_field('graphic_concept', $post_id ); ?>" class="img-responsive" /></center>
</div>

<?php wp_footer(); ?>
</body>
</html>
