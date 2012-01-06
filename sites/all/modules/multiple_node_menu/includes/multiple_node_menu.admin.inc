<?php

function _multiple_node_menu_settings_form($form_state) {
  $form = array();
	
  $menus = menu_get_menus();
	
  $options = array();
  foreach($menus as $menu_name => $title){
    $options[$menu_name] = $title;
  }
	
  $form['multiple_node_menu_menus'] = array(
    '#type' => 'checkboxes',
    '#title' => t('Menus'),
    '#options' => $options,
    '#default_value' => variable_get('multiple_node_menu_menus', array()),
    '#description' => t('Choose the menus you want accessible in the node edit form. If none are selected, all will be enabled.'),
  );
	
  return system_settings_form($form);
}
