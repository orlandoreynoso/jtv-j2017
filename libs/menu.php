<?php 
$args = array(
    'menu'            => 'nav',
    'menu_id' => 'navlist',
    'menu_class'      => 'cssmenu zerogrid'
);
if (function_exists('register_nav_menus')) 
{
    register_nav_menus($args);
} 

/*===================================================*/
function showMenu(){
    $args = array(
        'menu'            => 'nav',
        'menu_id' => 'navlist',
        'menu_class'      => 'zerogrid cssmenu'
    );
    wp_nav_menu($args);
}

function menu_two(){
?>
  <div class="iconos-01">
        <a class="linkopacity" href="<?php bloginfo('url'); ?>/tv-en-linea/"><img src="<?php echo IMAGES; ?>/icon-tv.png"></a>
  </div>
  <div class="iconos-01">
        <a class="linkopacity" href="<?php bloginfo('url'); ?>/padre-hugo-estrada/"><img src="<?php echo IMAGES; ?>/icon-pray.png"></a> 
  </div>
  <div class="iconos-01">
        <a class="linkopacity" href="<?php bloginfo('url'); ?>/category/programas/"><img src="<?php echo IMAGES; ?>/icon-programs.png"></a>
  </div>    
  <div class="iconos-01">
        <a class="linkopacity" href="<?php bloginfo('url'); ?>/para-que-la-evangelizacion-no-se-detenga/"><img src="<?php echo IMAGES; ?>/icon-fe.png"><a/>
  </div>
  <div class="iconos-01">
        <a class="linkopacity" href="<?php  bloginfo('url'); ?>/category/noticias/"><img src="<?php  echo IMAGES; ?>/cuadro-jtv noticias.png"></a> 
  </div>    
<?php 
}
?>