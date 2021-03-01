<?php
  // esto son los widgets
//__________________________________________________________
    // esto carga algo
function miTemaTutorial_add_CSS_js() {
    // esto carga algo
    wp_enqueue_style('normalize-styles', "https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css");
    // esto carga el archivo style.css
    wp_enqueue_style('miCss', get_template_directory_uri() .'/style.css');
  }
  // hook que inicia el fincion miTemaTutorial_add_CSS_js
  add_action( 'wp_enqueue_scripts', 'miTemaTutorial_add_CSS_js' );

  //__________________________________________________________
  // añade un nuevo sidebar simple llamado sidebar
  function add_widget_Support() {
    register_sidebar( array(
                    'name'          => 'Sidebar',
                    'id'            => 'sidebar',
                    'before_widget' => '<div>',
                    'after_widget'  => '</div>',
                    'before_title'  => '<h2>',
                    'after_title'   => '</h2>',
      ) 
    );
  }
  // hook que inicia el fincion add_widget_Support()
  add_action( 'widgets_init', 'add_Widget_Support' );


  //__________________________________________________________
  // añade un menu de navegador
  function miTemaTutorial_add_menu() {
    register_nav_menus( array(
      'header-menu'     => __( 'Header Menu' )
      )
    );
  }
  // hook que inicia el fincion miTemaTutorial_add_CSS_js
  add_action( 'init', 'miTemaTutorial_add_menu' );