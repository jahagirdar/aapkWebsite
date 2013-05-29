<?php
/* 
 * To change these defaults, copy these functions into your child theme's
 * template.php file, or if you don't have a template.php file yet, copy
 * this entire file into  your child theme folder and rename this file as
 * "template.php" -- and replace 'aap_square' with your theme's name.
 * See readme.txt for explanation as to how "sg-x", "push-x"
 * classes work to define layout.
 */
 

// Example code for adding CSS using drupal_add_css
function aap_square_preprocess_html(&$vars) {
    drupal_add_css(drupal_get_path('theme', 'aap_square') . '/yourcssfolder/yourcssfile.css', array('group' => CSS_THEME, 'preprocess' => TRUE, 'every_page' => TRUE, 'weight' => '-3'));
}

// Define page region class variables for whether 1 or 2 sidebars
// NOTE: The settings represented here are configurable on your theme's configuration page.
//       The code below is provided as an example for you to draw from if you define new regions needing
//       squaregrid grid settings.
function aap_square_preprocess_page(&$variables) {
  $page = $variables['page'];

//	// if both sidebars are present
//	  if ($page['sidebar_first'] && $page['sidebar_second']) {
//	    $variables['class_content'] = t('sg-18 push-9');
//	    $variables['class_sidebar_first'] = t('sg-8');
//	    $variables['class_sidebar_second'] = t('sg-7 push-28');
//	  }
//	
//	// if only first sidebar is present
//	  if ($page['sidebar_first'] && !$page['sidebar_second']) {
//	    $variables['class_content'] = t('sg-21 push-14');
//	    $variables['class_sidebar_first'] = t('sg-13');
//	  }
//	
//	// if only second sidebar is present
//  if ($page['sidebar_right'] && !$page['sidebar_first']) {
    $variables['class_header'] = t('sg-26');
    $variables['class_highlighted'] = t('sg-26');
    $variables['class_sidebar_right'] = t('sg-8 push-27');
    $variables['class_content1_left'] = t('sg-8 ');
    $variables['class_content1_center'] = t('sg-8 push-9');
    $variables['class_content1_right'] = t('sg-8 push-18');
    $variables['class_content2_left'] = t('sg-8 ');
    $variables['class_content2_center'] = t('sg-8 push-9');
    $variables['class_content2_right'] = t('sg-8 push-18');
    $variables['class_footer1'] = t('sg-8 ');
    $variables['class_footer2'] = t('sg-8 push-9');
    $variables['class_footer3'] = t('sg-8 push-18');
    $variables['class_footer4'] = t('sg-8 push-26');
//  }
// 
//// if no sidebar is present
//  if (!$page['sidebar_first'] && !$page['sidebar_second']) {
//    $variables['class_content'] = t('sg-35');
//  }
  
}
