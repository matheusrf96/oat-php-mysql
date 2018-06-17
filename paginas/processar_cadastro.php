<?php

require_once "models/veiculo.php";

if(isset($_POST['cadastrar'])){
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $valor = $_POST['valor'];
    $tipo = $_POST['tipo'];

    if (isset($_FILES['foto'])) {
        $fotoC = $_FILES['foto']['name'];
        if(move_uploaded_file($_FILES['foto']['tmp_name'], "img/veiculos/{$_FILES['foto']['name']}")){
            echo "Sucesso upload<br />";
        }
        else{
            echo "Erro upload<br />";
        }
    }else{
       $fotoC = "img/icon.jpg";
    }

    $veiculo = new Veiculo($nome, $descricao, $fotoC, $valor, $tipo);

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

    // echo "<textarea>".$sql."</textarea>";
    
    if($db->execute()){
        echo "Sucesso!";
    }
    else{
        echo "Erro!";
    }

    header("refresh:3;url=?pg=veiculos&filtro=");
}
?>