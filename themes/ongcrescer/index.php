<?php
/**
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage OngCrescer
 * @since OngCrescer 2017-10-23
 */
?>

<?php get_header(); ?>

<main class="l-main">
  <div class="l-home">
    <?php
        $images = rwmb_meta( 'home-destaque-image', 'type=image_advanced' );
        $image_background = null;
        foreach($images as $image){
          $image_background = $image["full_url"];
        }
    ?>
    
    
      <div class="overlay">
          <div class="ong-carousel">
          <div class="carousel-box" style="background: url(<?php echo $image_background ?>) no-repeat; background-size: 100% auto;">
            <div class="ong-carousel-item">
              <h1 class="title"><?php echo rwmb_meta( 'home-destaque-title' ) ?></h1>
              <p  class="subtitle"><?php echo rwmb_meta( 'home-destaque-subtitle' ) ?></p>
            </div>
          </div>
            <div class="category-icons">
              <ul>
                <li>
                    <p class="unicode">&#x1F46A;</p>
                  <span>Familia</span>
                </li>
                <li>
                    <p class="unicode">&#x26BD;</p>
                  <span>Esportes</span>
                </li>
                <li>
                    <p class="unicode">&#x1F415;</p>
                  <span>Animais</span>
                </li>
                <li>
                    <p class="unicode">&#x1F467;</p>
                  <span>Crianças e Jovens</span>
                </li>
                <li>
                    <p class="unicode">&#x1F393;</p>
                  <span>Educação</span>
                </li>
                <li>
                    <p class="unicode">&#x1F30F;</p>
                  <span>Meio Ambiente</span>
                </li>
              </ul>
            </div><!-- /category-icons -->
      </div> <!-- /overlay -->
    </div> <!-- /carousel-box -->
    
    	<div class="row-content">
  
       <h2 class="eventos-title">Próximos Eventos</h2>
  
       <p class="subtitle"><?php echo rwmb_meta( 'home-destaque-evento-desc' );?></p>
       <div class="categorias-eventos"><?php wp_nav_menu( array('menu' =>'eventos'));?></div>
       <div class="row evento-bloco">
       <?php
                            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
          
                $args = array(
                    'post_type' => 'ong_event',
                    "posts_per_page" => 4,
                    'paged' => $paged,
                    'orderby'   => 'id',
                    );
                $query = new WP_Query($args);
                
                $count_posts = wp_count_posts('ong_loja')->publish;
                
                ?>
                <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); // run the loop ?>
                            
                            
                            
                            <?php
        $images_evento = rwmb_meta( 'eventos-image', 'type=image_advanced' );
        $image_eventos = null;
        foreach($images_evento as $image){
          $image_eventos = $image["full_url"];
        }
        
    ?>
       
       <div class="evento-box">
         <a href="<?php the_permalink();?>">
        <?php if ( $image_eventos == TRUE){?>
            <img class="imagem-evento" src=" <?php echo $image_eventos;?>" /><?php }else{?>
            <img class="imagem-evento" src="<?php echo image_url("perfil.jpg") ?>"/>
        <?php }?>
        </a>
  
         <h3 class="evento-title"><?php the_title(); ?></h3>
  
         <span class="evento-hora"><?php echo rwmb_meta( 'eventos-hora' );?></span>
  
         <div class="evento-desc"><?php the_excerpt(); ?></div>
  
         <a href="<?php the_permalink();?>" class="btn evento-mais">Saiba mais</a>
       </div>
       
       <?php endwhile; ?>
       
                        <?php else : ?>
                <p><?php esc_html_e( 'Ainda não há Eventos.' ); ?></p>
                                <?php endif; ?>
       </div>
       </div>
       </div>
</main>

<?php  get_footer(); ?>
