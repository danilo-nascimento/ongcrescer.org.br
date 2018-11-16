<?php

/**
 * Description of cadastrar
 *
 * @author luiz
 */
class cadastrar {
    var $cadastrar ="<form id='cadastro'>
            <h4>Criar Conta</h4>
            <input class='cadastro-email' placeholder='Seu Endereço de E-mail' type='email' required=''/>
            <input class='cadastro-email' placeholder='Confirme Seu Endereço de E-mail' type='email' required=''/>
            <input class='cadastro-senha' placeholder='Sua Senha' type='password' required='' pattern='.{8,}' title='A senha deve conter no mínimo 8 digitos'/>
            <input class='cadastro-senha' placeholder='Confirme Sua Senha' type='password' required='' pattern='.{8,}' title='A senha deve conter no mínimo 8 digitos'/>
            <div>
            <input id='cadastro-entrar' type='submit' value='Cadastre-se'/>
            <a class='recuperar'>Perdeu a senha?</a><a class='logar'>Logar</a>
            </div>
        </form>";
}
