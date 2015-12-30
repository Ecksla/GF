<?php

	function pegaValor($valor) {
    	return isset($_POST[$valor]) ? $_POST[$valor] : '';
	}	
 
	function validaEmail($email) {
    	return filter_var($email, FILTER_VALIDATE_EMAIL);
	}
 
	function enviaEmail($de, $assunto, $mensagem, $para, $email_servidor) {
    	$headers = "From: $email_servidor\r\n" .
               		"Reply-To: $de\r\n" .
               		"Return-Path: $de\r\n" .
               		"X-Mailer: PHP/" . phpversion() . "\r\n";
   		$headers .= "MIME-Version: 1.0\r\n";
    	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
  
  		mail($para, $assunto, nl2br($mensagem), $headers);
	}
 
	$email_servidor = "contato@gramaforte.com.br";
	$para = "contato@gramaforte.com.br";
	$de = pegaValor("email");
	$assunto = pegaValor("assunto");
	$nome = pegaValor("nome");

	$mensagem = "<html><body>";
	$mensagem .= "Nome<br><b> " . pegaValor("nome") . "</b><br><br>";
	$mensagem .= "Telefone<br><b> " . pegaValor("telefone") . "</b><br><br>";
	$mensagem .= pegaValor("mensagem");
	$mensagem .= "</body></html>";

	
	if ($nome && validaEmail($de) && $mensagem) {
	    enviaEmail($de, $assunto, $mensagem, $para, $email_servidor);
	    echo '{"enviouEmail": true}';
	} else {
	    echo '{"enviouEmail": false}';
	}
?>