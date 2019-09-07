<?php
/*
Template Name: Custom Layout
*/
?>
<?php get_header(); ?>
<div class="contentback">
<div class="container" style="padding: 0;">
<div id="content">

<?php if(get_field('title_options') == "left"): ?><h1 style="text-align:left;"><?php the_title(); ?></h1><?php endif; ?>
<?php if(get_field('title_options') == "center"): ?><h1 style="text-align:center;"><?php the_title(); ?></h1><?php endif; ?>
<?php if(get_field('title_options') == "right"): ?><h1 style="text-align:right;"><?php the_title(); ?></h1><?php endif; ?>
<?php if(get_field('title_options') == "none"): ?><h1 style="display:none;"><?php the_title(); ?></h1><?php endif; ?>

<?php if(have_rows('page_layout')): ?>
<?php while(have_rows('page_layout')): the_row(); ?>

<?php if(get_row_layout() == 'block_sidebar'): // layout: Content ?>
<?php if(get_sub_field('sidebar_location') == "left"): ?>
<div class="row">

<?php if(get_sub_field('sidebar_size') == "5"): ?><div class="col-xs-12 col-sm-5"><?php elseif(get_sub_field('sidebar_size') == "4"): ?><div class="col-xs-12 col-sm-4"><?php elseif(get_sub_field('sidebar_size') == "3"): ?><div class="col-xs-12 col-sm-3"><?php elseif(get_sub_field('sidebar_size') == "2"): ?><div class="col-xs-12 col-sm-2"><?php endif; ?>

<?php if(have_rows('sidebar_layout')): ?>
<div class="sidebarblock">
<?php while(have_rows('sidebar_layout')): the_row(); ?>

<?php if(get_row_layout() == 'sb_block'): // layout: Content ?>
<?php the_sub_field('bs_content'); ?>
<?php endif; ?> <!-- end layout -->

<?php if(get_row_layout() == 'sb_accordion'): $sb_accordionID = 'sb_accordion' . rand(); // layout: Content ?>
<div class="panel panel-default">
<div class="panel-heading" role="tab" id="heading<?php echo $sb_accordionID ?>"><h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $sb_accordionID ?>" aria-expanded="true" aria-controls="collapse<?php echo $sb_accordionID ?>"><?php the_sub_field('sba_headline'); ?></a></h4></div>
<div id="collapse<?php echo $sb_accordionID ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $sb_accordionID ?>">
<div class="panel-body"><?php the_sub_field('sba_content'); ?></div>
</div>
</div>
<?php endif; ?> <!-- end layout -->

<?php if(get_row_layout() == 'sb_hr'): // layout: Content ?>
<hr />
<?php endif; ?> <!-- end layout -->

<?php endwhile; ?>
</div>
<?php endif; ?>

</div>

<?php if(get_sub_field('sidebar_size') == "5"): ?><div class="col-xs-12 col-sm-7"><?php elseif(get_sub_field('sidebar_size') == "4"): ?>
<div class="col-xs-12 col-sm-8"><?php elseif(get_sub_field('sidebar_size') == "3"): ?><div class="col-xs-12 col-sm-9"><?php elseif(get_sub_field('sidebar_size') == "2"): ?><div class="col-xs-12 col-sm-10"><?php endif; ?>

<?php if(have_rows('bs_content_layout')): ?>
<?php while(have_rows('bs_content_layout')): the_row(); ?>

<?php if(get_row_layout() == 'bs_block'): $bscolumns = get_sub_field('bs_columns'); switch (count($bscolumns)) { case 0: $bsdivclass = false; break; case 1: $bsdivclass = "col-sm-12"; break; case 2: $bsdivclass = "col-sm-6"; break; case 3: $bsdivclass = "col-sm-4"; break; case 4: $bsdivclass = "col-sm-3"; break; } // layout: Content ?>
<div class="row">
<?php if(have_rows('bs_columns')): ?>
<?php while (have_rows('bs_columns')) : the_row(); ?>
<div class="col-xs-12 <? echo $bsdivclass; ?>">
<?php the_sub_field('bs_content'); ?>
</div>
<?php endwhile; ?>
<?php endif; ?>
</div>
<?php endif; ?> <!-- end layout -->

<?php if(get_row_layout() == 'bs_accordion'): $bs_accordionID = 'bs_accordion' . rand(); // layout: Content ?>
<div class="panel panel-default">
<div class="panel-heading" role="tab" id="heading<?php echo $bs_accordionID ?>"><h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $bs_accordionID ?>" aria-expanded="true" aria-controls="collapse<?php echo $bs_accordionID ?>"><?php the_sub_field('bsa_headline'); ?></a></h4></div>
<div id="collapse<?php echo $bs_accordionID ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $bs_accordionID ?>">
<div class="panel-body"><?php the_sub_field('bsa_content'); ?></div>
</div>
</div>
<?php endif; ?> <!-- end layout -->

<?php if(get_row_layout() == 'bs_divider'): // layout: Content ?>
<hr />
<?php endif; ?> <!-- end layout -->

<?php endwhile; ?>
<?php endif; ?>

</div>
</div>
<?php else: ?>
<div class="row">
<?php if(get_sub_field('sidebar_size') == "5"): ?><div class="col-xs-12 col-sm-7"><?php elseif(get_sub_field('sidebar_size') == "4"): ?>
<div class="col-xs-12 col-sm-8"><?php elseif(get_sub_field('sidebar_size') == "3"): ?><div class="col-xs-12 col-sm-9"><?php elseif(get_sub_field('sidebar_size') == "2"): ?><div class="col-xs-12 col-sm-10"><?php endif; ?>

<?php if(have_rows('bs_content_layout')): ?>
<?php while(have_rows('bs_content_layout')): the_row(); ?>

<?php if(get_row_layout() == 'bs_block'): $bscolumns = get_sub_field('bs_columns'); switch (count($bscolumns)) { case 0: $bsdivclass = false; break; case 1: $bsdivclass = "col-sm-12"; break; case 2: $bsdivclass = "col-sm-6"; break; case 3: $bsdivclass = "col-sm-4"; break; case 4: $bsdivclass = "col-sm-3"; break; } // layout: Content ?>
<div class="row">
<?php if(have_rows('bs_columns')): ?>
<?php while (have_rows('bs_columns')) : the_row(); ?>
<div class="col-xs-12 <? echo $bsdivclass; ?>">
<?php the_sub_field('bs_content'); ?>
</div>
<?php endwhile; ?>
<?php endif; ?>
</div>
<?php endif; ?> <!-- end layout -->

<?php if(get_row_layout() == 'bs_accordion'): $bs_accordionID = 'bs_accordion' . rand(); // layout: Content ?>
<div class="panel panel-default">
<div class="panel-heading" role="tab" id="heading<?php echo $bs_accordionID ?>"><h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $bs_accordionID ?>" aria-expanded="true" aria-controls="collapse<?php echo $bs_accordionID ?>"><?php the_sub_field('bsa_headline'); ?></a></h4></div>
<div id="collapse<?php echo $bs_accordionID ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $bs_accordionID ?>">
<div class="panel-body"><?php the_sub_field('bsa_content'); ?></div>
</div>
</div>
<?php endif; ?> <!-- end layout -->

<?php if(get_row_layout() == 'bs_divider'): // layout: Content ?>
<hr />
<?php endif; ?> <!-- end layout -->

<?php endwhile; ?>
<?php endif; ?>

</div>
<?php if(get_sub_field('sidebar_size') == "5"): ?><div class="col-xs-12 col-sm-5"><?php elseif(get_sub_field('sidebar_size') == "4"): ?><div class="col-xs-12 col-sm-4"><?php elseif(get_sub_field('sidebar_size') == "3"): ?><div class="col-xs-12 col-sm-3"><?php elseif(get_sub_field('sidebar_size') == "2"): ?><div class="col-xs-12 col-sm-2"><?php endif; ?>

<?php if(have_rows('sidebar_layout')): ?>
<div class="sidebarblock">
<?php while(have_rows('sidebar_layout')): the_row(); ?>

<?php if(get_row_layout() == 'sb_block'): // layout: Content ?>
<?php the_sub_field('bs_content'); ?>
<?php endif; ?> <!-- end layout -->

<?php if(get_row_layout() == 'sb_accordion'): $sb_accordionID = 'sb_accordion' . rand(); // layout: Content ?>
<div class="panel panel-default">
<div class="panel-heading" role="tab" id="heading<?php echo $sb_accordionID ?>"><h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $sb_accordionID ?>" aria-expanded="true" aria-controls="collapse<?php echo $sb_accordionID ?>"><?php the_sub_field('sba_headline'); ?></a></h4></div>
<div id="collapse<?php echo $sb_accordionID ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $sb_accordionID ?>">
<div class="panel-body"><?php the_sub_field('sba_content'); ?></div>
</div>
</div>
<?php endif; ?> <!-- end layout -->

<?php if(get_row_layout() == 'sb_hr'): // layout: Content ?>
<hr />
<?php endif; ?> <!-- end layout -->

<?php endwhile; ?>
</div>
<?php endif; ?>

</div>
</div>
<?php endif; ?>
<?php endif; ?> <!-- end layout -->

<?php if(get_row_layout() == 'columns'): $columns = get_sub_field('multiple_columns'); switch (count($columns)) { case 0: $divclass = false; break; case 1: $divclass = "col-sm-12"; break; case 2: $divclass = "col-sm-6"; break; case 3: $divclass = "col-sm-4"; break; case 4: $divclass = "col-sm-3"; break; } // layout: Content ?>
<div class="row">
<?php if(have_rows('multiple_columns')): ?>
<?php while (have_rows('multiple_columns')) : the_row(); ?>
<div class="col-xs-12 <? echo $divclass; ?>">
<?php the_sub_field('mc_content'); ?>
</div>
<?php endwhile; ?>
<?php endif; ?>
</div>
<?php endif; ?> <!-- end layout -->

<?php if(get_row_layout() == 'accordion_layout'): $accordionlayoutID = 'accordion_layout' . rand(); // layout: Content ?>
<div class="panel panel-default">
<div class="panel-heading" role="tab" id="heading<?php echo $accordionlayoutID ?>"><h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $accordionlayoutID ?>" aria-expanded="true" aria-controls="collapse<?php echo $accordionlayoutID ?>"><?php the_sub_field('al_headline'); ?></a></h4></div>
<div id="collapse<?php echo $accordionlayoutID ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $accordionlayoutID ?>">
<div class="panel-body"><?php the_sub_field('al_content'); ?></div>
</div>
</div>
<?php endif; ?> <!-- end layout -->

<?php if(get_row_layout() == 'hr'): // layout: Content ?>
<hr />
<?php endif; ?> <!-- end layout -->

<?php endwhile; ?>
<?php endif; ?>

</div></div></div>
<?php get_footer(); ?>
