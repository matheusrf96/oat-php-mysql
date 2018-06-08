<?php

if(isset($_POST['enviar'])){

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$sexo = $_POST['sexo'];
	$cidade = $_POST['cidade'];
	$assunto = $_POST['assunto'];
	$mensagem = $_POST['mensagem'];

	if($_POST['anexo']){
		$anexo = $_POST['anexo'];
	}
	else{
		$anexo = '';
	}

	$sqlInsert = "INSERT INTO contato (nome,email,sexo,cidade,assunto,mensagem,anexo) VALUES 
	('".$nome."','".$email."','".$sexo."','".$cidade."','".$assunto."','".$mensagem."','".$anexo."')";


	$db->query($sqlInsert);

	if($db->execute()){
		echo "Contato enviado com sucesso!";
	}
	else{
		echo "Envio de contato falhou!";	
	}
}

?>