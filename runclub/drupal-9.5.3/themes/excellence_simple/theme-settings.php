<?php

function excellence_simple_form_system_theme_settings_alter(&$form,&$form_state) {
  $form['#attached']['library'][] = 'excellence_simple/theme-settings';
  $form['setexcellence'] = array(
    '#type' => 'fieldset',
    '#title' => t('MtT Theme Settings'),
    '#collapsible' => false,
    '#collapsed' => false,
    );
  $form['setexcellence']['tabs'] = array(
    '#type' => 'vertical_tabs',
    '#default_tab' => 'basic_tab',
    );
  $form['setexcellence']['basic_tab']['basic_settings'] = array(
    '#type' => 'details',
    '#title' => t('Basic Settings'),
    '#collapsible' => true,
    '#collapsed' => true,
    '#group' => 'tabs',
    );
  $form['setexcellence']['basic_tab']['basic_settings']['scrolltop'] = array(
    '#type' => 'item',
    '#markup' => '<div class="theme-settings-title">' . t("Scroll to top") . '</div>',
    );
  $form['setexcellence']['basic_tab']['basic_settings']['scrolltop_display'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show scroll-to-top button'),
    '#description' => t('Use the checkbox to enable or disable scroll-to-top button.'),
    '#default_value' => theme_get_setting('scrolltop_display','excellence_simple'),
    '#collapsible' => true,
    '#collapsed' => true,
    );
  $form['setexcellence']['bootstrap_tab']['bootstrap'] = array(
    '#type' => 'details',
    '#title' => t('Bootstrap'),
    '#collapsible' => true,
    '#collapsed' => true,
    '#group' => 'tabs',
    );
  $form['setexcellence']['bootstrap_tab']['bootstrap']['bootstrap_remote_type'] = array(
    '#type' => 'select',
    '#title' => t('Select the remote type'),
    '#description' => t('From the drop down select box, select how to load the Bootstrap library. If you select "Local" make sure that you download and place Bootstrap folder into the root theme folder (excellence_simple/bootstrap).'),
    '#default_value' => theme_get_setting('bootstrap_remote_type','excellence_simple'),
    '#options' => array(
      'local' => t('Local / No remote'),
      'cdn' => t('CDN'),
      ),
    );
  $form['setexcellence']['premium_tab']['premium'] = array(
    '#type' => 'details',
    '#title' => t('Premium Themes'),
    '#collapsible' => true,
    '#collapsed' => true,
    '#group' => 'tabs',
    );
  $form['setexcellence']['premium_tab']['premium']['premium_description'] = array(
    '#type' => 'item',
    '#markup' => '<div class="theme-settings-title">' . t("Check Our Premium themes") . '</div>',
    );
}
