<?php
// $Id: taxonomy_defaults.admin.inc,v 1.1.2.4 2008/12/20 18:11:52 sleepcamel Exp $

/**
 * Defines the page at admin/content/taxonomy/taxonomy_defaults.
 */
function taxonomy_defaults_form() {
  // For each node type we generate per vocabulary a checkbox & term select.
  $form['#tree'] = TRUE;
  $vocabularies = taxonomy_get_vocabularies();
  foreach (node_get_types() as $type => $name) {
    $type_vocabularies = taxonomy_get_vocabularies($type);
    // Loop over all vocabularies
    foreach ($vocabularies as $vid => $vocab) {
      $activevocab = array_key_exists($vid, $type_vocabularies);
      $form[$type][$vid]['active'] = array(
        '#type' => 'checkbox',
        '#default_value' => variable_get("taxdef_{$type}_{$vid}_active", FALSE),
        '#weight' => -16,
      );
      $form[$type][$vid]['name'] = array('#value' => t( $vocab->name ) );

      if ($vocab->tags) {
        $form[$type][$vid]['tags'] = array('#type' => 'textfield',
       /*   '#title' => $vocabulary->name,
          '#description' => $help,
          '#required' => $vocabulary->required,
          '#default_value' => $typed_string,*/
          '#autocomplete_path' => 'taxonomy/autocomplete/'. $vocabulary->vid,
          '#weight' => $vocabulary->weight,
          '#maxlength' => 255,
        );
      } else {
        $form[$type][$vid]['select'] = taxonomy_form($vid, variable_get("taxdef_{$type}_{$vid}", 0));
      }
      $form[$type][$vid]['tip'] = array('#value' => $activevocab ? '' : '<p>'. t('The <strong>!vocab</strong> vocabulary is not enabled for the <strong>!type</strong> content type. Default terms will be added to the content without appearing on the add and edit pages.</p>', array('!vocab'=>$vocab->name, '!type'=>$name->name) ) );
    }
    if (count($vocabularies) > 0) {
      $form['buttons']['submit'] = array('#type' => 'submit', '#value' => t('Save configuration') );
      $form['buttons']['reset'] = array('#type' => 'submit', '#value' => t('Reset to defaults') );
    }
    else {
      $form['text'] = array(
        '#value' => t('Before you can assign default terms to node types, go to !link to create and fill vocabularies.', array('!link' => l(t('add vocabulary'), 'admin/content/taxonomy/add/vocabulary'))),
      );
    }
  }
  return $form;
}


/**
 * Store settings in the variable table.
 */
function taxonomy_defaults_form_submit($form, &$form_state) {
  $op = $form_state['clicked_button']['op'];

  if ($op == t('Reset to defaults')) {
    foreach (node_get_types() as $type => $name) {
      foreach ($form_state['values'][$type] as $vid => $values) {
        variable_del("taxdef_{$type}_{$vid}_active");
        variable_del("taxdef_{$type}_{$vid}");
      }
    }
    drupal_set_message(t('The configuration options have been reset to their default values.'));
  }
  else {
    foreach (node_get_types() as $type => $name) {
      foreach ($form_state['values'][$type] as $vid => $values) {
        variable_set("taxdef_{$type}_{$vid}_active", $values['active']);
        if ($values['active']) {
          variable_set("taxdef_{$type}_{$vid}", is_array($values['select']) ? $values['select'] : array($values['select']));
        }
      }
    }
    drupal_set_message(t('The configuration options have been saved.'));
  }
}

/**
 * Renders the settings form in a table.
 */
function theme_taxonomy_defaults_form($form) {
  drupal_add_css(drupal_get_path('module', 'taxonomy_defaults') .'/taxonomy_defaults.css', 'module', 'all', FALSE);
 
  $output = '';

  foreach (node_get_types() as $type => $name) {
    $rowcount = 0;
    foreach (element_children($form[$type]) as $key) {
      $form[$type][$key]['select']['#title']='';

      $vocabtable[$rowcount][] = drupal_render($form[$type][$key]['name']);
      $vocabtable[$rowcount][] = drupal_render($form[$type][$key]['active']);
      $vocabtable[$rowcount][] = drupal_render($form[$type][$key]['select']);
      $vocabtable[$rowcount][] = array( 'data' => drupal_render($form[$type][$key]['tip']) );
      $rowcount++;
    }
    $subtable = theme('table', array(t('Vocabulary'),t('Enabled'),t('Default Terms'), t('Notes')), $vocabtable);
    unset($vocabtable);

    $fieldset = array(
      '#title' => $name->name,
      '#collapsible' => TRUE,
      '#collapsed' => TRUE,
      '#value' => $subtable,
    );

    $output .= theme('fieldset', $fieldset);

  }

  // Render remaining fields
  $output .= drupal_render($form);
  return $output;
}
