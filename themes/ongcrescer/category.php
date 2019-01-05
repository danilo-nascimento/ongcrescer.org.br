<?php get_header(); ?>

<?php $categoria_mae = get_category_parents(get_queried_object()->parent, false, '' );?>

<?php if($categoria_mae === 'categoria_loja'):?>

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
                            
                             $categorias = $_SERVER['REQUEST_URI'];
          
                $args = array(
                    'post_type' => 'ong_loja',
                    "posts_per_page" => 4,
                    'paged' => $paged,
                    'orderby'   => 'id',
                    'category_name' => $categorias
                    );
                $query = new WP_Query($args);
                
                $args_category = array(
                    'post_type' => 'ong_loja',
                    'paged' => $paged,
                    'category_name' => $categorias
                    );
                
                $posts = get_posts($args_category);
                                        $count_posts = count($posts);

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
								<a href="" class="btn btn-warning btn-lg">QUERO ISSO <i class="fa fa-heart"></i></a>
							</div>
						</div>
						
					</div><!-- Fim da caixinha 1 -->
                                        <?php endwhile; else: ?>
                    <p>Lamentamos mas não foram encontrados produtos.</p>            
            <?php endif; ?>
					<?php
                                        
                                        
                                        ?>
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

		</div><!-- /row-content -->
	</div><!-- /l-loja -->
</main>
<?php elseif($categoria_mae === 'categoria_projetos'):?>

<main class="l-main">
	<div class="l-projetos">
		<div class="row-content">
			<div class="col-md-12 titulo-projeto">
				<h1 class="title">Nossos Projetos</h1>
			</div>
			<div class="row botoes-cima">
				<div class="col-12 col-4 ml-auto">
                                    <div id="categorias-projetos"><?php wp_nav_menu( array('menu' =>'projetos'));?></div>
				</div>
			</div><!-- row botoes-cima -->
<!-- A partir daqui monta-se as caixas dos projetos -->
<div class="caixa">
                            <?php
                            
                            
                             $categorias = $_SERVER['REQUEST_URI'];
          
                $args = array(
                    'post_type' => 'ong_projetos',
                    'orderby'   => 'id',
                    'category_name' => $categorias
                    );
                $my_page = get_posts($args);
                ?>
                <?php if($my_page) : foreach ($my_page as $post) : setup_postdata($post); ?>
                
                            <?php
        $images = rwmb_meta( 'projetos-image', 'type=image_advanced' );
        $image_background = null;
        foreach($images as $image){
          $image_background = $image["full_url"];
        }
        
    ?>
                            
                            <div class="div-img-projetos">
                                <?php if ( $image_background == TRUE){?>
                                <img align="middle" class="img-circle" src=" <?php echo $image_background;?>" /><?php }else{?>
                                <img align="middle" class="img-circle" src="<?php image_url("perfil.jpg") ?>" />
                                <?php }?>
				</div>
                            <div class="info">
                                    
                
              
                
					<p class="titulo-caixa"><?php the_title();?></p>
					<p class="subtitle"><?php the_excerpt();?></p>
					<div class="row botoes-baixo">
						<div>
                                                    <a href="<?php the_permalink();?>" class="btn btn-default btn-lg">INFORMAÇÕES</a>
							<a href="" class="btn btn-warning btn-lg">INSCREVER-ME</a>
                                                        <div class="causas"><strong>Causas: </strong><?php if (rwmb_meta( 'projetos-causas' ) == TRUE) echo rwmb_meta( 'projetos-causas' ); else echo "undefined" ?></div>
						</div>
					</div><!-- row botoes-baixo -->
				</div><!-- col-10 -->
                                <hr />
                                <?php endforeach;?>
    
                <?php else : ?>
                <p><?php esc_html_e( 'Ainda não há projetos.' ); ?></p>
                <?php endif; ?>
                
			</div><!-- row caixa -->
			
                        

		</div><!-- /row-content -->
	</div><!-- /l-projetos -->
</main>
<?php elseif($categoria_mae === 'categoria_evento'):?>
<main class="l-main">
	<div class="l-eventos">
		<div class="row-content">
			<div class="col-12 titulo-evento">
				<h1 class="title-evento">Eventos</h1>
			</div>
                    <div class="categorias-eventos"><?php wp_nav_menu( array('menu' =>'eventos'));?></div>
                    </div>
            <div class="row-content">
			<div class="row loja-bloco">
                            <?php
                            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                            
                            $categorias = $_SERVER['REQUEST_URI'];
          
                $args = array(
                    'post_type' => 'ong_event',
                    "posts_per_page" => 8,
                    'paged' => $paged,
                    'orderby'   => 'id',
                    'category_name' => $categorias
                    );
                $query = new WP_Query($args);

                $args_category = array(
                    'post_type' => 'ong_event',
                    'paged' => $paged,
                    'category_name' => $categorias
                    );
                
                $posts = get_posts($args_category);
                                        $count_posts = count($posts);
                
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
                <p><?php esc_html_e( 'Ainda não há eventos publicados.' ); ?></p>
                                <?php endif; ?>
                
                
                
		</div>
	</div>
</main>
<?php else :?>
<div>Esta página não existe</div>
<?php endif;?>
<?php  get_footer(); ?>