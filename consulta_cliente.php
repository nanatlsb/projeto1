<html>
	<head>
		<title>Consulta Cliente </title>
		<meta charset="utf-8">
	</head>
	<body>
<style>
body{
             background-image: linear-gradient(to right,GhostWhite,Snow,Seashell,AliceBlue,MistyRose,LavenderBlush,LightPink,Pink);
            }
</style>

		<CENTER><h1> CONSULTA CLIENTE </h1></CENTER>
		
<?php
	//Variavel que recebe o caminho e nome do arquivo
	$caminho = 'cliente.txt';
		
	//função responsavel por capturar o conteudo
	//do arquivo e apresentar no navegador
	//nl2br - função que substitui a quebra de linha
	//por <br>
	echo nl2br(file_get_contents($caminho));
		
?>
	</body>
</html>
