<?php

if(isset($_POST['enviar'])){

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	 
	if ($_POST['sexo']=='M') {
		$sexo = "Masculino";
	}elseif($_POST['sexo']=='F') {
		$sexo="Feminino";
	}


	$cidade = $_POST['cidade'];
	$assunto = $_POST['assunto'];
	$mensagem = $_POST['mensagem'];
	$anexo = $_POST['anexo'];

	$sqlInsert = "INSERT INTO contato (nome,email,sexo,cidade,assunto,mensagem,anexo) VALUES 
	('".$nome."','".$email."','".$sexo."','".$cidade."','".$assunto."','".$mensagem."','".$anexo."')";


	mysqli_query($link, $sqlInsert);

	if(mysqli_affected_rows($link) > 0){
		echo "Contato enviado com sucesso!";
	}
	else{
		echo "Envio de contato falhou!";	
	}
}

?>