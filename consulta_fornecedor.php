<html>
	<head>
		<title>Consulta do fornecedor </title>
		<meta charset="utf-8">
</head>
<body>
<style>
body{
             background-image: linear-gradient(to right,GhostWhite,Snow,Seashell,AliceBlue,MistyRose,LavenderBlush,LightPink,Pink);
            }
</style>

<div id="grad1"></div>

		<CENTER><h1> CONSULTA DO FORNECEDOR </h1></CENTER>

<?php
	
	$caminho = 'fornecedor.txt';
		
	
	echo nl2br(file_get_contents($caminho));
		
?>
	</body>
</html>