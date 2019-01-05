<?php
/**
 * Template Name: EnviarProjeto
 *
 * @package WordPress
 * @subpackage OngCrescer
 * @template enviarProjeto
 * @since OngCrescer 2018-06-19
 */
?>
              
<?php get_header(); ?>

<main class="l-main">
    <div class="l-enviar-projeto">
        <div class="row-content">
            <h1>Enviar Projeto</h1>
            <p>Ao preencher o formulário e enviar seu projeto, ele será incluído na página PROJETOS.</p>
            <form action="mensagem.php" method="post" id="form-enviar-projeto" enctype="multipart/form-data">
                    <input class="campo-enviar-projeto" name="cnome" placeholder="Título" required=""/>
                    <textarea id="textarea-enviar-projeto" name="cmensagem"  placeholder="Descrição" required=""></textarea>
                    <input class="campo-enviar-projeto" name="cmail" placeholder="Causas" required=""/>
                    <div class="upload-btn-wrapper">
                        <button class="btn">Selecione a imagem do projeto <label>&#x2B73;</label></button>(opcional)
                    <input type="file" name="myfile" />
                    </div>
                    <input class="enviar-enviar-projeto" type="submit"/>
            </form>
        </div><!-- /row-content -->
    </div><!-- /l-projetos -->
</main>

<?php get_footer(); ?>