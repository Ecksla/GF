<?php
	$headers = "MIME-Version: 1.1\r\n";
	$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
	$headers .= "From: "+ $_POST["nome"] + "\r\n"; // remetente
	$headers .= "Return-Path: "+ $_POST["nome"] + "\r\n"; // return-path

	$conteudo = "Nome\r\n" + $_POST["nome"];
	$conteudo = "\r\n\r\nTelefone" + $_POST["telefone"];
	$conteudo = "\r\n\r\n" + $_POST["mensagem"];

	$envio = mail("henriquebertoldi10@gmail.com", "Assunto", $conteudo, $headers);
 
	if($envio)
 		echo "Mensagem enviada com sucesso";
	else
 		echo "A mensagem não pode ser enviada";
?>