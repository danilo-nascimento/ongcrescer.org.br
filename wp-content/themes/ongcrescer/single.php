<?php
/**
 * Template Name: Single
 *
 * @package WordPress
 * @subpackage OngCrescer
 * @template single
 * @since OngCrescer 2018-02-18
 */
?>

<?php get_header(); ?>

<main class="l-main">
    <div class="l-single">
        <div class="row-content">

            <?php $postagem = get_post_type(); ?>

            <?php if ($postagem === 'ong_blog'): ?>
                <div class="l-blog">
                    <?php
                    $images = rwmb_meta('blog-image', 'type=image_advanced');
                    $image_background = null;
                    foreach ($images as $image) :
                        $image_background = $image["full_url"];
                    endforeach;
                    ?>

                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <h1 class="single-title"><?php the_title(); ?></h1>
                            <p><i class="fa fa-pencil"></i><?php echo rwmb_meta('blog-autor') ?> | <i class="fa fa-tag"></i>
                                <?php echo rwmb_meta('blog-topico') ?></p>
                            <div class="single-box">
                            <?php if ($image_background == TRUE) : ?>
                                <img class="imagem-single" src="<?php echo $image_background ?>"><?php else : ?>
                                <img class="imagem-single" src="<?php image_url("perfil.jpg") ?>" />
                            <?php endif; ?>
                            <div class="single-conteudo"><?php the_content(); ?></div>
                            </div>
                        <?php endwhile;
                    else: ?>
                        <h2>Nada Encontrado</h2>
                        <p>Erro 404</p>
                        <p>Lamentamos mas não foram encontrados artigos.</p>            
    <?php endif; ?>

                    <?php
                    $tags = wp_get_post_tags($post->ID);
                    if ($tags) :
                        $first_tag = $tags[0]->term_id;

                        $args = array(
                            'post_type' => 'ong_blog',
                            'tag__in' => array($first_tag),
                            'post__not_in' => array($post->ID),
                            'posts_per_page' => 4,
                            'caller_get_posts' => 1,
                            'orderby' => 'title',
                            'order' => 'ASC',
                        );
                        $my_page = get_posts($args);
                        ?>
                        <h5>LEIA TAMBÉM</h5>
                                <div class="row blog-bloco">
                        <?php if ($my_page) : foreach ($my_page as $post) : setup_postdata($post); ?>
                                <?php
                                $images = rwmb_meta('blog-image', 'type=image_advanced');
                                $image_background = null;
                                foreach ($images as $image) :
                                    $image_background = $image["full_url"];
                                endforeach;
                                ?>
                                    <div class="espaco-linha">
                                        <div class="row-content">
                                            <a href="<?php the_permalink(); ?>">
                <?php if ($image_background == TRUE): ?>
                                                    <img class="imagem-blog" src="<?php echo $image_background ?>"><?php else : ?>
                                                    <img class="imagem-blog" src="<?php image_url("perfil.jpg") ?>" />
                <?php endif; ?>
                                            </a>
                                            <div>
                                                <p class="blog-title"><?php the_title(); ?></p>
                                                <div>
                                                    <p class="blog-info"><i class="fa fa-pencil"></i><?php echo rwmb_meta('blog-autor') ?> | <i class="fa fa-tag"></i>
                <?php echo rwmb_meta('blog-topico') ?></p>
                                                </div>
                                                <div class="blog-conteudo">
                <?php the_excerpt(); ?>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                
                        <?php endforeach; ?>
                    <?php endif; ?>
                <?php else: ?>
    <?php endif; ?>
                    
            </div>
        </div>


                <!--LOJA-->


                <?php elseif ($postagem === 'ong_loja') : ?>
                <div class="l-loja">
                    <?php
                    $images = rwmb_meta('loja-image', 'type=image_advanced');
                    $image_background = null;
                    foreach ($images as $image) :
                        $image_background = $image["full_url"];
                    endforeach;
                    ?>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <h1 class="single-title"><?php the_title(); ?></h1>
                            <div class="caixa-preco">
                                <strong>
                                    <?php if (rwmb_meta('loja-preço') == TRUE) : echo rwmb_meta('loja-preço');
                                    else : echo "Valor não informado" ?>
                            <?php endif; ?>
                                </strong>
                            </div>
                            <div class="single-box">
                            <?php if ($image_background == TRUE) : ?>
                                <img class="imagem-single" src="<?php echo $image_background ?>"><?php else : ?>
                                <img class="imagem-single" src="<?php image_url("perfil.jpg") ?>" />
                            <?php endif; ?>
                            <p id="conteudo-single"><?php the_content(); ?></p>
                            </div>
        <?php endwhile;
    else : ?>
                        <h2>Nada Encontrado</h2>
                        <p>Erro 404</p>
                        <p>Lamentamos mas não foram encontrados artigos.</p>            
                    <?php endif; ?>
                    <?php
                    $tags = wp_get_post_tags($post->ID);
                    if ($tags) :
                        $first_tag = $tags[0]->term_id;

                        $args = array(
                            'post_type' => 'ong_loja',
                            'tag__in' => array($first_tag),
                            'post__not_in' => array($post->ID),
                            'posts_per_page' => 4,
                            'caller_get_posts' => 1,
                            'orderby' => 'title',
                            'order' => 'ASC',
                        );
                        $query = new WP_Query($args);
                        ?>
                        
                        <h5>VEJA TAMBÉM</h5>
                                <div class="row loja-bloco">
        <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); // run the loop  ?>



                                <?php
                                $images = rwmb_meta('loja-image', 'type=image_advanced');
                                $image_background = null;
                                foreach ($images as $image) :
                                    $image_background = $image["full_url"];
                                endforeach;
                                ?>
                                    <div class="espaco-linha"><!-- Inicio da caixinha 1 -->
                                        <div class="row-content">
                                            <a href="<?php the_permalink(); ?>">
                <?php if ($image_background == TRUE) : ?>
                                                    <img class="imagem-loja" src="<?php echo $image_background ?>"><?php else : ?>
                                                    <img class="imagem-loja" src="<?php image_url("perfil.jpg") ?>" />
                <?php endif; ?>
                                            </a>
                                            <p class="titulo-caixa-loja"><?php the_title(); ?></p>
                                            <div class="caixa-preco"><strong>
                                                    <?php if (rwmb_meta('loja-preço') == TRUE) : echo rwmb_meta('loja-preço');
                                                    else : echo "Valor não informado" ?>
                <?php endif; ?>
                                                </strong>
                                            </div><!-- col-10 -->
                                            <div class="botao-queroisso">
                                                <a href="" class="btn btn-warning btn-lg">QUERO ISSO <i class="fa fa-heart"></i></a>
                                            </div>
                                        </div>

                                    </div><!-- Fim da caixinha 1 -->
            <?php endwhile; ?>



                            </div>
                        </div>
        <?php endif; ?>
    <?php endif; ?>


                <!--Projetos-->


                <?php elseif ($postagem === 'ong_projetos') : ?>
                <div class="l-projetos">
                    <?php
                    $images = rwmb_meta('projetos-image', 'type=image_advanced');
                    $image_background = null;
                    foreach ($images as $image) :
                        $image_background = $image["full_url"];
                    endforeach;
                    ?>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <h1 class="single-title"><?php the_title(); ?></h1>
                            <div class="caixa-preco">
                                <strong>
            <?php if (rwmb_meta('projetos-causas') == TRUE) : echo rwmb_meta('projetos-causas');
            else : echo "Valor não informado" ?>
                            <?php endif; ?>
                                </strong>
                            </div>
                            <div class="single-box">
                            <?php if ($image_background == TRUE) : ?>
                                <img class="imagem-single" src="<?php echo $image_background ?>"><?php else : ?>
                                <img class="imagem-single" src="<?php image_url("perfil.jpg") ?>" />
            <?php endif; ?>
                            <div class="single-conteudo"><?php the_content(); ?></div>
                            </div>
                        <?php endwhile;
                    else : ?>
                        <h2>Nada Encontrado</h2>
                        <p>Erro 404</p>
                        <p>Lamentamos mas não foram encontrados artigos.</p>            
                    <?php endif; ?>
                    <?php
                    $tags = wp_get_post_tags($post->ID);
                    if ($tags) :
                        $first_tag = $tags[0]->term_id;

                        $args = array(
                            'post_type' => 'ong_projetos',
                            'tag__in' => array($first_tag),
                            'post__not_in' => array($post->ID),
                            'posts_per_page' => 4,
                            'caller_get_posts' => 1,
                            'orderby' => 'title',
                            'order' => 'ASC',
                        );
                        $query = new WP_Query($args);
                        ?>
                        <h5>VEJA TAMBÉM</h5>
                                <div class="row projetos-bloco">
                        <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); // run the loop  ?>



                                <?php
                                $images = rwmb_meta('projetos-image', 'type=image_advanced');
                                $image_background = null;
                                foreach ($images as $image) :
                                    $image_background = $image["full_url"];
                                endforeach;
                                ?>
                                
                                    <div class="espaco-linha">
                                        <div class="row-content">
                                            <a href="<?php the_permalink(); ?>">
                                                <?php if ($image_background == TRUE) : ?>
                                                    <img class="imagem-projetos" src="<?php echo $image_background ?>"><?php else : ?>
                                                    <img class="imagem-projetos" src="<?php image_url("perfil.jpg") ?>" />
                <?php endif; ?>
                                            </a>
                                            <p class="titulo-caixa-loja"><?php the_title(); ?></p>
                                            <p class="subtitle"><?php the_excerpt();?></p>
                                            <div class="causas"><strong>Causas: </strong><?php if (rwmb_meta( 'projetos-causas' ) == TRUE) echo rwmb_meta( 'projetos-causas' ); else echo "undefined" ?></div>
                                        </div>

                                    </div>
            <?php endwhile; ?>



                            </div>
                        </div>
        <?php endif; ?>
                <?php endif; ?>

                
                <!--evento--> 

                
                <?php elseif ($postagem === 'ong_event'): ?>
                <div class="l-eventos">
                    <?php
                    $images = rwmb_meta('eventos-image', 'type=image_advanced');
                    $image_background = null;
                    foreach ($images as $image) :
                        $image_background = $image["full_url"];
                    endforeach;
                    ?>

                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <div class="single-title"><?php the_title(); ?></div>
                            <p class="single-data"><?php echo rwmb_meta('eventos-hora'); ?></p>
                            <div class="single-box">
                            <?php if ($image_background == TRUE) : ?>
                                <img class="imagem-single" src="<?php echo $image_background ?>"><?php else : ?>
                                <img class="imagem-single" src="<?php image_url("perfil.jpg") ?>" />
            <?php endif; ?>
                            <div class="single-conteudo"><?php the_content(); ?></div>
                            <button class="btn btn-warning btn-lg button-eventos">PARTICIPAR DO EVENTO</button>
                            </div>
                        <?php endwhile;
                    else: ?>
                        <h2>Nada Encontrado</h2>
                        <p>Erro 404</p>
                        <p>Lamentamos mas não foram encontrados artigos.</p>            
                    <?php endif; ?>

                    
                        <?php
                        $tags = wp_get_post_tags($post->ID);
                    if ($tags) :
                        $first_tag = $tags[0]->term_id;
          
                $args = array(
                    'post_type' => 'ong_event',
                            'tag__in' => array($first_tag),
                            'post__not_in' => array($post->ID),
                            'posts_per_page' => 4,
                            'caller_get_posts' => 1,
                            'orderby' => 'title',
                            'order' => 'ASC',
                    );
                $query = new WP_Query($args);
                
                ?>
                        
                        <h5>OUTROS EVENTOS</h5>
                        
                                <div class="row eventos-bloco">
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
        <?php endif; ?>
    <?php endif; ?>
<?php endif; ?>


        </div>
    </div>
</main>

<?php get_footer(); ?>