<?php
/**
 * Template Name: Premios
 *
 * @package WordPress
 * @subpackage OngCrescer
 * @template premios
 * @since OngCrescer 2017-12-05
 */
?>

<?php get_header(); ?>

<main class="l-main">
<?php
        $images = rwmb_meta( 'premios-image', 'type=image_advanced' );
        $image_background = null;
        foreach($images as $image){
          $image_background = $image["full_url"];
        }
        
        $images2 = rwmb_meta( 'premios-image-2', 'type=image_advanced' );
        $image_background2 = null;
        foreach($images2 as $image2){
          $image_background2 = $image2["full_url"];
        }
    ?>
    <div class="l-premios">
    <div class="row-content">
            <div class="premios-ong-item">
              <h1 class="premios-title"><?php echo rwmb_meta( 'premios-title' ) ?></h1>
              <p  class="premios-subtitle"><?php echo rwmb_meta( 'premios-subtitle' ) ?></p>
            </div>
    <div id="premios-content">
          <?php 
          
                $args = array('post_type' => 'page', 'pagename' => 'premios');
                $my_page = get_posts($args);
                ?>
                <?php if($my_page) : foreach ($my_page as $post) : setup_postdata($post); ?>
                
                <?php the_content();?>
              
                <?php endforeach; ?>
                <?php endif; ?>
    </div>
         <?php if (rwmb_meta( 'premios-image-2' ) == TRUE){ ?> 
        <div class="div-img2">
        <img class="premios-img-2" src="<?php echo $image_background2 ?>"/>
        </div>
        <?php }?>
        <?php if (rwmb_meta( 'premios-image' ) == TRUE){ ?> 
        <div class="div-img">
        <img class="premios-img" src="<?php echo $image_background ?>"/>
        </div>
        <?php }?>
       
    </div>
    </div>
</main>

<?php  get_footer(); ?>