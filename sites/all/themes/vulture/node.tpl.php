<?php 
// $Id: node.tpl.php,v 1.1 2008/10/01 03:26:19 jwolf Exp $ 
?>

<!-- start node.tpl.php -->
<div id="node-<?php print $node->nid; ?>" class="node <?php print $node_classes; ?>">
  <?php print $picture ?>

  <?php if ($page == 0): ?>
  <h2 class="nodetitle"><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
  <?php endif; ?>

  
  <?php if ($submitted): ?>
  <?php if (!$teaser): ?>
    <div class="metanode">
    <p><?php print t('By ') .'<span class="author">'. theme('username', $node).'</span>' . t(' - Posted on ') . '<span class="date">'.format_date($node->created, 'custom', "d F Y").'</span>'; ?></p> 
    </div>
  <?php endif; ?>
  <?php endif; ?>
  
  <div class="content">
    <?php print $content ?>
  </div>

    <?php if (!$teaser): ?>
    <?php if ($links) { ?><div class="links"><?php print $links?></div><?php }; ?>
    <?php endif; ?>
    
    <?php if ($teaser): ?>
    <?php if ($links) { ?><div class="linksteaser"><div class="links"><?php print $links?></div></div><?php }; ?>
    <?php endif; ?>
    
    
    <?php if (!$teaser): ?>
    <?php if ($terms) { ?><div class="taxonomy"><span><?php print t('Tags') ?></span> <?php print $terms?></div><?php } ?>
    <?php endif; ?>

  <?php if ($node_bottom && !$teaser): ?>
  <div id="node-bottom">
    <?php print $node_bottom; ?>
  </div>
  <?php endif; ?>
</div>
<!-- /#node-<?php print $node->nid; ?> -->
