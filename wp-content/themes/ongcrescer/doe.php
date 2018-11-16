<?php
/**
 * Template Name: Doe
 *
 * @package WordPress
 * @subpackage OngCrescer
 * @template Doe
 * @since OngCrescer 2018-03-22
 */
?>

<?php get_header(); ?>

<main class="l-main">
    <div class="l-doe">
        <div class="row-content">
            <h1>Faça uma Doação</h1>
            <h5>Ajude nossa ONG a continuar crescendo</h5>
            <div id="background-doe">
            <iframe height="315" src="https://www.youtube.com/embed/NHgTtSvxmqI" frameborder="0" allowfullscreen=""></iframe>
            <form action="https://pagseguro.uol.com.br/checkout/v2/donation.html" method="post">
<!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
<input type="hidden" name="currency" value="BRL">
<input type="hidden" name="receiverEmail" value="eng.fmota@hotmail.com">
<input type="hidden" name="iot" value="button">
<input type="submit" class="btn btn-red" name="submit" value="Doe Agora">
</form>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
