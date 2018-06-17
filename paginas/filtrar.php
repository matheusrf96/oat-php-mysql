<?php

if(isset($_POST['fazBusca'])){
    $filtroAux = "";

	$busca = $_POST['busca'];
	$categoria = $_POST['categoria'];
    $preco = $_POST['preco'];
    $where = FALSE;
    
    if($busca != ""){
        $busca = "WHERE nome LIKE '%".$busca."%'";
        $filtroAux = $busca;
        $where = TRUE;
    }
    else{
        $filtroAux = "";
        $busca = "";
    }

    $cat = "";
    if($where == TRUE){
        $cat = " AND ";
    }
    else{
        $cat = " WHERE ";
    }

    if($categoria == "carro"){
        $cat .= " tipo = 'C'";
    }
    elseif($categoria == "moto"){
        $cat .= " tipo = 'M'";
    }
    else{
        $cat .= "TRUE";
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