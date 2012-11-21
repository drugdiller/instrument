<?php

/**
 * @file
 * Contains theme override functions and preprocess functions for the Boron theme.
 */

/**
 * Changes the default meta content-type tag to the shorter HTML5 version
 */
function boron_html_head_alter(&$head_elements) {
  $head_elements['system_meta_content_type']['#attributes'] = array(
    'charset' => 'utf-8'
  );
}

/**
 * Changes the search form to use the HTML5 "search" input attribute
 */
function boron_preprocess_search_block_form(&$vars) {
  $vars['search_form'] = str_replace('type="text"', 'type="search"', $vars['search_form']);
}

/**
 * Uses RDFa attributes if the RDF module is enabled
 * Lifted from Adaptivetheme for D7, full credit to Jeff Burnz
 * ref: http://drupal.org/node/887600
 */
function boron_preprocess_html(&$vars) {
    $vars['doctype'] = '<!DOCTYPE html>' . "\n";
}



function boron_preprocess_page (&$variables) {
	// page--vocabulary--N.tpl.php
	if (arg(0) == 'taxonomy' && arg(1) == 'term' && is_numeric(arg(2))) {
    	$tid = arg(2);
    	$vid = db_query("SELECT vid FROM {taxonomy_term_data} WHERE tid = :tid", array(':tid' => $tid))->fetchField();
    	$variables['theme_hook_suggestions'][] = 'page__vocabulary__' . $vid;
  	}
}


/**
 * Return a themed breadcrumb trail.
 *
 * @param $breadcrumb
 *   An array containing the breadcrumb links.
 * @return
 *   A string containing the breadcrumb output.
 */
function boron_breadcrumb($vars) {
  $breadcrumb = $vars['breadcrumb'];
  // Determine if we are to display the breadcrumb.
  $show_breadcrumb = theme_get_setting('breadcrumb_display');
  if ($show_breadcrumb == 'yes') {

    // Optionally get rid of the homepage link.
    $show_breadcrumb_home = theme_get_setting('breadcrumb_home');
    if (!$show_breadcrumb_home) {
      array_shift($breadcrumb);
    }

    // Return the breadcrumb with separators.
    if (!empty($breadcrumb)) {
      $separator = filter_xss(theme_get_setting('breadcrumb_separator'));
      $trailing_separator = $title = '';

      // Add the title and trailing separator
      if (theme_get_setting('breadcrumb_title')) {
        if ($title = drupal_get_title()) {
          $trailing_separator = $separator;
        }
      }
      // Just add the trailing separator
      elseif (theme_get_setting('breadcrumb_trailing')) {
        $trailing_separator = $separator;
      }

      // Assemble the breadcrumb
      return implode($separator, $breadcrumb) . $trailing_separator . $title;
    }
  }
  // Otherwise, return an empty string.
  return '';
}

function boron_preprocess_node(&$vars) {
  // подключаем крутилку фотографии на главной
  if ($vars['page'] && $vars['node']->nid == 6) {
	drupal_add_js('http://code.jquery.com/jquery-latest.min.js');
    drupal_add_js(path_to_theme() . '/js/rotate-img.js');
  }
  
  // подключаем карту в контактах
  if ($vars['page'] && $vars['node']->nid == 8) {
	drupal_add_js('http://maps.googleapis.com/maps/api/js?sensor=false');
    drupal_add_js(path_to_theme() . '/js/map.js');
  }
}


?>