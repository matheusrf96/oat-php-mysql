<?php

require_once "models/veiculo.php";

if(isset($_POST['cadastrar'])){
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $valor = $_POST['valor'];
    $tipo = $_POST['tipo'];

    if(isset($_POST['foto'])){
        $foto = $_POST['foto'];
    }
    else{
        $foto = "img/default.jpg";
    }

    $veiculo = new Veiculo($nome, $descricao, $foto, $valor, $tipo);

    $sql = "
        INSERT INTO veiculo(nome, descricao, foto, valor, tipo) VALUES 
        (
            '".$veiculo->getNome()."',
            '".$veiculo->getDescricao()."',
            '".$veiculo->getFoto()."',
            ".$veiculo->getValor().",
            '".$veiculo->getTipo()."'
        )    
    ";
    $db->query($sql);

    if($db->execute()){
        echo "Sucesso!";
    }
    else{
        echo "Erro!";
    }
}
?>