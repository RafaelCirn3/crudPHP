
<h1>Cadastre sua amoeba</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Marca da sua Amoeba</label>
        <input type="text" name="marca" class="form-control">
    </div>
    <div class="mb-3">
        <label >Tamanho da sua Amoeba(P/M/G)</label>
        <input type="text" name="tamanho" class="form-control">
    </div>
    <div class="mb-3">
        <label >Cor da sua Amoeba</label>
        <input type="text" name="cor" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>