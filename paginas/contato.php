<form action="?pg=processar_contato" method="POST" id="contato" class="form">

			<table border="0">
				<tr>
					<td class="tituloCampo">Nome:</td>
					<td class="valorCampo">
						<input  type="text" id="nome" name="nome" placeholder="Digite seu nome...">
					</td>
				</tr>

				<tr>
					<td>E-mail:</td>
					<td>
						<input  type="Email" id="email" name="email" placeholder="Digite seu e-mail...">
					</td>
				</tr>

				<tr>
					<td>Sexo: </td>
						<td>
							<input  type="radio" id="sexoM" name="sexo" value="M"> Masculino
							<input  type="radio" id="sexoF" name="sexo" value="F"> Feminino 
						</td>				
				</tr>


				<tr>
					<td>Cidade: </td>
					<td>
						<select name="cidade" id="cidade">
							<option value=""> - </option>
							<option value="Tres Coracoes"> Três Corações </option>
							<option value="Varginha"> Varginha </option>
							<option value="Baependi"> Baependi </option>
							<option value="Cruzilia"> Cruzília </option>							
						</select> 
					</td>				
				</tr>

				<tr>
					<td>Assunto: </td>
					<td>
						<input  type="text" name="assunto" id="assunto" placeholder="Digite o assunto">
					</td>				
				</tr>

				<tr>
					<td>Mensagem: </td>
					<td>
						<textarea  rows="20" cols="40" placeholder="Digite sua proposta aqui..." name="mensagem" id="mensagem"></textarea>
					</td>				
				</tr>

				<tr>
					<td>Anexo:</td>
					<td>
						<p>Se necessario é possivel enviar uma foto ou documento para o vendedor!</p>
						<input type="file" id="anexo" name="anexo">
					</td>				
				</tr>

				<tr>
					<td></td>
					<td>
						<input type="submit" name="enviar" class="btn btn-success" id="enviar" value="Enviar contato">
					</td>				
				</tr>

			</table>
		</form>