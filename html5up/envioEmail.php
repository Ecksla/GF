<?php
	$headers = "MIME-Version: 1.1\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
	$headers .= "From: contato@gramaforte.com.br\r\n"; // remetente
	$headers .= "Return-Path: " . strip_tags($_POST["email"]) . "\r\n"; // return-path

	$conteudo = "<html><body>";
	$conteudo .= "Nome<br><b> " . htmlentities($_POST["nome"]) . "</b><br><br>";
	$conteudo .= "Telefone<br><b> " . htmlentities($_POST["telefone"]) . "</b><br><br>";
	$conteudo .= $_POST["mensagem"];
	$conteudo .= "</body></html>";

	$envio = mail("henriquebertoldi10@gmail.com", htmlentities($_POST["assunto"]), $conteudo, $headers);
 
	if($envio)
 		echo "Mensagem enviada com sucesso";
	else
 		echo "A mensagem não pode ser enviada";
?>