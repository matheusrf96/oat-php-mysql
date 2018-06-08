<div name="buscador">
	<form>
		<input type="text" name="busca" placeholder="O que você esta procurando?">

		<input type="submit" name="fazBusca" value="Buscar">
	</form>
</div>

<div name="filtro">
	<table>
		<tr>
			<td><h6>Filtrar por</h6></td>
			<td>
				<select name="categoria" id="categoria">
					<option value=""> - </option>
					<option value="carro"> Carro </option>
					<option value="moto"> Moto </option>						
				</select>
			</td>


			<td>
				<select name="preco" id="preco">
					<option value=""> - </option>
					<option value="menor"> Menor Preço </option>
					<option value="maior"> Maior Preço </option>						
				</select>
			</td>
		</tr>
	</table>

</div>

<div name="itens">
	<h1>Os itens aqui</h1>
	
	<?php
		$sql = "SELECT * FROM veiculo ";
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
