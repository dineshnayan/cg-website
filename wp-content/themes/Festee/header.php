<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <meta name="robots" content="noindex, nofollow"> -->
  <title><?php wp_title(); ?></title>
  <?php wp_head(); ?>

</head>

<body>
  <?php
  if (function_exists('the_custom_logo')) {
    the_custom_logo();
  }
  ?>
  <?php
  wp_nav_menu(array(
    'theme_location' => 'primary',
    'container' => 'nav',
    'container_class' => 'primary-menu',
    'menu_class' => 'menu',
  ));
  ?>