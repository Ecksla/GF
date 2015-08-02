$(function() {
	atribuirEventos();
});

function atribuirEventos()
{
	$('#btnEnviar').click(enviarEmail);
}

function enviarEmail()
{
	if ($('#form').validate())
	{
		$.post('envioEmail.php', $('#form').serialize(), function(data )
		{
			if (data.enviouEmail)
			{
				$("#divEnvioEmail").hide();
				$("#divRetornoEmail").show();
			}
			else
			{
				alert("Ocorreu um erro ao tentar enviar o e-mail, reveja se os dados estão correto e tente novamente!");
			}
  		}).fail(function()
  		{
  			alert('Ocorreu um erro ao tentar conectar com o servidor, por favor tente novamente mais tarde!');
  			window.location.href = "index.html";
  		});
	}
}