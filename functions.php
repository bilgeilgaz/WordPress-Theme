<?php

//Theme setup
function ontheway_setup(){

  //Navigation Menus
  register_nav_menus(array(

    'primary' => __('Primary Menu'),
    'footer'  => __('Footer Menu')
  ));

  //Add featured image support
  add_theme_support('post-thumbnails');
  add_image_size('small-thumbnail', 300, 200, true);
  add_image_size('banner-image', 1120, 210, true );

  //Register sidebar location function
  register_sidebar(array(
    'name' =>('Sidebar'),
    'id' =>('sidebar-1'),
    'class' => ('custom')
    )
  );

}

add_action('after_setup_theme', 'ontheway_setup');
