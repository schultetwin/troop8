<?php
// $Id: user-profile-category.tpl.php,v 1.2 2007/08/07 08:39:36 goba Exp $

/**
 * Snippet from http://drupal.org/node/138127 to disable annoying core history feature.
 */
?>
<div class="profile">
<?php
unset($profile[t('summary')]);
foreach ($profile AS $k => $v) {
  print $v;
}
?>
</div>