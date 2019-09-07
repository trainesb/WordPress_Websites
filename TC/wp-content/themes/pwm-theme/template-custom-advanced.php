<?php
/*
Template Name: Custom Layout - Advanced
*/
?>
<?php get_header(); ?>

<?php if(have_rows('adv_pl')): ?>
<?php while(have_rows('adv_pl')): the_row(); ?>

<!-- start wrapper -->
  <?php if(get_row_layout() == 'wrapper'): // layout: Content ?>

    <!-- start background -->
    <div class="<?php if(get_sub_field('adv_type') == "acf-field-option-here"): ?>your-class-here<?php endif; ?> <?php if(get_sub_field('adv_padding') == "acf-field-option-here"): ?>your-class-here<?php endif; ?>">
    <?php if(get_sub_field('adv_container') == "fixed"): ?><div class="container"><?php elseif(get_sub_field('adv_container') == "fluid"): ?><div class="container-fluid"><?php endif; ?>

    <?php if(have_rows('adv_layout')): ?>
    <?php while(have_rows('adv_layout')): the_row(); ?>

      <!-- start block -->
      <?php if(get_row_layout() == 'wl_block'): $columns = get_sub_field('wlb_columns'); switch (count($columns)) { case 0: $divclass = false; break; case 1: $divclass = "col-sm-12"; break; case 2: $divclass = "col-sm-6"; break; case 3: $divclass = "col-sm-4"; break; case 4: $divclass = "col-sm-3"; break; } // layout: Content ?>
      <div class="row">
      <?php if(have_rows('wlb_columns')): ?>
      <?php while (have_rows('wlb_columns')) : the_row(); ?>
      <div class="col-xs-12 <? echo $divclass; ?>">
      <?php the_sub_field('wlbc_content'); ?>
      </div>
      <?php endwhile; ?>
      <?php endif; ?>
      </div>
      <?php endif; ?>
      <!-- end -->

      <!-- start block w/sidebar -->
      <?php if(get_row_layout() == 'wl_block_sb'): // layout: Content ?>
      <?php if(get_sub_field('sb_location') == "left"): ?>
      <div class="row">

      <?php if(get_sub_field('sb_size') == "5"): ?><div class="col-xs-12 col-sm-5"><?php elseif(get_sub_field('sb_size') == "4"): ?><div class="col-xs-12 col-sm-4"><?php elseif(get_sub_field('sb_size') == "3"): ?><div class="col-xs-12 col-sm-3"><?php elseif(get_sub_field('sb_size') == "2"): ?><div class="col-xs-12 col-sm-2"><?php endif; ?>

      <?php if(have_rows('sb_layout')): ?>
      <div class="sidebarblock">
      <?php while(have_rows('sb_layout')): the_row(); ?>

      <?php if(get_row_layout() == 'sb_block'): // layout: Content ?>
      <?php the_sub_field('sb_content'); ?>
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

      <?php if(get_sub_field('sb_size') == "5"): ?><div class="col-xs-12 col-sm-7"><?php elseif(get_sub_field('sb_size') == "4"): ?>
      <div class="col-xs-12 col-sm-8"><?php elseif(get_sub_field('sb_size') == "3"): ?><div class="col-xs-12 col-sm-9"><?php elseif(get_sub_field('sb_size') == "2"): ?><div class="col-xs-12 col-sm-10"><?php endif; ?>

      <?php if(have_rows('bs_content_layout')): ?>
      <?php while(have_rows('bs_content_layout')): the_row(); ?>

      <?php if(get_row_layout() == 'bs_block'): $bscolumns = get_sub_field('bs_columns'); switch (count($bscolumns)) { case 0: $bsdivclass = false; break; case 1: $bsdivclass = "col-sm-12"; break; case 2: $bsdivclass = "col-sm-6"; break; case 3: $bsdivclass = "col-sm-4"; break; case 4: $bsdivclass = "col-sm-3"; break; } // layout: Content ?>
      <div class="row">
      <?php if(have_rows('bs_columns')): ?>
      <?php while (have_rows('bs_columns')) : the_row(); ?>
      <div class="col-xs-12 <? echo $bsdivclass; ?>">
      <?php the_sub_field('abs_content'); ?>
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
      <?php if(get_sub_field('sb_size') == "5"): ?><div class="col-xs-12 col-sm-7"><?php elseif(get_sub_field('sb_size') == "4"): ?>
      <div class="col-xs-12 col-sm-8"><?php elseif(get_sub_field('sb_size') == "3"): ?><div class="col-xs-12 col-sm-9"><?php elseif(get_sub_field('sb_size') == "2"): ?><div class="col-xs-12 col-sm-10"><?php endif; ?>

      <?php if(have_rows('bs_content_layout')): ?>
      <?php while(have_rows('bs_content_layout')): the_row(); ?>

      <?php if(get_row_layout() == 'bs_block'): $bscolumns = get_sub_field('bs_columns'); switch (count($bscolumns)) { case 0: $bsdivclass = false; break; case 1: $bsdivclass = "col-sm-12"; break; case 2: $bsdivclass = "col-sm-6"; break; case 3: $bsdivclass = "col-sm-4"; break; case 4: $bsdivclass = "col-sm-3"; break; } // layout: Content ?>
      <div class="row">
      <?php if(have_rows('bs_columns')): ?>
      <?php while (have_rows('bs_columns')) : the_row(); ?>
      <div class="col-xs-12 <? echo $bsdivclass; ?>">
      <?php the_sub_field('abs_content'); ?>
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
      <?php if(get_sub_field('sb_size') == "5"): ?><div class="col-xs-12 col-sm-5"><?php elseif(get_sub_field('sb_size') == "4"): ?><div class="col-xs-12 col-sm-4"><?php elseif(get_sub_field('sb_size') == "3"): ?><div class="col-xs-12 col-sm-3"><?php elseif(get_sub_field('sb_size') == "2"): ?><div class="col-xs-12 col-sm-2"><?php endif; ?>

      <?php if(have_rows('sb_layout')): ?>
      <div class="sidebarblock">
      <?php while(have_rows('sb_layout')): the_row(); ?>

      <?php if(get_row_layout() == 'sb_block'): // layout: Content ?>
      <?php the_sub_field('sb_content'); ?>
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
      <!-- end -->

      <!-- start accordion -->
      <?php if(get_row_layout() == 'wl_accordion'): $accordionlayoutID = 'wl_accordion' . rand(); // layout: Content ?>
      <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="heading<?php echo $accordionlayoutID ?>"><h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $accordionlayoutID ?>" aria-expanded="true" aria-controls="collapse<?php echo $accordionlayoutID ?>"><?php the_sub_field('wla_headline'); ?></a></h4></div>
      <div id="collapse<?php echo $accordionlayoutID ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $accordionlayoutID ?>">
      <div class="panel-body"><?php the_sub_field('wla_content'); ?></div>
      </div>
      </div>
      <?php endif; ?> <!-- end layout -->
      <!-- end -->

      <!-- start divider -->
      <?php if(get_row_layout() == 'wl_divider'): // layout: Content ?>
      <div class="row"><div class="col-xs-12"><hr /></div></div>
      <?php endif; ?> <!-- end layout -->
      <!-- end -->

    <?php endwhile; ?>
    <?php endif; ?>

    <?php if(get_sub_field('adv_container') == "fixed"): ?></div><?php elseif(get_sub_field('adv_container') == "fluid"): ?></div><?php else: ?><?php endif; ?></div>
    <!-- end background -->

  <?php endif; ?>
<!-- end wrapper -->

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
