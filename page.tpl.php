<div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
    <?php if ($main_menu): ?>
    <a href="#navigation" class="element-invisible element-focusable"><?php print t('Skip to navigation'); ?></a>
    <?php endif; ?>
</div>

<div id="container">
    <header id="header">
    <h2><a href="/"><?php print $site_name; ?></a></h2>
    <?php print render($page['header']); ?>
    </header> <!-- /header -->

<div id="columncontainer">

<?php if ($breadcrumb): ?><?php print $breadcrumb; ?><?php endif;?>
    
<?php if ($page['left']): ?>
    <div id="leftcolumn">
        <?php print render($page['left']); ?>
    </div><!-- /leftcolumn -->
<?php endif; ?>
                        
	<div id="maincolumn"<?php if ($page['right'] && $page['left']) { ?> class="threecolumns"<?php } elseif ($page['right'] || $page['left']) { ?> class="twocolumns"<?php } else { ?><?php } ?>>

	<?php if ($title): ?><h1 class="contentHeadline"><?php print $title; ?></h1><?php endif; ?>
	<?php print render($title_suffix); ?>
	<?php if (!empty($tabs['#primary'])): ?><div class="tabs-wrapper clearfix"><?php print render($tabs); ?></div><?php endif; ?>
	<?php print render($page['contenttop']); ?>
	<?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
	<?php print render($page['content']); ?>

	</div><!-- /maincolumn -->

<?php if ($page['right']): ?>
<div id="rightcolumn">
    <?php print render($page['right']); ?>
</div><!-- /rightcolumn -->
<?php endif; ?>

</div><!-- /columnContainer -->

<footer id="footer" class="clearfix">	  
<?php if ($page['footer']): ?><?php print render($page['footer']) ?><?php endif; ?>
<p>&copy; <?php echo date('Y');?>, Organization name. </p>
</footer><!-- /footer -->



</div> <!-- /container -->


