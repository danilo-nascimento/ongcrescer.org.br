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
                    
                    </div>
            <div class="row-content">
			<div class="row loja-bloco">
                            <?php
                            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
          
                $args = array(
                    'post_type' => 'ong_event',
                    "posts_per_page" => 8,
                    'paged' => $paged,
                    'orderby'   => 'title',
                    'order'     => 'ASC',
                    );
                $query = new WP_Query($args);
                
                $count_posts = wp_count_posts('ong_loja')->publish;
                
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
                                                    <figure style="width: 100%; background: none; position: relative;">
                                                            <a href="<?php the_permalink();?>">
                                                            <?php if ( $image_background == TRUE){?>
                                                                <div class="imagem-loja" style="background: url(<?php echo $image_background ?>) no-repeat; background-size: cover;"></div><?php }else{?>
                                                                <div class="imagem-loja" style="background: url(<?php echo image_url("perfil.jpg") ?>) no-repeat; background-size: cover;"></div>
                                                            <?php }?>
                                                            </a>
                                                        <figcaption style=" display: block; position: absolute; bottom: 0; ">
                                                            <p class="titulo-caixa-evento"><?php echo rwmb_meta( 'eventos-hora' );?></p>
                                                            <div class="caixa-preco"><strong>
									<?php if (rwmb_meta( 'eventos-title' ) == TRUE) echo rwmb_meta( 'eventos-title' ); else echo "Valor não informado" ?>
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
                        <?php if($count_posts > 4) :?>
				<div class="row-content">
					<center>
						<div class="espaco-linha-pagination">
							<button class="btn">MOSTRAR MAIS EVENTOS</button>
						</div>
					</center>
				</div>
                        <?php endif;?>
                        <?php else : ?>
                <p><?php esc_html_e( 'Ainda não há produtos cadastrados.' ); ?></p>
                                <?php endif; ?>
                
                
                
		</div>
	</div>
</main>
<?php  get_footer(); ?>