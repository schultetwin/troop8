<?php

/**
 * Implementation of hook_user_default_permissions().
 */
function troop_award_feature_user_default_permissions() {
  $permissions = array();

  // Exported permission: create award content
  $permissions['create award content'] = array(
    'name' => 'create award content',
    'roles' => array(),
  );

  // Exported permission: create award_given content
  $permissions['create award_given content'] = array(
    'name' => 'create award_given content',
    'roles' => array(),
  );

  // Exported permission: create position content
  $permissions['create position content'] = array(
    'name' => 'create position content',
    'roles' => array(
      '0' => 'administrator',
      '1' => 'plc member',
      '2' => 'scouter',
    ),
  );

  // Exported permission: create position_given content
  $permissions['create position_given content'] = array(
    'name' => 'create position_given content',
    'roles' => array(),
  );

  // Exported permission: delete any award content
  $permissions['delete any award content'] = array(
    'name' => 'delete any award content',
    'roles' => array(),
  );

  // Exported permission: delete any award_given content
  $permissions['delete any award_given content'] = array(
    'name' => 'delete any award_given content',
    'roles' => array(),
  );

  // Exported permission: delete any position content
  $permissions['delete any position content'] = array(
    'name' => 'delete any position content',
    'roles' => array(
      '0' => 'administrator',
    ),
  );

  // Exported permission: delete any position_given content
  $permissions['delete any position_given content'] = array(
    'name' => 'delete any position_given content',
    'roles' => array(),
  );

  // Exported permission: delete own position content
  $permissions['delete own position content'] = array(
    'name' => 'delete own position content',
    'roles' => array(
      '0' => 'administrator',
      '1' => 'plc member',
      '2' => 'scouter',
    ),
  );

  // Exported permission: delete own position_given content
  $permissions['delete own position_given content'] = array(
    'name' => 'delete own position_given content',
    'roles' => array(),
  );

  // Exported permission: edit any position content
  $permissions['edit any position content'] = array(
    'name' => 'edit any position content',
    'roles' => array(
      '0' => 'administrator',
      '1' => 'plc member',
      '2' => 'scouter',
    ),
  );

  // Exported permission: edit any position_given content
  $permissions['edit any position_given content'] = array(
    'name' => 'edit any position_given content',
    'roles' => array(),
  );

  // Exported permission: edit own position content
  $permissions['edit own position content'] = array(
    'name' => 'edit own position content',
    'roles' => array(
      '0' => 'administrator',
      '1' => 'plc member',
      '2' => 'scouter',
    ),
  );

  // Exported permission: edit own position_given content
  $permissions['edit own position_given content'] = array(
    'name' => 'edit own position_given content',
    'roles' => array(),
  );

  return $permissions;
}
