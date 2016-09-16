<?php
		include "../processaAcesso.php";
?>

<!DOCTYPE html>
<html >
  <head>
  <link rel="shortcut icon" href="../imagens/vol.png" type="image/x-icon" />

<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   
	<!-- Ligando o java script com o html -->
	<script type="text/javascript" src="java/cod.js"></script>
	<script type="text/javascript" src="java/adicionais.js"></script>
	<script type="text/javascript" src="java/jquery-2.2.4.min.js"></script>
	<script type="text/javascript" src="java/jquery.maskedinput.js"></script>
	<script src="js/calend.js"></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
     
   
   	<!-- Liga o php com css -->
	<link rel = "STYLESHEET" href = "css/estilos.css" type ="text/css">
	<link rel = "STYLESHEET" href = "css/adicionais.css" type ="text/css">
	<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400|Roboto+Condensed:400|Fjalla+One:400'>
	<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
	<script src="js/index.js"></script>
    <link rel="stylesheet" href="css/reset.css">
	
	<meta charset="UTF-8">
	<meta name='viewport' content='width=device-width, initial-scale=1'>
           
		   	<!-- link para uso da fonte Oswald -->
			<link href='https://fonts.googleapis.com/css?family=Oswald:300' rel='stylesheet' type='text/css'>

				<!-- Comando que permite acentuação no php -->
		<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><!-- Co -->

        <script src="js/index.js"></script>
    <link rel="stylesheet" href="css/reset.css">
	

		
    <title>Painel do Gerente - Clientes e Funcionários</title>
    
<link rel="stylesheet" href="css/style.css">    
  </head>

  <body>
  <div class='sidebar'>
    <div class='title'>
      Gerente
    </div>
    <ul class='nav' href="index.html">
      <li>
        <a href="index.html">Painel de Acesso</a>
      </li>
      <li>
        <a>Relatório e Estatística</a>
      </li>
      <li>
        <a class='active' href="cliente.php">Clientes e Funcionários</a>
      </li>
      <li>
        <a>Estoque de Produtos</a>
      </li>
      <li>
        <a>Previews</a>
      </li>
      <li>
        <a>Assets</a>
      </li>
      <li>
        <a>Atualizar Informações</a>
      </li>
      <li>
        <a href="../logout.php">Sair</a>
      </li>
    </ul>
  </div>



<div id="tela" class="tela">
<section class="site">
  <nav>
    <a href="../index.php">Home</a>
    <a href="prod.php">Produtos</a>
    <a href="cadastro.php">Cadastro</a>
  </nav>  <br><br>
  


<div id="tela" class="tela">

<div class="newspaper">

<script>
function abre_janela(url){
	janela= window.open(url, "", "width= 800px, height= 500px, scrollBars= no")
} </script>

<br>
<h1>Buscar por clientes </h1>
<script type="text/javascript">
$(function(){
	$("#pesquisa").keyup(function(){
		var pesquisa = $(this).val();
		
		if(pesquisa != ''){
			var dados = {
				palavra : pesquisa
			}
			
			$.post('busca.php', dados, function(retorna){
				$(".resultados").html(retorna);
			});
		}
	});
	$("#form-pesquisa").submit(function(e){
		e.preventDefault();
		var pesquisa = $("#pesquisa").val();
		
		if(pesquisa == ''){
			alert('Informe sua Pesquisa!');
		}else {
			var dados = {
				palavra : pesquisa
			}
			S.post('busca.pgp', dados, function(retorna){
				$(".resultados").html(retorna);
			});
		}
	});
});

</script>
<form id="form-pesquisa" method="post" action="busca.php" >  
<input type="text" class="txt" name="pesquisa" id="pesquisa"  placeholder="Digite o nome">
<input type="submit" class="bt bradius" name="enviar" value="Visualizar todos" onClick="abre_janela('busca.php')">
 <BR><BR>
</form>

<ul class="resultados rod" >

</ul>
<br><br>
<br><br><br><br>

<center>
<h2 class="conteudo">Ainda não é cliente</h2>
			<form action ="cadastro.php">
			<i class="rodape">Clique para fazer cadastro</i><br>
			<input type="submit" class="bt2 bradius" name="cadastre-se" value="Cadastre" onclick=windows.open("../cadastro.php")>
  
  

</div>
</center>
</div>
    
    
    
  </body>
</html>
