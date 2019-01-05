<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage OngCrescer
 * @since OngCrescer 2017-10-23
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>	
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
        <script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/vendor/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/app/header.js"></script>
        <script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/app/faleConosco.js"></script>
</head>

<body <?php body_class(); ?>>
    
    <nav id="navbar" class="l-navbar">
      <div class="row-content">
        <ul class="social-icons">
          <li class="icon-fb">
            <a href="https://www.facebook.com/CrescerFomentoaVida.com.br/" target="blank"><i class="fa fa-facebook"></i></a>
          </li>
          <li class="icon-fb">
            <a href="https://www.instagram.com/p/BcQPm3_FQEo/" target="blank"><i class="fa fa-instagram"></i></a>
          </li>
          <li class="icon-fb">
            <a href="https://pt.linkedin.com/company/crescer.org.br" target="blank"><i class="fa fa-linkedin"></i></a>
          </li>
        </ul>

        <ul class="actions">
            <li class="li-navbar"><span><a href="">(11) 94911-6572</a></span></li>
          <li class="li-navbar"><span><a href="">Suporte</a></span></li>
          <li class="li-navbar"><span><a id='link-login' >Login</a></span></li>
          <li class="li-navbar"><span><a id='link-cadastrar'>Cadastre-se</a></span></li>
        </ul>

        <div class="clear"></div>
      </div>
    </nav>

    <header class="l-header">
      <div class="row-content">
        <a id="logo" href="/"><img src="<?php image_url("logo.png") ?>" alt="OngCrescer"/></a>
        <p id="dash">&#9776;</p>
        <nav id="menu">
          <?php wp_nav_menu( array( 'menu' =>'menu_principal', 'theme_location' => 'primary', 'container_class' => 'nav-menu', 'menu_class' => 'nav-menu' ) );?>
        </nav>
      </div>
    </header>
    
