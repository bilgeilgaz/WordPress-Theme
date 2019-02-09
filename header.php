<!DOCTYPE html>
<html <?php language_attributes(); ?>>

    <head>
      <meta charset="<?php bloginfo('charset'); ?>">
      <title>On The Way</title>
      <?php wp_head(); ?>
      <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
      <link href="https://fonts.googleapis.com/css?family=Ruthie" rel="stylesheet">
  </head>

<body <?php body_class(); ?>>

<div class = "container">

  <header class ="site-header">

    <h1><a href ="<?php echo home_url();?>"><?php bloginfo('name'); ?></a></h1>

    <nav class ="site-nav">

      <?php $args = array( 'theme_location' => 'primary' );  ?>

      <?php wp_nav_menu( $args ); ?>

    </nav>

  </header>
