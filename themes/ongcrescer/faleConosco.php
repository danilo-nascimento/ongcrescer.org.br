<?php
/**
 * Template Name: FaleConosco
 *
 * @package WordPress
 * @subpackage OngCrescer
 * @template faleConosco
 * @since OngCrescer 2018-03-21
 */
?>

<?php get_header(); ?>

            <?php 
          
                $args = array('post_type' => 'page', 'pagename' => 'faleconosco');
                $my_page = get_posts($args);
                ?>
                <?php if($my_page) : foreach ($my_page as $post) : setup_postdata($post); ?>

                <?php the_content();?>
              
                <?php endforeach; ?>
                <?php endif; ?>
                
                <p id="contato-fale-conosco">&#9993; ou envie-nos um email via contato@crescerfomentoavida.com.br</p>
        </div><!-- /row-content -->
    </div><!-- /l-projetos -->
</main>
                

<?php get_footer(); ?>