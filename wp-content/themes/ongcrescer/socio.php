<?php
/**
 * Template Name: Socio
 *
 * @package WordPress
 * @subpackage OngCrescer
 * @template Socio
 * @since OngCrescer 2018-06-07
 */
?>

<?php get_header(); ?>

<main class="l-main">
    <div class="l-socio">
        <div class="row-content">
            <h1>Seja sócio da ONG</h1>
            <h5>Torne-se um de nossos sócios e contribua para o crescimento continuo da ONG</h5>
            <div id="background-socio">
            <iframe height="315" src="https://www.youtube.com/embed/NHgTtSvxmqI" frameborder="0" allowfullscreen=""></iframe>
            <form action="https://pagseguro.uol.com.br/pre-approvals/request.html" method="post">
<input type="hidden" name="code" value="8D4871B56A6A8B9004217FAB3313CA71">
<input type="hidden" name="iot" value="button">
<input type="submit" class="btn btn-green" name="submit" value="Seja Sócio">
</form>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
