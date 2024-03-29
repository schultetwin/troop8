<?php
// $Id: maintenance-page.tpl.php,v 1.1 2008/10/01 03:26:19 jwolf Exp $
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language; ?>" xml:lang="<?php print $language->language; ?>">
  
  <head>
    <title><?php print $head_title; ?></title>
    <?php print $head; ?>
    <?php print $styles; ?>
    <!--[if IE 7]>
      <link rel="stylesheet" href="<?php print $base_path . $directory; ?>/ie7-fixes.css" type="text/css">
    <![endif]-->
    <!--[if lte IE 6]>
      <link rel="stylesheet" href="<?php print $base_path . $directory; ?>/ie6-fixes.css" type="text/css">
    <![endif]-->
    <?php print $scripts; ?>
  </head>
  
  <body class="<?php global $base_url; print $body_classes;
    if(strpos($base_url,'dev.') !== false) {print (' development');}
    if(strpos($base_url,'drupal') !== false) {print (' sandbox');} ?> ">
    <div id="page" class="clearfix">
      <div id="header-wrapper" class="clearfix">
        <div id="header">
            <?php if ($logo): ?> 
            <div id="logo">
              <a href="<?php print $base_path ?>" title="<?php print t('Home') ?>"><img src="<?php print $logo ?>" alt="<?php print t('Home') ?>" /></a>
            </div>
            <?php endif; ?>
            <?php if ($site_name): ?>
              <h1 class="sitetitle">
                 <a href="<?php print $base_path ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a>
              </h1>
            <?php endif; ?>
            <?php if ($site_slogan): ?>
            <p class="slogan"><?php print $site_slogan; ?></p>
            <?php endif; ?>
        </div><!-- /header -->
      </div><!-- /header-wrapper -->
      <div id="main-wrapper" class="clearfix">  
        <div id="content-wrapper">
          <div id="content">

            <?php if ($content || $title): ?>
            <div id="content-inner" class="clear">
              <?php if ($title): ?>
              <h2 class="title"><?php print $title; ?></h2>
              <?php endif; ?>
              <?php if ($content): ?>
              <?php print $content; ?>
              <?php endif; ?>
            </div>
            <?php endif; ?>
          </div><!-- /content -->
        </div><!-- /content-wrapper -->
      </div><!-- /main-wrapper -->
    </div><!-- /page -->
  </body>
</html>
