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
      'all'   // media supported
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


  //  adding theme support

  function gt_init() {
    
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    
    add_theme_support(
      'html5',
      array('comment-list', 'comment-form', 'search-form')
    );
  
  }


  add_action(
    'after_setup_theme',   // alias
    'gt_init'  // name of the function to run
  );


  //  projects post type

  function gt_custom_post_type() {
    
    register_post_type(

      'project',

      array(
        'rewrite'       =>  array('slug' => 'projects'),

        'labels'        =>  array(
          'name'            =>  'Projects',
          'singular_name'   =>  'Project',
          'add_new_item'    =>  'Add New Project',
          'edit_item'       =>  'Edit Project'
        ),

        'menu-icon'     =>  'dashicons-clipboard',
        'public'        =>  true,
        'has_archive'   =>  true,

        'supports'      =>  array(
          'title',
          'thumbnail',
          'editor',
          'excerpt',
          'comments'
        )
      )

    );
  
  }


  add_action(
    'init',   // alias
    'gt_custom_post_type'  // name of the function to run
  );


?>