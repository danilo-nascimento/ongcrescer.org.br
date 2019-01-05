<?php
/**
 * Template Name: Blog
 *
 * @package WordPress
 * @subpackage OngCrescer
 * @template Blog
 * @since OngCrescer 2018-02-23
 */
?>

<?php get_header(); ?>

<main class="l-main">
    <div class="l-blog">
        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium'); ?>
            <div id="div-imagem-fundo-blog">
                <figure>
                    <?php if ($image == true) : ?>
                    <img class="imagem-fundo-blog" src="<?php echo $image[0]; ?>" alt="imagem-fundo"/>
                    <?php else : ?>
                        <div class="imagem-fundo-blog"></div>
                    <?php endif; ?>
                    <figcaption>
                        <h1><?php the_title(); ?></h1>
                        <p>
                            <?php
                            $args = array('post_type' => 'page', 'pagename' => 'blog');
                            $my_page = get_posts($args);
                            ?>
                            <?php if ($my_page) : foreach ($my_page as $post) : setup_postdata($post); ?>

                                    <?php the_content(); ?>

                                <?php endforeach; ?>
                            <?php endif; ?>
                        </p>
                    </figcaption>
                </figure>
            </div>
        <div class="row-content">
            <h2 id="h2-blog">Artigos Recentes</h2>
            <div class="row blog-bloco">
                <?php
                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                
                $args = array(
                    'post_type' => 'ong_blog',
                    "posts_per_page" => 4,
                    'paged' => $paged,
                    'orderby'   => 'id',
                    );
                $my_page = get_posts($args);
                ?>
                
                <?php
                                           $count_posts = wp_count_posts('ong_blog')->publish;
                                            ?>
                <?php if ($my_page) : foreach ($my_page as $post) : setup_postdata($post); ?>

                        <?php
                        $images = rwmb_meta('blog-image', 'type=image_advanced');
                        $image_background = null;
                        foreach ($images as $image) {
                            $image_background = $image["full_url"];
                        }
                        ?>
                        <div class="espaco-linha">
                            <div class="row-content">
                                <a href="<?php the_permalink();?>">
                                <?php if ( $image_background == TRUE){?>
                                <img class="imagem-blog" src="<?php echo $image_background ?>"><?php }else{?>
                                <img class="imagem-blog" src="<?php image_url("perfil.jpg") ?>" />
                                <?php }?>
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
                <?php else : ?>
                <p><?php esc_html_e( 'Ainda não há artigos publicados.' ); ?></p>
                <?php endif; ?>
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
                                                                    <a href="<?php next_posts($max_page = ceil($count_posts/4));?>"><span aria-hidden="true">&raquo;</span></a>
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

<?php get_footer(); ?>