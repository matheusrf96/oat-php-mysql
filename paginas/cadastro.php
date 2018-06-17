<form action="?pg=processar_cadastro" method="POST" id="cadastro" class="form" enctype="multipart/form-data">
    <div class="form-group">
        <label for="nome">Modelo: </label>
        <input type="text" name="nome" class="form-control" id="nome" required />
    </div>

    <div class="form-group">
        <label for="descricao">Descrição: </label>
        <textarea name="descricao" id="descricao" class="form-control" cols="30" rows="10"></textarea>
    </div>

    <div class="form-group">
        <label for="foto">Foto: </label>
        <input type="file" name="foto" class="form-control" id="idFoto" />
    </div>

    <div class="form-group">
        <label for="valor">Valor: </label>
        <input type="number" name="valor" class="form-control" id="valor" required />
    </div>

    <div class="form-group">
        <label for="tipo">Tipo: </label>
        <input type="radio" name="tipo" id="tipoC" value="C" required />Carro
        <input type="radio" name="tipo" id="tipoM" value="M" required />Moto
    </div>

    <input type="submit" class="btn btn-success" value="Cadastrar" name="cadastrar" />
</form>