<?php

/**
 * Implementation of hook_ctools_plugin_api().
 */
function troop_award_feature_ctools_plugin_api() {
  list($module, $api) = func_get_args();
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => 1);
  }
}

/**
 * Implementation of hook_imagecache_default_presets().
 */
function troop_award_feature_imagecache_default_presets() {
  $items = array(
    'profilesize' => array(
      'presetname' => 'profilesize',
      'actions' => array(
        '0' => array(
          'weight' => '0',
          'module' => 'imagecache',
          'action' => 'imagecache_scale',
          'data' => array(
            'width' => '290',
            'height' => '290',
            'upscale' => 0,
          ),
        ),
      ),
    ),
  );
  return $items;
}

/**
 * Implementation of hook_node_info().
 */
function troop_award_feature_node_info() {
  $items = array(
    'award' => array(
      'name' => t('Award'),
      'module' => 'features',
      'description' => t('An award (such as an rank or merit badge).'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'has_body' => '1',
      'body_label' => t('Description'),
      'min_word_count' => '0',
      'help' => '',
    ),
    'award_given' => array(
      'name' => t('Award Given'),
      'module' => 'features',
      'description' => t('A join table between awards and users.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'has_body' => '0',
      'body_label' => '',
      'min_word_count' => '0',
      'help' => '',
    ),
    'position' => array(
      'name' => t('Position'),
      'module' => 'features',
      'description' => t('A troop position, such as patrol leader, to make someone a patrol leader'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'has_body' => '1',
      'body_label' => t('Description'),
      'min_word_count' => '0',
      'help' => '',
    ),
    'position_given' => array(
      'name' => t('Position Given'),
      'module' => 'features',
      'description' => t('A position given to a user'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'has_body' => '0',
      'body_label' => '',
      'min_word_count' => '0',
      'help' => '',
    ),
  );
  return $items;
}
