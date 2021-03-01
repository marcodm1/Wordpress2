<?php 
// Hace que la barra lateral y los widgets aparezcan en su tema dondequiera que se llame a get_sidebar().

//esto indica a WordPress que si no se habilitan widgets, no se debe mostrar el código HTML de la barra lateral
  if (is_active_sidebar('sidebar')) : 
?>

<!-- establece los atributos del elemento que contiene los widgets. -->
<aside id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
  <!-- es la función WordPress para mostrar los widgets -->
<?php dynamic_sidebar('sidebar');?>
</aside>

<?php endif;?>

<!-- 
Para facilitar la navegación entre publicaciones y páginas, 
abre el panel de control del administrador y agrega los widgets Páginas y 
Entradas recientes a la barra lateral.

 -->