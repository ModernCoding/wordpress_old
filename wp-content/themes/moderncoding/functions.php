<?php 

//  adding js & css files

function gt_setup(){
  
  wp_enqueue_style(
    'google-fonts',  // alias
    'https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Slab'
  );

  wp_enqueue_style(
    'fontawesome',  // alias
    'https://use.fontawesome.com/releases/v5.1.0/css/all.css'
  );

  wp_enqueue_style(
    'style',  // alias
    get_stylesheet_uri(),   // path to the style.css
    NULL,   // dependencies
    microtime(),  // stylesheet version
    all   // media supported
  );

  wp_enqueue_script(
    'main',
    get_theme_file_uri('/js/main.js'),
    NULL,
    microtime(),
    true  // scripts to be loaded in the footer
  );

}

add_action(
  'wp_enqueue_scripts',   // alias
  'gt_setup'  // name of the function to run
);

?>