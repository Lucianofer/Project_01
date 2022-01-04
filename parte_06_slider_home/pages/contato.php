<?php
	if(isset($_POST['acao']) && $_POST['identificador'] == 'form_contato'){
		$assunto = 'Nova mensagem do site';
		$corpo = '';

		foreach ($_POST as $key => $value) {
			$corpo .= ucfirst($key).": ".$value;
			$corpo .= '<hr>';
		}

		$info = array('assunto'=>$assunto,'corpo'=>$corpo);
		$mail = new Email('host','teste@email.com','sua senha...','seu nome...');
		$mail->adicionarEndereco('teste@email.com','seu nome...');
		$mail->formatarEmail($info);

		if($mail->enviarEmail()){
			echo '<script>alert("Enviado com sucesso!")</script>';
		}else{
			echo '<script>alert("Algo deu errado.")</script>';
		}
	}
?>

<div id="map">Gerar chave API Google Maps*</div>

<div class="contato-container">
	<div class="center">
		
		<form method="post" action="">
			<input type="text" name="nome" placeholder="Nome" required>
			<div></div>
			<input type="email" name="email" placeholder="E-mail" required>
			<div></div>
			<input type="text" name="telefone" placeholder="Telefone" required>
			<div></div>
			<textarea placeholder="Sua mensagem" name="mensagem" required></textarea>
			<div></div>
			<input type="hidden" name="identificador" value="form_contato" />
			<input type="submit" name="acao" value="Enviar">
		</form>

	</div> <!-- Center -->
</div> <!-- Contato container -->