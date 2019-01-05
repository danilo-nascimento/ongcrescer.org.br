<?php
/*
Plugin Name:  Formulario de login e cadastro
Description:  Plugin criado para construção de login e cadastro personalizado
Version:      1.0
Author:       Luiz Reis
License:      GPL2
 */

require_once 'logar.php';
require_once 'cadastrar.php';
require_once 'recuperar_senha.php';

function form_login_cadastro(){
        $login = new Logar;
        $cadastro = new Cadastrar;
        $recuperacao = new Recuperar_senha;
        $html = $login->logar . $cadastro->cadastrar . $recuperacao->recuperar;
	return $html;
}