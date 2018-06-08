<?php

if(isset($_POST['fazBusca'])){
    $filtroAux = "";

	$busca = $_POST['busca'];
	$categoria = $_POST['categoria'];
    $preco = $_POST['preco'];
    
    $busca = " nome LIKE '%".$busca."%'";
    $filtroAux = $busca;

    $cat = "";
    if($filtroAux != ""){
        $cat = " AND ";
    }

    if($categoria == "carro"){
        $cat .= " tipo = 'C'";
    }
    elseif($categoria == "moto"){
        $cat .= " tipo = 'M'";
    }

    $filtroAux .= $cat;

    if($preco == "menor"){
        $preco = " ORDER BY valor ASC";
    }
    elseif($preco == "maior"){
        $preco = " ORDER BY valor DESC";
    }
    $filtroAux .= $preco;
    
    header('Location: ?pg=veiculos&filtro='.$filtroAux);
}

?>