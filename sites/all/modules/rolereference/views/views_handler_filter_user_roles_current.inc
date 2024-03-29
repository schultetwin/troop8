<?php
// $Id$

/**
 * Filter handler for the current user
 */
class views_handler_filter_user_roles_current extends views_handler_filter_boolean_operator {
  function construct() {
    parent::construct();
    $this->value_value = t('Has role of the logged in user');
  }

  function query() {
    $this->ensure_my_table();
    $this->query->add_where($this->options['group'], "$this->table_alias.$this->real_field " . (empty($this->value) ? 'NOT IN' : 'IN') . " (***CURRENT_USER_ROLES***)");
  }
}
