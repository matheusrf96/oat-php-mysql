<?php

if(isset($_POST['enviar'])){

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$sexo = $_POST['sexo'];
	$cidade = $_POST['cidade'];
	$assunto = $_POST['assunto'];
	$mensagem = $_POST['mensagem'];

	if (isset($_FILES['anexo'])) {
		$anexoC = $_FILES['anexo']['name'];
		if(move_uploaded_file($_FILES['anexo']['tmp_name'], "img/uploads/{$_FILES['anexo']['name']}")){
			echo "Sucesso upload<br />";
		}
		else{
			echo "Erro upload<br />";
		}
	}else{
		$anexoC="";
	}    

	$sqlInsert = "INSERT INTO contato (nome,email,sexo,cidade,assunto,mensagem,anexo) VALUES 
	('".$nome."','".$email."','".$sexo."','".$cidade."','".$assunto."','".$mensagem."','".$anexoC."')";

	$db->query($sqlInsert);

	if($db->execute()){
		echo "Contato enviado com sucesso!";
	}
	else{
		echo "Envio de contato falhou!";	
	}

	header("refresh:3;url=?pg=veiculos&filtro=");
}

?>