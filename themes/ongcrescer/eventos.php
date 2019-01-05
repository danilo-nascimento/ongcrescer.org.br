<?php
/**
 * Template Name: Eventos
 *
 * @package WordPress
 * @subpackage OngCrescer
 * @template Eventos
 * @since OngCrescer 2018-09-17
 */
?>

<?php get_header(); ?>

<main class="l-main">
	<div class="l-eventos">
		<div class="row-content">
			<div class="col-12 titulo-evento">
				<h1 class="title-evento">Eventos</h1>
			</div>
                    <div class="categorias-eventos"><?php wp_nav_menu( array('menu' =>'eventos'));?></div>
                    </div>
            <div class="row-content">
			<div class="row eventos-bloco">
                            <?php
                            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
          
                $args = array(
                    'post_type' => 'ong_event',
                    "posts_per_page" => 8,
                    'paged' => $paged,
                    'orderby'   => 'id',
                    );
                $query = new WP_Query($args);
                
                $count_posts = wp_count_posts('ong_event')->publish;
                
                ?>
                <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); // run the loop ?>
                            
                            
                            
                            <?php
        $images = rwmb_meta( 'eventos-image', 'type=image_advanced' );
        $image_background = null;
        foreach($images as $image){
          $image_background = $image["full_url"];
        }
        
    ?>
					<div class="espaco-linha"><!-- Inicio da caixinha 1 -->
						<div class="row-content">
                                                    <figure>
                                                            <a href="<?php the_permalink();?>">
                                                            <?php if ( $image_background == TRUE){?>
                                                                <div class="imagem-eventos" style="background: url(<?php echo $image_background ?>) no-repeat; background-size: cover;"></div><?php }else{?>
                                                                <div class="imagem-eventos" style="background: url(<?php echo image_url("perfil.jpg") ?>) no-repeat; background-size: cover;"></div>
                                                            <?php }?>
                                                            </a>
                                                        <figcaption>
                                                            <p class="titulo-caixa-evento"><?php echo rwmb_meta( 'eventos-hora' );?></p>
                                                            <div class="caixa-preco"><strong>
                                                            <?php the_title(); ?>
								</strong>
							</div><!-- col-10 -->
							<div class="botao-queroisso">
								<a href="" class="btn ">QUERO IR <i class="fa fa-heart"></i></a>
                                                                <i class="fa fa-phone icone"></i>
                                                                <i class="fa fa-instagram icone"></i>
                                                                <i class="fa fa-facebook icone"></i>
							</div>
                                                            </figcaption>
                                                    </figure>
						</div>
						
					</div><!-- Fim da caixinha 1 -->
                                        <?php endwhile; ?>
                                        
                
					
			</div><!-- row -->
            <?php if($count_posts > 8) :?>
				<div class="row-content">
					<center>
						<div class="espaco-linha-pagination">
							<nav aria-label="Page navigation example">
							  <ul class="pagination justify-content-center">
                                                              <?php if($paged <> 1) :?>
							    <li class="page-item">
							      <div class="page-link" style="background-color: black;" aria-label="Previous">
                                                                  <a href="<?php previous_posts();?>"><span aria-hidden="true">&laquo;</span></a>
							        <span class="sr-only">Previous</span>
							      </div>
							    </li>
                                                            <?php endif;?>
							    <li class="page-item"><div class="page-link" style="background-color: black;"><?php echo $paged;?></div></li>
							    <?php if($paged <> ceil($count_posts/8)) :?>
                                                            <li class="page-item">
                                                                <div class="page-link" style="background-color: black;" aria-label="Next">
                                                                    <a href="<?php next_posts();?>"><span aria-hidden="true">&raquo;</span></a>
							      </div>
							    </li>
                                                            <?php endif;?>
							  </ul>
							</nav>
						</div>
					</center>
				</div>
                        <?php endif;?>
                        <?php else : ?>
                <p><?php esc_html_e( 'Ainda não há eventos.' ); ?></p>
                                <?php endif; ?>
                
                
                
		</div>
	</div>
</main>
<?php  get_footer(); ?>