<!DOCTYPE html>
<!-- para que se muestre en el idioma que el usuario elijio en la instalacion -->
<html <?php language_attributes(); ?>>
 <head>
   <!-- muestra el nombre del sitio, if… then… para mostrar el lema del sitio web O el título de la página o publicación actual que estás viendo -->
   <title><?php bloginfo('name'); ?> &raquo; <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
   <meta charset="<?php bloginfo( 'charset' ); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <?php wp_head(); ?>
 </head>

 <body <?php body_class(); ?>>
    <header class="my-logo">
      <h1><a href="<?php //echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a></h1>
    </header>
    <nav>
      <!-- no se lo que hace -->
      <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
    </nav>
 