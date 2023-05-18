<?php
	
	     $nome = $_POST['nome'];
         $cnpj = $_POST['cnpj'];
         $data_nasc = $_POST['data_nasc']
		 $tel = $_POST['tel'];
		 $email =  $_POST['email'];
		 $rua =  $_POST['rua'];
		 $num =  $_POST['num'];
		 $bairro =  $_POST['bairro'];
         $cidade = $_POST['cidade'];
		 $estado =  $_POST['estado'];
		 $tipo_produto =  $_POST['tipo_produto'];
        
	

			if($nome != "")
			{

				$caminho = "fornecedor.txt"; 
				$conteudo = "
Fornecedor: $nome, $cnpj, $data_nasc, $tel, $email, $rua, $numero, $bairro, $cidade, $estado, $tipo_produto.
";
				

				if(file_put_contents($caminho,$conteudo,FILE_APPEND))
				{
					echo "Cadastrado com sucesso";
				}
				
			}

?>