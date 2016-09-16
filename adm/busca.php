<?php
	mysql_connect('localhost', 'root', '') or die("Erro ao Conectar");
	mysql_select_db('acesso') or die ("Erro ao Selecionar Banco");

	$pesquisa = mysql_real_escape_string($_POST['palavra']);
	$sql      = "SELECT *  FROM cadastro WHERE nome LIKE '%$pesquisa%'";
	$query    = mysql_query($sql) or die ("Erro ao Pesquisar");
	
	if(mysql_num_rows($query) <= 0 ){
		echo 'Nada Encontrado...' ;
	} else{
		while($res = mysql_fetch_assoc($query)){
			echo '<b>ID:</b> '.$res['ID'].'<br>';
			echo '<b>Nome:</b> '.$res['nome'].'<br>';
			echo '<b>CPF:</b> '.$res['cpf'].'<br>';
			echo '<b>Telefone:</b> '.$res['telefone'].'<br>';
			echo '<b>E-mail:</b> '.$res['email'].'<br>';
			echo '<b>CEP:</b> '.$res['cep'].'<br>';
			echo '<b>Endereço:</b> '.$res['endereco'].'  ';
			echo '<b>Num:</b> '.$res['num'].' <br> ';
			echo '<b>Complemento:</b> '.$res['complemento'].'  ';
			echo '<b>Bairro:</b> '.$res['bairro'].' <br> ';
			
			echo '<br><br><br><br>';


		}
	}
?>
