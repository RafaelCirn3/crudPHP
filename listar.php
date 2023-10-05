<h1>Amoebas Registradas</h1>
<?php 
    $sql = "SELECT * FROM amoebas";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if ($qtd > 0) {
        print "<table class='table table-hover table-striped table-bordered'>";
        print "<tr>";
        print "<th>#</th>";
        print "<th>Marca</th>";  
        print "<th>Tamanho</th>";
        print "<th>Cor</th>";
        print "<th>ações</th>";
        print "</tr>";
        while($row = $res->fetch_object()){
            print"<tr>";
            print "<td>".$row->id."</td>";
            print "<td>".$row->marca."</td>";
            print "<td>".$row->tamanho."</td>";
            print "<td>".$row->cor."</td>";
            print "<td> <button class='btn' style=' background-color:#FFFF99' onclick=\"location.href='?page=editar&id=".$row->id."'\">editar</button>
                        <button style=' background-color:#FFB6C1 ' onclick=\"if(confirm('tem certeza que deseja excluir ?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false}\" class='btn'>Excluir</button></td>";
            print "</tr>";
        }
        print"</table>";
    }else{
        echo"<p class='alert alert-danger>sem resultados</p>";}
?>
