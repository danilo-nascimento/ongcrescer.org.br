<?php
/**
 * Template Name: Loja
 *
 * @package WordPress
 * @subpackage OngCrescer
 * @template loja
 * @since OngCrescer 2017-10-23
 */
?>

<?php get_header(); ?>

<main class="l-main">
	<div class="l-loja">
		<div class="row-content"><!-- Inicio dos botões superiores e titulo loja -->
			<div class="col-12 titulo-loja">
				<h1 class="title-loja">Loja da ONG</h1>
			</div>
			<div class="row botoes-cima">
				<div class="col-12 col-4">
					<div id="categorias-loja"><?php wp_nav_menu(array('menu' =>'loja'));?></div>
				</div>
			</div><!-- !row botoes-cima -->
		</div><!-- Fim dos botões superiores e titulo loja -->
		<div class="row-content">
			<div class="row loja-bloco">
                            <?php
                            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
          
                $args = array(
                    'post_type' => 'ong_loja',
                    "posts_per_page" => 4,
                    'paged' => $paged,
                    'orderby'   => 'id',
                    );
                $query = new WP_Query($args);
                
                $count_posts = wp_count_posts('ong_loja')->publish;
                
                ?>
                <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); // run the loop ?>
                            
                            
                            
                            <?php
        $images = rwmb_meta( 'loja-image', 'type=image_advanced' );
        $image_background = null;
        foreach($images as $image){
          $image_background = $image["full_url"];
        }
        
    ?>
					<div class="espaco-linha"><!-- Inicio da caixinha 1 -->
						<div class="row-content">
                                                            <?php if ( $image_background == TRUE){?>
                                                            <img class="imagem-loja" src="<?php echo $image_background ?>"><?php }else{?>
                                                            <img class="imagem-loja" src="<?php image_url("perfil.jpg") ?>" />
                                                            <?php }?>
                                                            <p class="titulo-caixa-loja"><?php the_title();?></p>
                                                            <div class="caixa-preco"><strong>
									<?php if (rwmb_meta( 'loja-preço' ) == TRUE) echo rwmb_meta( 'loja-preço' ); else echo "Valor não informado" ?>
								</strong>
							</div><!-- col-10 -->
							<div class="botao-queroisso">
								<a href="<?php if (rwmb_meta( 'loja-link' ) == TRUE) echo rwmb_meta( 'loja-link' ); ?>" target="_blank" class="btn btn-warning btn-lg">QUERO ISSO <i class="fa fa-heart"></i></a>
							</div>
						</div>
						
					</div><!-- Fim da caixinha 1 -->
                                        <?php endwhile; ?>
                                        
                
					
			</div><!-- row -->
                        <?php if($count_posts > 4) :?>
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
							    <?php if($paged <> ceil($count_posts/4)) :?>
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
                <p><?php esc_html_e( 'Ainda não há produtos cadastrados.' ); ?></p>
                                <?php endif; ?>
                
                
                
		</div><!-- /row-content -->
	</div><!-- /l-loja -->
</main>

<?php  get_footer(); ?>
