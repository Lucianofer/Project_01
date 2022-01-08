<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_PATH; ?>css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_PATH_PAINEL; ?>css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Painel de controle</title>
</head>
<body>

	<div class="box-login">
		
		<h2>Efetue o Login:</h2>
		
		<form method="post">
			<input type="text" name="user" placeholder="Login..." required>
			<input type="password" name="password" placeholder="Senha..." required>
			
			<div class="form-group-login left">
				<input type="submit" name="acao" value="Logar!">
			</div> <!-- Form group login -->

			<div class="form-group-login right">
				<label>Lembrar-me</label>
				<input type="checkbox" name="lembrar">
			</div> <!-- Form group login -->

			<div class="clear"></div>

		</form>
	</div> <!-- Box login -->

</body>
</html>