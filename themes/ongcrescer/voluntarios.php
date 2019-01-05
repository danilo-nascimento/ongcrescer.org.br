<?php
/**
 * Template Name: Voluntários
 *
 * @package WordPress
 * @subpackage OngCrescer
 * @template voluntarios
 * @since OngCrescer 2017-10-23
 */
?>

<?php get_header(); ?>

<main class="l-main">
  <div class="l-voluntarios">
    <div class="row-content">
      <h1 class="title">Voluntários Oficiais</h1>

      <p class="subtilte">Agradecemos os voluntários que vestiram a camisa da ONG.</p>

      <div class="row lista-voluntarios">


        <?php
        // the query
        $args = array(
          'post_type' => 'ong_voluntario',
          'orderby'   => 'title',
          'order'     => 'ASC',
        );
        $the_query = new WP_Query( $args );
        if ( $the_query->have_posts() ) : ?>

                <!-- pagination here -->

                <!-- the loop -->
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <div class="col-md-2 voluntario">
                          <a href="<?php echo rwmb_meta("voluntario-link"); ?>" target="blank">
                          <?php
                              $images = rwmb_meta( 'voluntario-image', array( 'size' => 'thumbnail' ) );
                              foreach ( $images as $image ) {
                          ?>
                            <img src="<?php echo $image["full_url"] ?>" alt="">
                          <?php } ?>

                            <div><strong><?php the_title() ?></strong></div>
                          </a>
                        </div>
                <?php endwhile; ?>
                <!-- end of the loop -->

                <!-- pagination here -->

                <?php wp_reset_postdata(); ?>

        <?php else : ?>
                <p><?php esc_html_e( 'Ainda não temos voluntários. Entre em contato e voluntarie-se' ); ?></p>
        <?php endif; ?>

      </div>
    </div><!-- row-content -->
  </div><!-- l-voluntarios -->
</main>

<?php  get_footer(); ?>
