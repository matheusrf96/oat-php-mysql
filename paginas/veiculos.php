<?php 

if(isset($_GET['filtro'])){
	$filtro = $_GET['filtro'];
}
else{
	$filtro = TRUE;
}

?>

<div name="buscador">
	<form method="POST" action="?pg=filtrar">
		<input type="text" name="busca" placeholder="O que você esta procurando?">

		<select name="categoria" id="categoria">
			<option value=""> - </option>
			<option value="carro"> Carro </option>
			<option value="moto"> Moto </option>						
		</select>

		<select name="preco" id="preco">
			<option value=""> - </option>
			<option value="menor"> Menor Preço </option>
			<option value="maior"> Maior Preço </option>						
		</select>

		<input type="submit" name="fazBusca" value="Buscar">
	</form>
</div>

<div name="itens">
	<h1>Os itens aqui</h1>
	
	<?php
		$sql = "SELECT * FROM veiculo WHERE ".$filtro;
		$db->query($sql);

		$result = $db->resultSet();

		foreach ($result as $item) {
			echo "
				ID: ".$item['id']."<br />
				Nome: ".$item['nome']."<br />
				Descrição: ".$item['descricao']."<br />
				Foto: ".$item['foto']."<br />
				Valor: R$".$item['valor']."<br />
				Tipo: ".$item['tipo']."<br />
				<br />
			";
		}
	?>
</div>
