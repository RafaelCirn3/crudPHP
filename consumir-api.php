
<?php 
    include("config.php");
    $sql = "SELECT * FROM amoebas";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;
    $retorno=[];
    if ($qtd > 0) {
        print "{";
        while($row = $res->fetch_object()){
            array_push($retorno, "{'marca':'$row->marca','tamanho':'$row->tamanho','cor':'$row->cor'}");
        }
        print join(",", $retorno);
        print"}";
    }else{
        echo"{}";}
?>
