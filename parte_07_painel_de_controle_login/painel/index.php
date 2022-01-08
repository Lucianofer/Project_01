<?php
	
	include('../config.php');

	if(Painel::logado() == true){
		include('login.php');
	}else{
		include('main.php');
	}

	//Se o método Estático logado() da classe Painel for falso, irá renderizar a página para login,
	//caso contrário vai renderizar a página main do Painel de controle.

?>