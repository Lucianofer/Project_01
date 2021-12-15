<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Projeto 01</title>
</head>
<body>

	<header>
		<div class="center">
			
			<div class="logo left"> <a href="">LogoMarca</a> </div> <!-- Logo -->

			<nav class="desktop right">
				
				<ul>
					<li> <a href="">Home</a> </li>
					<li> <a href="">Depoimentos</a> </li>
					<li> <a href="">Serviços</a> </li>
					<li> <a href="">Contato</a> </li>
				</ul>

			</nav> <!-- Desktop -->

			<nav class="mobile right">
				
				<ul>
					<li> <a href="">Home</a> </li>
					<li> <a href="">Depoimentos</a> </li>
					<li> <a href="">Serviços</a> </li>
					<li> <a href="">Contato</a> </li>
				</ul>

			</nav> <!-- Mobile -->

			<div class="clear"></div> <!-- Clear -->

		</div> <!-- Center -->
	</header> <!-- Header -->

	<section class="banner-container">
		<div style="background-image: url('images/bg_form.jpg');" class="banner-single"></div> <!-- Banner single -->
		<div class="overlay"></div> <!-- Overlay -->

		<div class="center">
			
		<form method="post">
			<h2> Qual o seu E-mail? </h2>
			<input type="email" name="email" required />
			<input type="hidden" name="identificador" value="form_home" />
			<input type="submit" name="acao" value="Cadastrar!">
		</form> <!-- Form -->

		</div> <!-- Center -->

		<div class="bullets"></div> <!-- Bullets -->

	</section> <!-- Banner container -->

	<section class="descricao_autor">
		<div class="center">
			
			<div class="w50 left">
				
				<h2> Luciano Fernandes </h2>
				<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tristique est et rhoncus facilisis. Quisque non purus vehicula, hendrerit erat et, vulputate nibh. Mauris semper pulvinar sollicitudin. Quisque at lectus massa. Ut egestas arcu non magna condimentum maximus. Vivamus ornare mauris eu ante vulputate feugiat. Curabitur rutrum molestie ante, sit amet maximus mauris. Duis hendrerit porttitor sagittis. Nam consequat risus turpis, ornare vehicula justo sagittis ac. Cras pulvinar a ligula ut varius. </p>

			</div> <!-- w50 -->

			<div class="w50 left">
				<img class="right" src="images/foto.jpg" />
			</div> <!-- w50 -->

			<div class="clear"></div> <!-- Clear -->

		</div> <!-- Center -->
	</section> <!-- Descricao autor -->

	<section class="especialidades">
		<div class="center">
			
			<h2 class="title"> Minhas Especialidades </h2>

			<div class="w33 left box-especialidade">
				<h3> <i class="fa fa-css3"></i> </h3>
				<h4> CSS3 </h4>
				<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tristique est et rhoncus facilisis. Quisque non purus vehicula, hendrerit erat et, vulputate nibh. Mauris semper pulvinar sollicitudin. Quisque at lectus massa. </p>
			</div> <!-- Box especialidade -->

			<div class="w33 left box-especialidade">
				<h3> <i class="fa fa-html5"></i> </h3>
				<h4> CSS3 </h4>
				<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tristique est et rhoncus facilisis. Quisque non purus vehicula, hendrerit erat et, vulputate nibh. Mauris semper pulvinar sollicitudin. Quisque at lectus massa. </p>
			</div> <!-- Box especialidade -->

			<div class="w33 left box-especialidade">
				<h3> <i class="fa fa-css3"></i> </h3>
				<h4> CSS3 </h4>
				<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tristique est et rhoncus facilisis. Quisque non purus vehicula, hendrerit erat et, vulputate nibh. Mauris semper pulvinar sollicitudin. Quisque at lectus massa. </p>
			</div> <!-- Box especialidade -->

			<div class="clear"></div> <!-- Clear -->

		</div> <!-- Center -->
	</section> <!-- Especialidades -->

	<section class="extras">
		<div class="center">
			
			<div class="w50 left depoimentos-container">
				<h2 class="title"> Depoimentos dos nossos clientes </h2>

				<div class="depoimento-single">
					<p class="depoimento-descricao">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tristique est et rhoncus facilisis. Quisque non purus vehicula, hendrerit erat et, vulputate nibh. Mauris semper pulvinar sollicitudin. Quisque at lectus massa.
					</p>

					<p class="nome-autor">
						Lorem Ipsum
					</p>
				</div> <!-- Depoimento single -->

				<div class="depoimento-single">
					<p class="depoimento-descricao">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tristique est et rhoncus facilisis. Quisque non purus vehicula, hendrerit erat et, vulputate nibh. Mauris semper pulvinar sollicitudin. Quisque at lectus massa.
					</p>

					<p class="nome-autor">
						Lorem Ipsum
					</p>
				</div> <!-- Depoimento single -->

				<div class="depoimento-single">
					<p class="depoimento-descricao">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tristique est et rhoncus facilisis. Quisque non purus vehicula, hendrerit erat et, vulputate nibh. Mauris semper pulvinar sollicitudin. Quisque at lectus massa.
					</p>

					<p class="nome-autor">
						Lorem Ipsum
					</p>
				</div> <!-- Depoimento single -->

			</div> <!-- Depoimentos container -->

			<div class="w50 left servicos-container">
				<h2 class="title"> Serviços </h2>

				<div class="servicos">
					<ul>
						<li>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tristique est et rhoncus 	facilisis.
						</li>

						<li>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tristique est et rhoncus 	facilisis.
						</li>

						<li>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tristique est et rhoncus 	facilisis.
						</li>

					</ul>
				</div> <!-- Servicos -->
			</div> <!-- Serviços container -->

			<div class="clear"></div> <!-- Clear -->

		</div> <!-- Center -->
	</section> <!-- Extras -->

	<footer>
		<div class="center">
			<p> Todos os direitos reservados </p>
		</div> <!-- Center -->
	</footer>

</body>
</html>