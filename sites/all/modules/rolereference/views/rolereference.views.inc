<?php
// $Id$


function rolereference_views_data() {
  $data['role']['table']['group']  = t('Role');
  $data['role']['table']['base'] = array(
    'field' => 'rid',
    'title' => t('Role Id'),
  );
  $data['role']['role_current'] = array(
    'real field' => 'rid',
    'title' => t('Current Roles'),
    'help' => t("Filter the view to the currently logged in user's roles."),
    'filter' => array(
      'handler' => 'views_handler_filter_user_roles_current',
      'type' => 'yes-no',
    ),
  );
  return $data;
}

/**
 * Implementation of hook_views_handlers().
 */
function rolereference_views_handlers() {
  return array(
    'info' => array(
      'path' => drupal_get_path('module', 'rolereference') . '/views',
    ),
    'handlers' => array(
      // filter handlers
      'views_handler_filter_user_roles_current' => array(
        'parent' => 'views_handler_filter_boolean_operator',
      ),
    )
  );
}

/**
 * Implementation of hook_views_query_substitutions().
 */
function rolereference_views_query_substitutions() {
  global $user;
  return array(
    '***CURRENT_USER_ROLES***' => implode(array_keys($user->roles), ','),
  );
}
