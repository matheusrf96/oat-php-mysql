<form action="?pg=processar_cadastro" method="POST" id="cadastro" class="form">
    <div>
        <label for="nome">Modelo: </label>
        <input type="text" name="nome" id="nome" required />
    </div>

    <div>
        <label for="descricao">Descrição: </label>
        <textarea name="descricao" id="descricao" cols="30" rows="10"></textarea>
    </div>

    <div>
        <label for="foto">Foto: </label>
        <input type="file" name="foto" id="foto" />
    </div>

    <div>
        <label for="valor">Valor: </label>
        <input type="number" name="valor" id="valor" required />
    </div>

    <div>
        <label for="tipo">Tipo: </label>
        <input type="radio" name="tipo" id="tipoC" value="C" required />Carro
        <input type="radio" name="tipo" id="tipoM" value="M" required />Moto
    </div>

    <input type="submit" value="Cadastrar" name="cadastrar" />
</form>