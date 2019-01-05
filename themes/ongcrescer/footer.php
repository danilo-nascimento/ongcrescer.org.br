<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
    <footer class="l-footer">
      <div class="row-content">
        <div class="row">
          <div class="links col-md-3">
            <h4 class="title">Mais Buscados</h4>

            <ul>
              <li><a href="">Home</a></li>
              <li><a href="">Sobre a ONG</a></li>
              <li><a href="">Projetos</a></li>
              <li><a href="">Como Ajudar?</a></li>
              <li><a href="">Loja Oficial</a></li>
              <li><a href="">Blog</a></li>
              <li><a href="">Fale Conosco</a></li>
              <li><a href="">Faça uma Doação</a></li>
              <li><a href="">Voluntariado</a></li>
            </ul>
          </div>

          <div class="middle col-md-6">
            <h4 class="title">Fique por dentro do nosso canal no YouTube</h4>

            <iframe width="100%" height="315" src="https://www.youtube.com/embed/9AH19B8wMkw" frameborder="0" allowfullscreen></iframe>
          </div>

          <div class="logo col-md-3">
            <a href="home"><img src="<?php image_url("logo-footer.png") ?>" alt="OngCrescer"></a>
            <a href="https://github.com/ongcrescer" target="blank">ONG CRESCER é um projeto Open Source, feito com amor | 2018 &#x2764;</a>
          </div>
        </div>

        <div class="row credits">
          <div class="col-md-12">
            <p>
            INSTITUTO CRESCER FOMENTO A VIDA |
            <strong>2013 - <?php echo date("Y") ?></strong> |
            Desenvolvido com muito amor por
            <a href="" target="blank">Dallas Studios</a> e
            <a href="" target="blank">Programadores</a>
            </p>
          </div>
        </div>
      </div>
    </footer>

<?php wp_footer(); ?>

</body>
</html>
