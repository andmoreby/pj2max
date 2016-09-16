<?php
//utilização de namespaces
namespace controle;

include 'processaAcesso.php';

use processaAcesso as processaAcesso;

$controle = new \processaAcesso\ProcessaAcesso;

if ($_POST['enviar']) {

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $usuario = $controle->verificaAcesso($email, $senha);
	


    //redirecionando para pagina conforme o tipo do usuário
    if ($usuario[0]['tipo_usuario'] == 1) {
        header("Location: adm");
    } 
	else if ($usuario[0]['tipo_usuario'] == 2) {
        header("Location: acesso/pagina.php");
    } 
	else if ($usuario[0]['tipo_usuario'] == 3) {
        header("Location: acesso/pagina.php");
    }
	else if ($usuario[0]['tipo_usuario'] == 4) {
        header("Location: acesso/pagina1.html");
    }
} else if ($_POST['cadastrar']) {
	
		//Utilização de endereço automático com uso do CPF 
$cep = $_POST['cep'];
 
$reg = simplexml_load_file("http://cep.republicavirtual.com.br/web_cep.php?formato=xml&cep=" . $cep);
 
$dados['sucesso'] = (string) $reg->resultado;
$dados['endereco']     = (string) $reg->tipo_logradouro . ' ' . $reg->logradouro;
$dados['bairro']  = (string) $reg->bairro;
$dados['cidade']  = (string) $reg->cidade;
$dados['estado']  = (string) $reg->uf;
 
echo json_encode($dados);
	
	
	$cpf = $_POST['cpf'];
	$nome = $_POST['nome'];
	$sexo = $_POST['sexo'];
	$nasc = $_POST['nasc'];
	$cep = $_POST['cep'];
	$endereco = $_POST['endereco'];
	$num = $_POST['num'];
	$complemento = $_POST['complemento'];
	$bairro = $_POST['bairro'];
	$cidade = $_POST['cidade'];
	$estado = $_POST['estado'];
	$telefone = $_POST['telefone'];
	$tipo_usuario = $_POST['tipo_usuario'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $arr = array('cpf' => $cpf, 'nome' => $nome, 'sexo' => $sexo, 'nasc' => $nasc, 'cep' => $cep, 'endereco' => $endereco, 'num' => $num, 'complemento' =>$complemento, 'bairro' => $bairro, 'cidade' => $cidade, 'estado' => $estado , 'bairro' => $bairro, 'telefone' => $telefone, 'email' => $email, 'senha' => $senha, 'tipo_usuario' => $tipo_usuario);

    if (!$controle->cadastraUsuario($arr)) {

        echo 'Aconteceu algum erro';
    } else {
        $tipo_usuario = $controle->verificaAcesso($email, $senha);

        if ($tipo_usuario[0]['tipo_usuario'] == 1) {

            header("Location:acesso/pagina.php");
        } 
		else if ($tipo_usuario[0]['tipo_usuario'] == 2) {

            header("Location:acesso/pagina.php");
        }
		else if ($tipo_usuario[0]['tipo_usuario'] == 3) {

            header("Location:acesso/pagina.php");
        }
		else if ($tipo_usuario[0]['tipo_usuario'] == 4) {

            header("Location:acesso/pagina1.php");
        }
    }
}
echo 'Ops, usuário sem cadastro';
?>
