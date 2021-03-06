<?php
/**
 * @file
 * Returns the HTML for a block.
 *
 * Complete documentation for this file is available online.
 * @see http://drupal.org/node/1728246
 */
?>
<section id="<?php print $block_html_id; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php print render($title_prefix); ?>
  <?php if ($title): ?>
    <div class="headline">
      <h3<?php print $title_attributes; ?>><?php print $title; ?></h3>
    </div>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <div class="block-content">
    <?php print $content; ?>
  </div>

</section>
