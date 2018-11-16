window.onload = function(){ 
$(document).ready(function (){
$('#dash').click(function(){
$('#menu').toggle();
});
});

$('#link-login').click(function(){
$('div#header-login form#cadastro').fadeOut(500, function(){
$('div#header-login form#recuperar_senha').fadeOut(500, function(){
$('div#header-login, form#login').fadeIn(500);
});
});
});

$('#link-cadastrar').click(function(){
$('div#header-login form#login').fadeOut(500, function(){   
$('div#header-login form#recuperar_senha').fadeOut(500, function(){   
$('form#cadastro, div#header-login').fadeIn(500);
});
});
});

$('.logo_login div, .logo_cadastro div').click(function(){
$('div#header-login').fadeOut(1000);
});

$('.logar').click(function(){
$('div#header-login form:visible').fadeOut(500, function(){   
$('form#login').fadeIn(500);
});
});

$('.registrar').click(function(){
$('div#header-login form:visible').fadeOut(500, function(){   
$('form#cadastro').fadeIn(500);
});
});

$('.recuperar').click(function(){
   var form =  $('div#header-login form:visible');
   form.fadeOut(500, function(){   
$('form#recuperar_senha').fadeIn(500);
});
});

};
