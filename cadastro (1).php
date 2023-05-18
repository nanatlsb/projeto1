<?php
	
	    $nome = $_POST['nome'];
		 $cpf = $_POST['cpf'];
		 $nasc =  $_POST['nasc'];
		 $tel =  $_POST['tel'];
		 $email =  $_POST['email'];
		 $cep =  $_POST['cep'];
		 $rua =  $_POST['rua'];
		 $bairro =  $_POST['bairro'];
		 $cidade =  $_POST['cidade'];
         $estado =  $_POST['estado'];
	

			if($nome != "")
			{

				$caminho = "cliente.txt"; 
				$conteudo = "
Cliente:$nome, $cpf, $nasc, $tel, $email, $cep, $rua, $bairro, $cidade, $estado.
";
				

				if(file_put_contents($caminho,$conteudo,FILE_APPEND))
				{
					echo "Cadastrado com sucesso";
				}
				
			}

?>