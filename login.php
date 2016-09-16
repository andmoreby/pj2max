<html>
<head>
     <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   
	<!-- Ligando o java script com o html -->
	<script type="text/javascript" src="java/cod.js"></script>
	<script type="text/javascript" src="java/adicionais.js"></script>
	<script type="text/javascript" src="java/jquery-2.2.4.min.js"></script>
	<script type="text/javascript" src="java/jquery.maskedinput.js"></script>
     
   
   	<!-- Liga o php com css -->
	<link rel = "STYLESHEET" href = "css/estilos.css" type ="text/css">
	<link rel = "STYLESHEET" href = "css/adicionais.css" type ="text/css">

      
   <head>	<title>Max Auto Peças - Login</title></head>
   
			<!-- link para uso da fonte Oswald -->
			<link href='https://fonts.googleapis.com/css?family=Oswald:300' rel='stylesheet' type='text/css'>

				<!-- Comando que permite acentuação no php -->
		<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><!-- Co -->
	
<body> 

	<div id="site"> <!-- agrupar conteúdo, criar um cabeçalho... -->
	
	<div id="barra" class="barra">	
	<ul id="barra-rapido">
		<li class="login">
		Olá Visitante! <a class="dif" href="login.php"> Faça o login ou cadastre-se</a>
		</li>
		<li class="conta">
		<a class="dif" href="acesso/pagina1.html">Minha conta
		</li>		
		</ul></div>
		
<header>

  <div class="content">
    <hgroup>
      <h1> </h1>
      <i> </i>
    </hgroup>
  </div>
  <div class="overlay"></div>
</header>
<section class="site">
  <nav>
    <a href="index.php">Home</a>
    <a href="prod.php">Produtos</a>
    <a href="login.php">Login</a>
    <a href="cadastro.php">Cadastro</a>
	<a href="acesso/pagina1.htnl">Painel de Acesso</a>
	<a href="fale.php">Fale Conosco</a>
	<a href="contato.php">Contatos</a>
  </nav>  

	<div id="tela" class="tela" class="bradius">
	
<br>
						<center>
						<link href='https://fonts.googleapis.com/css?family=Oswald:300' rel='stylesheet' type='text/css'>
		

		<div class="newspaper">
						<h2 class="conteudo">Já sou cliente</h2>
						<i class="rodape">Acesso exclusivo para clientes, funcionários e administração</i><br><br>
						<p>					
        <form id="form" action="controle.php" method="POST">
            E-mail<br><input type="text" class="txt bradius" name="email" id="email" /><br>
            Senha<br><input type="password" class="txt bradius" name="senha" id="senha" /><br>
            <input type="submit" onclick="pergunta()"class="bt bradius" name="enviar" value="Logar">
			<br><br><br><br>
			</form>
			
			<h2 class="conteudo">Ainda não sou cliente</h2>
			<form action ="cadastro.php">
			<i class="rodape">Clique para fazer seu cadastro</i><br>
			<input type="submit" class="bt2 bradius" name="cadastre-se" value="Cadastre-se" onclick=windows.open("cadastro.php")>
			
			</form>
			<br>
			</div>
			
		
		</p>
    </div>
	

	</body>
</html>
