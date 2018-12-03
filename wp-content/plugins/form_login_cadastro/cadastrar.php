<?php

/**
 * Description of cadastrar
 *
 * @author luiz
 */
class cadastrar {
    var $cadastrar ="<form class='cadastro' method='post'>
            <h4>Criar Conta</h4>
            <input class='cadastro-email' name='user' placeholder='Nome de usuário' type='text' required=''/>
            <input class='cadastro-email' name='mail' placeholder='Seu Endereço de E-mail' type='email' required=''/>
            <input class='cadastro-senha' name='password' placeholder='Sua Senha' type='password' required='' pattern='.{8,}' title='A senha deve conter no mínimo 8 digitos'/>
            <input class='cadastro-senha' name='confirm-password' placeholder='Confirme Sua Senha' type='password' required='' pattern='.{8,}' title='A senha deve conter no mínimo 8 digitos'/>
            <div>
            <input class='cadastro-entrar' type='submit' value='Cadastre-se'/>
            <a class='recuperar'>Perdeu a senha?</a><a class='logar'>Logar</a>
            </div>
            <div class='return-cadastro'></div>
        </form>";
}