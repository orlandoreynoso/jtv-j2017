<?php 
/*
Template Name: homeJesustv
 */
 get_header();
?>
<section class="iconos">
  <div class="cuadro-iconos">
    <?php menu_two(); ?>
  </div>
</section>
<section id="block01">
  <article  class="col-logo">
      <?php  if (is_page(4)) {   dynamic_sidebar('previo-evento-mes');   }   ?>                
  </article>
  <article  class="col-youtube">
<iframe src="http://livestream.com/accounts/17608437/events/4834657/player?width=560&height=315&autoPlay=true&mute=false" width="560" height="315" frameborder="0" scrolling="no"> </iframe>
  </article>
</section>
<section id="content">
  <article class="col-2-3">
      <div class="mapeo"><?php the_breadcrumb(); ?></div>

      <?php include (TEMPLATEPATH . '/libs/compartir_fail.php'); ?>

      <div class="clearfix">
      </div>
      <div class="contenido-cartelera">
                  <?php
          // Start the loop.
          while ( have_posts() ) : the_post();
            // Include the page content template.
            get_template_part( 'content', 'page' );
            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
              comments_template();
            endif;
          // End the loop.
          endwhile;
          ?>
         <?php  the_content(); ?> 
      </div>
  </article>
  <aside class="col-1-5">
      <div class="cuadro-buscador">
        <h1>Busca tu contenido favorito</h1>
        <div class="buscador"><?php  get_search_form(); ?></div>
      </div>
      <div class="lateral">
      <?php  if (is_page(4)) {   dynamic_sidebar('ultimas-actualizaciones');   }       ?>
      </div>  
      <div class="titulo"><h2>Danos like en facebook</h2></div>
      <div class="redes">
      <iframe scrolling="no" frameborder="0" class="face_cocos" src="http://www.facebook.com/plugins/likebox.php?href=https://www.facebook.com/Jesustvcanal&amp;width=263&amp;colorscheme=light&amp;connections=0&amp;stream=true&amp;header=true&amp;height=380" allowtransparency="true"> </iframe>             
      </div>
  </aside>
<div class="clearfix"></div>
</section>
<?php get_footer();  ?>