<section id="<?php print $block_html_id; ?>">

  <?php print render($title_prefix); ?>
    <?php if ($title): ?><h2><?php print $title; ?></h2><?php endif; ?>
  <?php print render($title_suffix); ?>

  <div class="content">
    <?php print $content ?>
  </div>
  
</section> <!-- /.block -->