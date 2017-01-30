<?php 
// Esto es para aderir una imágen destacada.
add_theme_support('post-thumbnails');
add_image_size( $name, $width, $height, $crop );
/* devuelve el directorio de stilo de css, y se le asigna a temppath */
define('TEMPPATH',get_bloginfo('stylesheet_directory'));
/*En esto concatenamos la carpeta images*/
define('IMAGES',TEMPPATH. "/images");
// Esto es para aderir una imágen destacada.
add_theme_support('post-thumbnails');
add_image_size( $name, $width, $height, $crop );
/*======== Menu para todos ========================*/
include (TEMPLATEPATH . '/libs/menu.php'); 
include (TEMPLATEPATH . '/libs/totop.php'); 
include (TEMPLATEPATH . '/libs/the_breadcrumb.php');
include (TEMPLATEPATH . '/libs/show_categorys.php'); 
include (TEMPLATEPATH . '/libs/sidebars.php'); 
include (TEMPLATEPATH . '/libs/paginacion.php'); 
?>