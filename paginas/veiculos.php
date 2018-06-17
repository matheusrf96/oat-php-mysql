<?php 

if(isset($_GET['filtro'])){
	$filtro = $_GET['filtro'];
}
else{
	$filtro = TRUE;
}

?>

<div name="buscador">
	<h4>Pesquise os itens:</h4>

	<form method="POST" action="?pg=filtrar">
		<div class="row">
			<div class="col-6 from-group">
				<input type="text" name="busca" class="form-control search-box" placeholder="O que você esta procurando?" value="">		
			</div>
			<div id="result"></div>

			<div class="col">
				<select name="categoria" class="form-control" id="categoria">
					<option value=""> - </option>
					<option value="carro"> Carro </option>
					<option value="moto"> Moto </option>						
				</select>
			</div>

			<div class="col">
				<select name="preco" class="form-control" id="preco">
					<option value=""> - </option>
					<option value="menor"> Menor Preço </option>
					<option value="maior"> Maior Preço </option>						
				</select>
			</div>

			<input type="submit" class="btn btn-success" name="fazBusca" value="Buscar"> 
		</div>
	</form>
	<a href="?pg=veiculos&filtro="> > Mostrar todos.</a>
</div>

<div class="itens">	
	<?php
		$sql = "SELECT * FROM veiculo ".$filtro;
		$db->query($sql);

		$result = $db->resultSet();

		$divisor = 0;

		foreach ($result as $item) {
			if($divisor == 0){
				echo "<div class='row'>";
			}
			echo "
				<div class='col-4 sub-caixa'>
					<div class='caixa-item'>
						<img src='img/veiculos/".$item['foto']."' width='340' height='250'/><br/>
						Identificador: ".$item['id']."<br />
						Nome: ".$item['nome']."<br />
						Descrição: ".$item['descricao']."<br />
						Valor: R$".$item['valor']."<br />
					</div>
				</div>
			";

			$divisor++;

			if($divisor == 3){
				echo "</div>";
				$divisor = 0;
			}
		}

		// echo $sql;
	?>
</div>
