//Comandos obrigat�rios de digita��o de informa��es

function validacao(){
		if(document.form.cpf.value==""){
			alert("Por favor, preencha o campo CPF.");
			document.form.cpf.focus();
			return false;
		}
		if(document.form.nome.value == "" ){
			alert("Por favor, preencha o campo Nome.");
			document.form.nome.focus();
			return false;
		}
		if(document.form.sexo.value == "" ){
			alert("Por favor, preencha o campo Sexo.");
			document.form.sexo.focus();
			return false;
		}

		if(document.form.nasc.value==""){
			alert("Por favor, preencha o campo Nascimento.");
			document.form.nasc.focus();
			return false;
		}
		if(document.form.cep.value==""){
			alert("Por favor, preencha o campo CEP.");
			document.form.cep.focus();
			return false;
		}
		if(document.form.endereco.value == "" ){
			alert("Por favor, preencha o campo Endere�o.");
			document.form.endereco.focus();
			return false;
		}
		if(document.form.num.value == "" ){
			alert("Por favor, preencha o campo N�mero.");
			document.form.num.focus();
			return false;
		}
		if(document.form.bairro.value == "" ){
			alert("Por favor, preencha o campo Bairro.");
			document.form.bairro.focus();
			return false;
		}
		if(document.form.cidade.value == "" ){
			alert("Por favor, preencha o campo Cidade.");
			document.form.cidade.focus();
			return false;
		}
		if(document.form.estado.value == "" ||
		   document.form.estado.value.length < 2 ||
		   document.form.estado.value.length > 3 ){
			alert("Preencha o campo Estado com apenas 2 caracteres.");
			document.form.estado.focus();
			return false;
		}
		if(document.form.telefone.value == "" ){
			alert("Por favor, preencha o campo Telefone.");
			document.form.telefone.focus();
			return false;
		}
		if(document.form.tipo_usuario.value == "" ){
			alert("Por favor, escolha uma op��o no campo Tipo de Usu�rio.");
			document.form.tipo_usuario.focus();
			return false;
		}
		if(document.form.email.value=="" || 
		   document.form.email.value.indexOf('@')==-1 || 
		   document.form.email.value.indexOf('.com')==-1){
		   alert("Por favor, digite um E-mail v�lido\n Ex: exemplo@exemplo.com")
			document.form.email.focus();
			return false;
		}
		if(document.form.senha.value=="" || 
		   document.form.senha.value.length <= 8 ){
		   alert("Por favor, digite uma Senha com no m�nimo 8 caracteres.")
			document.form.senha.focus();
			return false;
		}
}



	

// Consultar CEP
$(document).ready( function() {
   /* Executa a requisi��o quando o campo CEP perder o foco */
   $('#cep').blur(function(){
           /* Configura a requisi��o AJAX */
           $.ajax({
                url : 'cadastro.php', /* URL que ser� chamada */ 
                type : 'POST', /* Tipo da requisi��o */ 
                data: 'cep' + $('#cep').val(), /* dado que ser� enviado via POST */
                dataType: 'json', /* Tipo de transmiss�o */
                success: function(data){
                    if(data.sucesso > 0){
                        $('#endereco').val(data.endereco);
                        $('#bairro').val(data.bairro);
                        $('#cidade').val(data.cidade);
                        $('#estado').val(data.estado);
 
                        $('#num').focus();
                    }
                }
           });   
   return false;    
   })
});


