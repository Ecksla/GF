<?php
	$headers = "MIME-Version: 1.1\r\n";
	$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
	$headers .= "From: contato@gramaforte.com.br\r\n"; // remetente
	$headers .= "Return-Path: " . strip_tags($_POST["email"]) . "\r\n"; // return-path

	$conteudo = "Nome" . htmlentities($_POST["nome"]);
	$conteudo .= "Telefone" . htmlentities($_POST["telefone"]);
	$conteudo .= htmlentities($_POST["mensagem"]);

	$envio = mail("henriquebertoldi10@gmail.com", htmlentities($_POST["assunto"]), $conteudo, $headers);
 
	if($envio)
 		echo "Mensagem enviada com sucesso";
	else
 		echo "A mensagem não pode ser enviada";
?>