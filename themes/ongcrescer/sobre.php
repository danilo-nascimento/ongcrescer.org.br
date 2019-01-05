<?php
/**
 * Template Name: Sobre
 *
 * @package WordPress
 * @subpackage OngCrescer
 * @template sobre
 * @since OngCrescer 2018-03-18
 */
?>

<?php get_header(); ?>

<main class="l-main">
<?php
        
    ?>
    <div class="l-sobre">
        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium'); ?>
            <div id="div-imagem-fundo-sobre">
                <figure>
                    <?php if ($image == true) { ?>
                        <img class="imagem-fundo-sobre" src="<?php echo $image[0]; ?>"/>
                    <?php } else { ?>
                        <div class="imagem-fundo-sobre"></div>
                    <?php } ?>
                    <figcaption>
                        <h1><?php echo rwmb_meta( 'sobre-titulo' ); ?></h1>
                        <p>
                            <?php
                            $args = array('post_type' => 'page', 'pagename' => 'sobre');
                            $my_page = get_posts($args);
                            ?>
                            <?php if ($my_page) : foreach ($my_page as $post) : setup_postdata($post); ?>

                                    <?php echo rwmb_meta( 'sobre-content' ); ?>

                                <?php endforeach; ?>
                            <?php endif; ?>
                        </p>
                    </figcaption>
                </figure>
            </div>
    <div class="row-content">
        
        <div>
        <h5 class="sobre-title"><strong><?php echo rwmb_meta( 'sobre-title-1' ) ?></strong></h5>
        <hr>
              <p  class="sobre-content"><?php echo rwmb_meta( 'sobre-content-1' ) ?></p>
        <h5 class="sobre-title"><strong><?php echo rwmb_meta( 'sobre-title-2' ) ?></strong></h5>
        <hr>
              <p  class="sobre-content"><?php echo rwmb_meta( 'sobre-content-2' ) ?></p>
        <h5 class="sobre-title"><strong><?php echo rwmb_meta( 'sobre-title-3' ) ?></strong></h5>
        <hr>
              <p  class="sobre-content"><?php echo rwmb_meta( 'sobre-content-3' ) ?></p>
        <h5 class="sobre-title"><strong><?php echo rwmb_meta( 'sobre-title-4' ) ?></strong></h5>
        <hr>
              <p  class="sobre-content"><?php echo rwmb_meta( 'sobre-content-4' ) ?></p>
        <h5 class="sobre-title"><strong><?php echo rwmb_meta( 'sobre-title-5' ) ?></strong></h5>
        <hr>
              <p  class="sobre-content"><?php echo rwmb_meta( 'sobre-content-5' ) ?></p>
        <h5 class="sobre-title"><strong><?php echo rwmb_meta( 'sobre-title-6' ) ?></strong></h5>
        <hr>
              <p  class="sobre-content"><?php echo rwmb_meta( 'sobre-content-6' ) ?></p>
        <h5 class="sobre-title"><strong><?php echo rwmb_meta( 'sobre-title-7' ) ?></strong></h5>
        <hr>
              <p  class="sobre-content"><?php echo rwmb_meta( 'sobre-content-7' ) ?></p>
        </div>
        <ul class="sobre-icons">
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
            </div>
    </div>
    
</main>

<?php  get_footer(); ?>