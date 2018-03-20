<?php
/********************
* PAGE BUILDER
********************/
?>

<?php if( have_rows('builder') ): ?>

  <div class="builder cf">

    <?php while ( have_rows('builder') ) : the_row(); ?>

      <?php // VELG BANNER ?>
      <?php if( get_row_layout() == 'sub_field' ): ?>


        <?php // include(TEMPLATEPATH . '/library/modules/builder/sub_field.php'); ?>


      <?php elseif( get_row_layout() == 'sub_field_2' ): ?>


        <?php // include(TEMPLATEPATH . '/library/modules/builder/sub_field_2.php'); ?>


      <?php endif; ?>
    <?php endwhile; ?>

  </div><!-- END .builder -->

<?php endif; ?>
