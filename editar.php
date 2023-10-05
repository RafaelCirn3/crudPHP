<h1>Editar Amoeba</h1>
<?php 
    $sql = "SELECT * FROM  amoebas WHERE  id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
    <div class="mb-3">
        <label>marca Amoeba</label>
        <input type="text" name="marca" class="form-control">
        <?php print $row->marca;?>
    </div>
    <div class="mb-3">
        <label >tamanho(P/M/G)</label>
        <input type="text" name="tamanho" class="form-control">
        <?php print $row->tamanho;?>
    </div>
    <div class="mb-3">
        <label >cor</label>
        <input type="text" name="cor" class="form-control" required>
    </div>
    <div class="mb-3">
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>