<?php
include ('./php/databaseconnect.php');
include ('./php/funcoes.php');
?>
<html lang="pt-br">
<head>
	<link rel="stylesheet" type="text/css" href="./css/style.css" />
</head>
<body>

	<div class="conteiner">
	
		<div class="bloco" id="divlogo">
			<img src="./images/logo/logo.png" href="#">
		</div>
		
		<div class="bloco" id="divtel">
			<span><img src="./images/logo/telefone.png" class="configimage">00 0000-0000</span>
		</div>
	</div>

	<div id="menu">
		<menu class="configmenu">
			<ul>
				<li><a href="">Página 1</a></li>
				<li><a href=""> Página 2</a></li>
				<li><a href="">Página 3</a></li>
				<li><a href="">Página 4</a></li>
				<li><a href="">Página 5</a></li>
				<li><a href="">Página 6</a></li>
				<li><a href="">Página 7</a></li>
		</menu>
	</div>
	
	<hr class="hr1">
	
	<div class="conteiner, contareaconfig" id="areaimg">
	
	<?php
	
		$var="text";
	
	?>
	
		<ul>
			<li><img src="./images/photos/img1.png"><p class="textleg" value="1" method="POST"><?php echo texto_legenda(1) ?></p><img src="./images/logo/social-baixo-foto.png"></li>
			<li><img src="./images/photos/img2.png"><p class="textleg" value="2" method="POST"><?php echo texto_legenda(2) ?></p><img src="./images/logo/social-baixo-foto.png"></li>
			<li><img src="./images/photos/img3.png"><p class="textleg" value="3" method="POST"><?php echo texto_legenda(3)  ?></p><img src="./images/logo/social-baixo-foto.png"></li>
			<li><img src="./images/photos/img4.png"><p class="textleg" value="4" method="POST"><?php echo texto_legenda(4) ?></p><img src="./images/logo/social-baixo-foto.png"></li>
			<li><img src="./images/photos/img5.png"><p class="textleg" value="5" method="POST"><?php echo texto_legenda(5) ?></p><img src="./images/logo/social-baixo-foto.png"></li>
		</ul>
		
		<ul>
			<li><img src="./images/photos/img6.png"><p class="textleg" value="6" method="POST"><?php echo texto_legenda(6) ?></p><img src="./images/logo/social-baixo-foto.png"></li>
			<li><img src="./images/photos/img7.png"><p class="textleg" value="7" method="POST"><?php echo texto_legenda(7) ?></p><img src="./images/logo/social-baixo-foto.png"></li>
			<li><img src="./images/photos/img8.png"><p class="textleg" value="8" method="POST"><?php echo texto_legenda(8) ?></p><img src="./images/logo/social-baixo-foto.png"></li>
			<li><img src="./images/photos/img9.png"><p class="textleg" value="9" method="POST"><?php echo texto_legenda(9) ?></p><img src="./images/logo/social-baixo-foto.png"></li>
			<li><img src="./images/photos/img10.png"><p class="textleg" value="10" method="POST"><?php echo texto_legenda(10) ?></p><img src="./images/logo/social-baixo-foto.png"></li>
		</ul>
		
		<ul>
			<li><img src="./images/photos/img11.png"><p class="textleg" value="11" method="POST"><?php echo texto_legenda(11) ?></p><img src="./images/logo/social-baixo-foto.png"></li>
			<li><img src="./images/photos/img12.png"><p class="textleg" value="12" method="POST"><?php echo texto_legenda(12) ?></p><img src="./images/logo/social-baixo-foto.png"></li>
			<li><img src="./images/photos/img13.png"><p class="textleg" value="13" method="POST"><?php echo texto_legenda(13) ?></p><img src="./images/logo/social-baixo-foto.png"></li>
			<li><img src="./images/photos/img14.png"><p class="textleg" value="14" method="POST"><?php echo texto_legenda(14) ?></p><img src="./images/logo/social-baixo-foto.png"></li>
			<li><img src="./images/photos/img15.png"><p class="textleg" value="15" method="POST"><?php echo texto_legenda(15) ?></p><img src="./images/logo/social-baixo-foto.png"></li>
		</ul>
		
		<ul>
			<li><img src="./images/photos/img16.png"><p class="textleg" value="16" method="POST"><?php echo texto_legenda(16) ?></p><img src="./images/logo/social-baixo-foto.png"></li>
			<li><img src="./images/photos/img17.png"><p class="textleg" value="17" method="POST"><?php echo texto_legenda(17) ?></p><img src="./images/logo/social-baixo-foto.png"></li>
			<li><img src="./images/photos/img18.png"><p class="textleg" value="18" method="POST"><?php echo texto_legenda(18) ?></p><img src="./images/logo/social-baixo-foto.png"></li>
			<li><img src="./images/photos/img19.png"><p class="textleg" value="19" method="POST"><?php echo texto_legenda(19) ?></p><img src="./images/logo/social-baixo-foto.png"></li>
			<li><img src="./images/photos/img20.png"><p class="textleg" value="20" method="POST"><?php echo texto_legenda(20) ?></p><img src="./images/logo/social-baixo-foto.png"></li>
		</ul>
	
	</div>
	
	<hr>

	<div class="conteiner, corpogeral" >
	
		<div class="bloco1" id="persona">
			<div class="imagem">
				<img src="./images/persona.png" class="configpersona">
			</div>
			
			<div class="conteudo">
				<h2>Pessoa ou Empresa</h2>
				<p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's 
				standard dummy text ever since the galley of type and scrambled it to make a type specimen book.</p>
				<p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's 
				standard dummy text ever since the galley of type</p>
			</div>
		</div>
		
		<div class="bloco2" id="social">
			<h2>Acesse também:</h2>
			<ul>
				<li><span><img src="./images/logo/facebook.png" href="#" class="configsocial" value="1"><?php echo redes_social($_POST[1]) ?><span></li>
				<li><span><img src="./images/logo/twitter.png" href="#" class="configsocial" value="2"><?php echo redes_social($_POST[2]) ?></span></li>
				<li><span><img src="./images/logo/flicke.png" href="#" class="configsocial" value="3"><?php echo redes_social($_POST[3]) ?></span></li>
			</ul>
		</div>
	
	</div>
	
	<hr class="hf">
	
	<footer>
		<div class="conteinerfooter">
			<div class="blocofooter">
				<p>Todos os direitos reservados - 2011</p>
			</div>
			<div class="blocofooter">
				<p class="f2">Linha Fast | <img src="./images/logo/logomini.png" class="minilogo">comunicação.com.br<p>
			</div>
		</div>
	</footer>
	</body>

</html>