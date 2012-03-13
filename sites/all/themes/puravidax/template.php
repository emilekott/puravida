<?php

/**
 * @file
 * This file is empty by default because the base theme chain (Alpha & Omega) provides
 * all the basic functionality. However, in case you wish to customize the output that Drupal
 * generates through Alpha & Omega this file is a good place to do so.
 * 
 * Alpha comes with a neat solution for keeping this file as clean as possible while the code
 * for your subtheme grows. Please read the README.txt in the /preprocess and /process subfolders
 * for more information on this topic.
 */

function puravidax_breadcrumb($variables) {
    $breadcrumb = $variables['breadcrumb'];
    
    if (!empty($breadcrumb)) {
        // Provide a navigational heading to give context for breadcrumb links to
        // screen-reader users. Make the heading invisible with .element-invisible.
        $output = '<h2 class="element-invisible">' . t('You are here') . '</h2>';

        $crumbs = '<div class="breadcrumb">';
        $array_size = count($breadcrumb);
        $i = 0;
        while ($i < $array_size) {
            $crumbs .= '<span class="breadcrumb-' . $i;
            if ($i == 0) {
                $crumbs .= ' first';
            }
            /* if ($i+1 == $array_size) {
              $crumbs .= ' last';
              } */
            $crumbs .= '">' . $breadcrumb[$i] . '</span>&nbsp;&nbsp;>&nbsp;&nbsp;';
            $i++;
        }
        $crumbs .= '<span class="active">' . drupal_get_title() . '</span></div>';
        return $crumbs;
    }
}

function puravidax_delta_blocks_breadcrumb($variables) {
$breadcrumb = $variables['breadcrumb'];
    
    if (!empty($breadcrumb)) {
        // Provide a navigational heading to give context for breadcrumb links to
        // screen-reader users. Make the heading invisible with .element-invisible.
        $output = '<h2 class="element-invisible">' . t('You are here') . '</h2>';

        $crumbs = '<div class="breadcrumb"><span class="breadcrumb-description">You are here: </span>';
        $array_size = count($breadcrumb);
        $i = 0;
        while ($i < $array_size) {
            $crumbs .= '<span class="breadcrumb-' . $i;
            if ($i == 0) {
                $crumbs .= ' first';
            }
            /* if ($i+1 == $array_size) {
              $crumbs .= ' last';
              } */
            $crumbs .= '">' . $breadcrumb[$i] . '</span>&nbsp;/&nbsp;';
            $i++;
        }
        $crumbs .= '<span class="active">' . drupal_get_title() . '</span></div>';
        return $crumbs;
    }
}

function puravidax_form_alter(&$form, &$form_state, $form_id) {
    //theme add to cart buttons etc.
    if (preg_match('/uc_catalog_buy_it_now_form/', $form_id) || preg_match('/uc_product_add_to_cart_form/', $form_id)){
        $form['actions']['submit'] = array('#type' => 'image_button', '#src' => base_path().'/sites/all/themes/puravidax/images/buy-now.jpg');
    }
    
    /*
    if ($form_id == 'search_block_form') {
        $form['search_block_form']['#title'] = t('Search'); 
        $form['search_block_form']['#title_display'] = 'invisible'; 
        $form['search_block_form']['#size'] = 20;  
        $form['search_block_form']['#default_value'] = t('Search the site...'); 
        // $form['actions']['submit']['#value'] = t('GO!'); // Change the text on the submit button
        $form['actions']['submit'] = array('#type' => 'image_button', '#src' => base_path() . path_to_theme() . '/images/search-button.png');

        
        $form['search_block_form']['#attributes']['onblur'] = "if (this.value == '') {this.value = 'Search the site...';}";
        $form['search_block_form']['#attributes']['onfocus'] = "if (this.value == 'Search the site...') {this.value = '';}";
    }
    if ($form_id == 'user_login_block')
        unset($form['links']);

*/
}
