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
	
	<!-- link para uso da fonte Oswald -->
	<link href='https://fonts.googleapis.com/css?family=Oswald:300' rel='stylesheet' type='text/css'>

				<!-- Comando que permite acentuação no php -->
		<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
		<script type='text/javascript' src='http://files.rafaelwendel.com/jquery.js'></script>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><!-- Co -->
		
		<!-- Comando JQWERY --><script>
	function mascara(t, mask){
		var i = t.value.length;
		var saida = mask.substring(1,0);
		var texto = mask.substring(i)
		if (texto.substring(0,1) != saida){
		t.value += texto.substring(0,1);
		}}
 </script>
 
     <!-- Adicionando Javascript -->
    <script type="text/javascript" >
    
    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('endereco').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('estado').value=("");
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('endereco').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('estado').value=(conteudo.uf);
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('endereco').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('estado').value="...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = '//viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };

    </script>
  
   <title>Max Auto Peças - Cadastro</title></head>
      
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
	<a href="acesso/pagina1.html">Painel de Acesso</a>
	<a href="fale.php">Fale Conosco</a>
	<a href="contato.php">Contatos</a>
  </nav>  

	<div id="cadastrar"><a href="login.php" title="Faça login!">Login &raquo;</a></div>
	
	<div id="tela" class="tela">

						<center><br><br>
						<form name="form" id="form" action="controle.php" method="POST" onSubmit="return validacao()">

						<h2 class="conteudo">Cadastro de novos clientes</h2><br>
						<p class="resto">
						<link href='https://fonts.googleapis.com/css?family=Oswald:300' rel='stylesheet' type='text/css'>
						
						<div class="newspaper">
						
						CPF: <input type="text" class="txt" name="cpf" id="cpf" onkeypress="mascara(this, '###.###.###-###')"  ><br><br> 
						Nome: <input type="text" class="txt" name="nome" placeholder=" Nome completo..."> <br><br>
						Sexo: <select name="sexo" class="txt">
							<option value="">Selecione
							<option value="Masculino"> Masculino
							<option value="Feminino"> Feminino
							</select>
							<br><br>
						Nascimento: 	
							<input type="date" class="txt3" name="nasc">
							<br><br>
						CEP:  <input class="txt" name="cep" type="text" id="cep" value="" size="10" maxlength="9"
								onblur="pesquisacep(this.value);" onkeypress="mascara(this, '#####-###')" placeholder=" Somente números" /><br><br>
						Endereço: <input name="endereco" type="text" class="txt" id="endereco" size="60" placeholder=" Rua, Travessa, Av..." />
						Número: <input type="text" class="txt2" name="num" id="num" size="5"><br><br>
						Complemento: <input type="text" class="txt" name="complemento" id="complemento" placeholder=" Casa 2, fundos..."><br><br>
						Bairro: <input name="bairro" type="text" class="txt" id="bairro" size="40" /><br><br>
						Cidade: <input name="cidade" type="text" class="txt" id="cidade" size="40" />
						Estado: <input type="text" class="txt2" name="estado" id="estado" size="3"><br><br>
						Telefone: <input type="text" class="txt" name="telefone" id="telefone" onkeypress="mascara(this, '## #####-####')" ><br><br>
						Tipo de usuário: <select name="tipo_usuario" class="txt">
                <option value="">Selecione</option>
                <option value="4">Cliente</option>
            </select><br><br>
						E-mail: <input type="text" class="txt" name="email" placeholder=" exemplo@exemplo.com"><br><br>
						Senha: <input type="password" class="txt" name="senha" placeholder=" Contendo letras e números..."><br><br>
						
						<input type="submit" class="bt bradius" value="Cadastrar" name="cadastrar">
												
						</div></center></p>
	</div>
	

	
	</body>
</html>
