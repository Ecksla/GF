$(function() {
	//atribuirEventos();
});

function atribuirEventos()
{
	$('#btnEnviar').click(enviarEmail);
}

function enviarEmail()
{
	if (validarForm())
	{
		$.post('envioEmail.php', $('#form').serialize(), function()
		{
  			alert('sucesso');
  		}).fail(function()
  		{
  			alert('falha');
  		});
	}
}

function validarForm()
{
	var tudoCerto = true;

	$('#form').each(function(indice, form)
	{
		if (!form[indice].checkValidity())
		{
			tudoCerto = false;
		}
	});

	return tudoCerto;
}