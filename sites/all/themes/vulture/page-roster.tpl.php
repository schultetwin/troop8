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
    <?php print $suy ?>
  </head>

  <body class="<?php global $base_url; print $body_classes;
    if(strpos($base_url,'dev.') !== false) {print (' development');}
    if(strpos($base_url,'drupal') !== false) {print (' sandbox');} ?> ">
  
      <div id="header-top">
         
          <?php if ($search_box): ?>
          <div id="search-box">
            <?php print $search_box; ?>
          </div><!-- /search-box -->
          <?php endif; ?>
          
          <?php if ($top_menu): ?>
          <div id="top-menu">
            <?php print $top_menu; ?>
            <?php endif; ?>
          </div><!-- /top_menu -->
          
      </div> <!-- /header-top-->
          
    <div id="page" class="clearfix"> 
    
        <div id="header-wrapper" class="clearfix">
        
          <div id="header">
            <?php if ($logo): ?> 
            <div id="logo">
              <a href="<?php print $base_path ?>" title="<?php print t('Home') ?>"><img src="<?php print $logo ?>" alt="<?php print t('Home') ?>" /></a>
            </div>
            <?php endif; ?>
            <?php if ($site_name): ?>
              <?php if ($is_front) : /* if we are on the front page use <h1> for site title */ ?>
              <h1 class="sitetitle">
                 <a href="<?php print $base_path ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a>
              </h1>
              <?php endif; ?>
              <?php endif; ?>
              <?php if (!$is_front) : /* otherwise use <p> and let node title use <h1> for SEO */ ?>
              <p class="sitetitle">
                 <a href="<?php print $base_path ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a>
              </p>
            <?php endif; ?>
            <?php if ($site_slogan): ?>
            <p class="slogan"><?php print $site_slogan; ?></p>
            <?php endif; ?>
          </div><!-- /header -->
      
        </div><!-- /header-wrapper -->
    
        <div id="header-bottom" class="clearfix">
          <?php if ($secondary_menu): ?>
            <div id="secondary-menu">
              <?php print $secondary_menu; ?>
            </div><!-- /secondary-menu -->
          <?php endif; ?>
        </div><!-- /header-bottom -->
      

      <div id="preface">
        <?php if ($preface_first || $preface_middle || $preface_last): ?>
        <div id="preface-wrapper" class="<?php print $prefaces; ?> clearfix">
        
          <?php if ($preface_first): ?>
          <div id="preface-first" class="column">
            <?php print $preface_first; ?>
          </div><!-- /preface-first -->
          <?php endif; ?>

          <?php if ($preface_middle): ?>
          <div id="preface-middle" class="column">
            <?php print $preface_middle; ?>
          </div><!-- /preface-middle -->
          <?php endif; ?>

          <?php if ($preface_last): ?>
          <div id="preface-last" class="column">
            <?php print $preface_last; ?>
          </div><!-- /preface-last -->
          <?php endif; ?>
        </div><!-- /preface-wrapper -->
        <?php endif; ?>
        
          <?php if ($mission): ?>
          <div id="mission"> 
            <?php print $mission; ?>
          </div>
          <?php endif; ?>
      </div><!-- /preface -->

      <div id="main">
        <div id="main-wrapper" class="clearfix">
        
          <?php if ($sidebar_first): ?>
          <div id="sidebar-first">
            <?php print $sidebar_first; ?>
            <?php if (($sidebar_first) && (!$sidebar_last)) : ?>
               <?php print $feed_icons; ?>
            <?php endif; ?>
          </div><!-- /sidebar-first -->
          <?php endif; ?>

          <div id="content-wrapper">

          <?php if ($sidebar_last): ?>
            <div id="sidebar-last">
              <?php print $sidebar_last; ?>
              <?php print $feed_icons; ?>
            </div><!-- /sidebar_last -->
          <?php endif; ?>
          
                   
          <div id="content">
            
            <?php if ($content_top): ?>
            <div id="content-top">
              <?php print $content_top; ?>
            </div><!-- /content-top -->
            <?php endif; ?>

            
             
              <div id="content-inner">
    
                <?php if ($title):
                  if ($is_front){/* if we are on the front page use <h2> for title */
		            print '<h2'. ($tabs ? ' class="title with-tabs"' : '') .'>'. $title .'</h2>'; }
		          else {print '<h1'. ($tabs ? ' class="title with-tabs"' : '') .'>'. $title .'</h1>';  /* otherwise use <h1> for node title */ } ?>
                <?php endif; ?>
             
             <div id="content-header">
             
             <?php if ($tabs): ?>
              <div id="content-tabs">
                <?php print $tabs; ?>
              </div>
             <?php endif; ?>
             
            <?php if ($messages): ?>
              <?php print $messages; ?>
            <?php endif; ?>
             
             </div><!-- /content-header -->
             
              <div id="content-content">
                  <?php print $content; ?>
                </div>
              </div><!-- /content-inner -->
              
          <?php if ($breadcrumb): ?>
          <div id="breadcrumb">
            <?php print $breadcrumb; ?>
          </div><!-- /breadcrumb -->
          <?php endif; ?>
                    
            </div><!-- /content -->

            <?php if ($content_bottom): ?>
            <div id="content-bottom">
              <?php print $content_bottom; ?>
            </div><!-- /content-bottom -->
            <?php endif; ?>
            
          
          </div><!-- /content-wrapper -->
          


          <?php if ($postscript_first || $postscript_middle || $postscript_last): ?>
          <div id="postscript-wrapper" class="<?php print $postscripts; ?> clearfix">
            <?php if ($postscript_first): ?>
            <div id="postscript-first" class="column">
              <?php print $postscript_first; ?>
            </div><!-- /postscript-first -->
            <?php endif; ?>

            <?php if ($postscript_middle): ?>
            <div id="postscript-middle" class="column">
              <?php print $postscript_middle; ?>
            </div><!-- /postscript-middle -->
            <?php endif; ?>

            <?php if ($postscript_last): ?>
            <div id="postscript-last" class="column">
              <?php print $postscript_last; ?>
            </div><!-- /postscript-last -->
            <?php endif; ?>
          </div><!-- /postscript-wrapper -->
          <?php endif; ?>


          <?php if ($footer_top || $footer || $footer_message): ?>
          <div id="footer" class="clearfix">
            <?php if ($footer_top): ?>
            <?php print $footer_top; ?>
            <?php endif; ?>
            <?php if ($footer): ?>
            <?php print $footer; ?>
            <?php endif; ?>
            <?php if ($footer_message): ?>
            <?php print $footer_message; ?>
            <?php endif; ?>
          </div><!-- /footer -->
          <?php endif; ?>
          
        </div><!-- /main-wrapper -->
      </div><!-- /main -->
    </div><!-- /page -->
    <?php print $closure; ?>
  </body>
</html>
