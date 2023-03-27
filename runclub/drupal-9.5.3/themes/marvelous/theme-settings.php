<?php

/**
 * @file
 * Implements().
 */

use Drupal\Core\Form\FormStateInterface;

/**
 * @file
 * Marvelous theme file.
 */

/**
 * Dark awesome form alter.
 */
function marvelous_form_system_theme_settings_alter(&$form, FormStateInterface $form_state, $form_id = NULL) {
  if ($form['#attributes']['class'][0] == 'system-theme-settings') {
    $form['#attached']['library'][] = 'marvelous/theme.setting';
    $options_theme = [
      'left' => 'Left Side',
      'right' => 'Right Side',
    ];

    // >>>>>>>>>>>>>>>>Header color>>>>>>>>
    $form['show_header_color']['header_colors'] = [
      '#type' => 'details',
      '#title' => t('Header Background Color'),
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
    ];
    $form['show_header_color']['header_colors']['show_header_color'] = [
      '#type' => 'checkbox',
      '#title' => t('Want to Header Background Color'),
      '#default_value' => theme_get_setting('show_header_color'),
      '#description'   => t("Show/Hide header color details"),
    ];
    $form['show_header_color']['header_colors']['header_color'] = [
      '#type' => 'textfield',
      '#title' => t('Background color'),
      '#default_value' => theme_get_setting('header_color'),
      '#description' => t("Enter Header Background Color, code manually"),
    ];

    // >>>>>>> Number of slides you want to display>>>>>>>>>
    $form['show_slide_num']['slide_num_display'] = [
      '#type' => 'details',
      '#required' => TRUE,
      '#title' => t('Number of slide'),
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
    ];
    $form['show_slide_num']['slide_num_display']['show_slide_num'] = [
      '#type' => 'checkbox',
      '#title' => t('Show Slider'),
      '#default_value' => theme_get_setting('show_slide_num'),
      '#description' => t('Show/Hide'),
    ];
    $form['show_slide_num']['slide_num_display']['slide_num'] = [
      '#type' => 'textfield',
      '#title' => t('Enter Number of slider you want to display'),
      '#default_value' => theme_get_setting('slide_num'),
      '#description' => t("Enter Number of slider you want to display"),
    ];
    $no = theme_get_setting('slide_num');
    $display = theme_get_setting('show_slide_num');

    // Slide show>>>>>>>>>>>>>>>>>.
    if ($no > 0 || $display) {
      $form['banner']['slideshow'] = [
        '#type' => 'details',
        '#title' => t('Slider'),
        '#collapsible' => TRUE,
        '#collapsed' => FALSE,
      ];
      $form['banner']['slideshow']['banner'] = [
        '#type' => 'checkbox',
        '#title' => t('Show slider'),
        '#default_value' => theme_get_setting('banner', 'marvelous'),
        '#description' => t('Show/hide slider'),
      ];
      $form['banner']['slideshow']['hero_color'] = [
        '#type' => 'textfield',
        '#title' => t('Background-color'),
        '#default_value' => theme_get_setting('hero_color'),
        '#description' => t("Enter Hero color, code manually"),
      ];
      $form['banner']['slideshow']['slide'] = [
        '#markup' => t('You can change the description of each slide in the following Slide Setting fieldsets.'),

      ];
      for ($i = 1; $i <= $no; $i++) {
        $form['banner']['slideshow']['slide' . $i] = [
          '#type' => 'fieldset',
          '#title' => t('Slide  @i', ['@i' => $i]),
          '#attributes' => [
            'id' => 'slide' . $i,
            'class' => ['slide_show'],
          ],
        ];
        $form['banner']['slideshow']['slide' . $i]['slide' . $i . '_title'] = [
          '#type' => 'textfield',
          '#title' => t('Title'),
          '#default_value' => theme_get_setting('slide' . $i . '_title', 'marvelous'),

        ];
        $form['banner']['slideshow']['slide' . $i]['slide' . $i . '_head'] = [
          '#type' => 'textfield',
          '#title' => t('Heading'),
          '#default_value' => theme_get_setting('slide' . $i . '_head', 'marvelous'),
        ];
        $form['banner']['slideshow']['slide' . $i]['slide' . $i . '_des'] = [
          '#type' => 'textfield',
          '#title' => t('Description'),
          '#default_value' => theme_get_setting('slide' . $i . '_des', 'marvelous'),
        ];
        $form['banner']['slideshow']['slide' . $i]['slide' . $i . '_url'] = [
          '#type' => 'textfield',
          '#title' => t('URL 1'),
          '#default_value' => theme_get_setting('slide' . $i . '_url', 'marvelous'),

        ];
        $form['banner']['slideshow']['slide' . $i]['slide' . $i . '_url_text'] = [
          '#type' => 'textfield',
          '#title' => t('Url title'),
          '#default_value' => theme_get_setting('slide' . $i . '_url_text', 'marvelous'),
        ];
        $form['banner']['slideshow']['slide' . $i]['slide' . $i . '_url_1'] = [
          '#type' => 'textfield',
          '#title' => t('URL 2'),
          '#default_value' => theme_get_setting('slide' . $i . '_url_1', 'marvelous'),

        ];
        $form['banner']['slideshow']['slide' . $i]['slide' . $i . '_url_text_1'] = [
          '#type' => 'textfield',
          '#title' => t('Url title'),
          '#default_value' => theme_get_setting('slide' . $i . '_url_text_1', 'marvelous'),
        ];

      }

    }
    else {
      $form['banner']['slideshow'] = [
        '#type' => 'details',
        '#type' => 'hidden',
        '#title' => t('Slider'),
        '#collapsible' => TRUE,
        '#collapsed' => FALSE,
      ];

    }

    // >>>>>>>>>Header image >>>>>>>>>>>>>>>>>>>
    $form['show_header_image']['header_image'] = [
      '#type' => 'details',
      '#title' => t('Hero section image'),
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
    ];
    $form['show_header_image']['header_image']['show_header_image'] = [
      '#type' => 'checkbox',
      '#title' => t('Show Hero Section Image'),
      '#default_value' => theme_get_setting('show_header_image'),
      '#description' => t('Show/Hide'),
    ];
    $form['show_header_image']['header_image']['image'] = [
      '#type' => 'managed_file',
      '#title' => t('Hero Section image'),
      '#default_value' => theme_get_setting('image', 'marvelous'),
      '#upload_location' => 'public://',
      '#upload_validators' => [
        'file_validate_extensions' => ['gif png jpg jpeg svg'],
      ],

    ];
    // >>>>>>>>>>>>>>>>Content color>>>>>>>>
    $form['show_content_color']['content_colors'] = [
      '#type' => 'details',
      '#title' => t('Content Background'),
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
    ];
    $form['show_content_color']['content_colors']['show_content_color'] = [
      '#type' => 'checkbox',
      '#title' => t('Want to Content Background Color'),
      '#default_value' => theme_get_setting('show_content_color'),
      '#description'   => t("Show/Hide header color details"),
    ];
    $form['show_content_color']['content_colors']['Content_color'] = [
      '#type' => 'textfield',
      '#title' => t('Background Color'),
      '#default_value' => theme_get_setting('Content_color'),
      '#description' => t("Enter Content Background Color, code manually"),
    ];

    // >>>>>>>>>>>>>>>>Footer color>>>>>>>>
    $form['show_Footer_color']['Footer_colors'] = [
      '#type' => 'details',
      '#title' => t('Footer Color'),
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
    ];
    $form['show_Footer_color']['Footer_colors']['show_footer_color'] = [
      '#type' => 'checkbox',
      '#title' => t('Want to Footer color'),
      '#default_value' => theme_get_setting('show_footer_color'),
      '#description'   => t("Show/Hide footer details"),
    ];
    $form['show_Footer_color']['Footer_colors']['footer_color'] = [
      '#type' => 'textfield',
      '#title' => t('Footer color'),
      '#default_value' => theme_get_setting('footer_color'),
      '#description' => t("Enter Footer color, code manually"),
    ];

    // >>>>>>> Footer First >>>>>>>>>
    $form['show_footer_first_details']['footer_details'] = [
      '#type' => 'details',
      '#title' => t('Footer first details'),
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
    ];
    $form['show_footer_first_details']['footer_details']['show_footer_first_details'] = [
      '#type' => 'checkbox',
      '#title' => t('Show footer details'),
      '#default_value' => theme_get_setting('show_footer_first_details'),
      '#description'   => t("Show/Hide footer details"),
    ];
    $form['show_footer_first_details']['footer_details']['footer_image'] = [
      '#type' => 'managed_file',
      '#title' => t('Footer image'),
      '#default_value' => theme_get_setting('footer_image', 'marvelous'),
      '#upload_location' => 'public://',
      '#upload_validators' => [
        'file_validate_extensions' => ['gif png jpg jpeg'],
      ],
    ];

    $form['show_footer_first_details']['footer_details']['footer_text'] = [
      '#type' => 'textfield',
      '#title' => t('Company Name'),
      '#default_value' => theme_get_setting('footer_text'),
      '#description' => t("Enter your Company Name"),
    ];
    $form['show_footer_first_details']['footer_details']['footer_email'] = [
      '#type' => 'email',
      '#title' => t('Company email'),
      '#default_value' => theme_get_setting('footer_email'),
      '#description' => t("Enter your Company email"),
    ];
    $form['show_footer_first_details']['footer_details']['footer_phone'] = [
      '#type' => 'textfield',
      '#title' => t('Company Phone'),
      '#default_value' => theme_get_setting('footer_phone'),
      '#description' => t("Enter your Company phone"),
    ];
    $form['show_footer_first_details']['footer_details']['footer_address'] = [
      '#type' => 'textfield',
      '#title' => t('Company address'),
      '#default_value' => theme_get_setting('footer_address'),
      '#description' => t("Enter your Company address"),
    ];

    // >>>>>>>>>>>Footer fourth >>>>>>>>
    $form['show_footer_fourth_details']['footer_fourth_details'] = [
      '#type' => 'details',
      '#title' => t('Footer Fourth details'),
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
    ];
    $form['show_footer_fourth_details']['footer_fourth_details']['show_footer_fourth_details'] = [
      '#type' => 'checkbox',
      '#title' => t('Show footer details'),
      '#default_value' => theme_get_setting('show_footer_fourth_details'),
      '#description'   => t("Show/Hide footer details"),
    ];
    $form['show_footer_fourth_details']['footer_fourth_details']['footer_head'] = [
      '#type' => 'textfield',
      '#title' => t('Heading'),
      '#default_value' => theme_get_setting('footer_head'),
      '#description' => t("Enter footer heading"),
    ];
    $form['show_footer_fourth_details']['footer_fourth_details']['footer_des'] = [
      '#type' => 'textfield',
      '#title' => t('Description'),
      '#default_value' => theme_get_setting('footer_des'),
      '#description' => t("Enter description"),
    ];

    // >>>>>>>>>>> Social Media Link
    $form['show_social_icon']['social_icon'] = [
      '#type' => 'details',
      '#title' => t('Social Media Link'),
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
    ];
    $form['show_social_icon']['social_icon']['show_social_icon'] = [
      '#type' => 'checkbox',
      '#title' => t('Show Social Icons'),
      '#default_value' => theme_get_setting('show_social_icon'),
      '#description'   => t("Show/Hide social media links"),
    ];
    $form['show_social_icon']['social_icon']['facebook_url'] = [
      '#type' => 'textfield',
      '#title' => t('Facebook Link'),
      '#default_value' => theme_get_setting('facebook_url'),
    ];
    $form['show_social_icon']['social_icon']['twitter_url'] = [
      '#type' => 'textfield',
      '#title' => t('Twitter Link'),
      '#default_value' => theme_get_setting('twitter_url'),
    ];
    $form['show_social_icon']['social_icon']['instagram_url'] = [
      '#type' => 'textfield',
      '#title' => t('Instagram Link'),
      '#default_value' => theme_get_setting('instagram_url'),
    ];
    $form['show_social_icon']['social_icon']['linkedin_url'] = [
      '#type' => 'textfield',
      '#title' => t('Linkedin Link'),
      '#default_value' => theme_get_setting('linkedin_url'),
    ];

    // >>>>>>>>>>Footer copyright>>>>>>>>>
    $form['footer_details'] = [
      '#type' => 'details',
      '#title' => t('Copyright'),
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
    ];
    $form['footer_details']['footer_details'] = [
      '#type' => 'checkbox',
      '#title' => t('Show Copyright'),
      '#default_value' => theme_get_setting('footer_details'),
      '#description'   => t("Show/Hide Copyright"),
    ];
    $form['footer_details']['copyright_color'] = [
      '#type' => 'textfield',
      '#title' => t('Footer Bottom color'),
      '#default_value' => theme_get_setting('copyright_color'),
      '#description' => t("Enter Footer Bottom color, code manually"),
    ];

    $form['footer_details']['footer_copyright'] = [
      '#type' => 'textarea',
      '#title' => t('Footer Copyright:'),
      '#default_value' => theme_get_setting('footer_copyright'),
      '#description' => t("Text area for Footer Copyright."),
    ];
    $form['footer_details']['footer_deve_text'] = [
      '#type' => 'textarea',
      '#title' => t('Developer info'),
      '#default_value' => theme_get_setting('footer_deve_text'),
      '#description' => t("Developer info."),
    ];

    // >>>>>>>>>>>CSS STYLE >>>>>>>>
    $form['show_css_details']['footer_css_details'] = [
      '#type' => 'details',
      '#title' => t('CSS STYLE'),
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
    ];
    $form['show_css_details']['footer_css_details']['show_css_details'] = [
      '#type' => 'checkbox',
      '#title' => t('Show footer details'),
      '#default_value' => theme_get_setting('show_css_details'),
      '#description'   => t("Show/Hide footer details"),
    ];
    $form['show_css_details']['footer_css_details']['text_color'] = [
      '#type' => 'textfield',
      '#title' => t('Text Color'),
      '#default_value' => theme_get_setting('text_color'),
      '#description' => t("you can change h1 to h6 , header menu color , p color"),
    ];
    $form['show_css_details']['footer_css_details']['font_Size'] = [
      '#type' => 'textfield',
      '#title' => t('Font_Size'),
      '#default_value' => theme_get_setting('font_Size'),
      '#description' => t("you can not change Slider font size, Only change content P font size"),
    ];
    $form['show_css_details']['footer_css_details']['link_color'] = [
      '#type' => 'textfield',
      '#title' => t('Url color'),
      '#default_value' => theme_get_setting('link_color'),
      '#description' => t("you can change footer url color, and a color"),
    ];

    $form['#submit'][] = 'marvelous_settings_form_submit';
    $theme = \Drupal::theme()->getActiveTheme()->getName();
    $theme_file = drupal_get_path('theme', $theme) . '/marvelous.theme';
    $build_info = $form_state->getBuildInfo();
    if (!in_array($theme_file, $build_info['files'])) {
      $build_info['files'][] = $theme_file;
    }
    $form_state->setBuildInfo($build_info);

  }

}
