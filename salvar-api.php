<?php 
    include("config.php");
    $_POST = json_decode(file_get_contents('php://input'), true);
    switch ($_POST["acao"]){
        case 'cadastrar':
            $marca = $_POST["marca"];
            $tamanho = $_POST["tamanho"];
            $cor = $_POST["cor"];


            $sql = "INSERT INTO amoebas (marca,tamanho,cor) VALUES('{$marca}','{$tamanho}', '{$cor}') ";
            $res = $conn->query($sql);
            if($res == true){
                print"<script>alert('cadastro realizado');</script>";
                print"<script>location.href='?page=listar';</script>";
            }else{
                print"<script>alert('cadastro não realizado');</script>";
                print"<script>location.href='?page=listar';</script>";
            }
            break;
        case 'editar':
            $marca = $_POST["marca"];
            $tamanho = $_POST["tamanho"];
            $cor = $_POST["cor"];


            $sql = "UPDATE amoebas SET marca='{$marca}', tamanho ='{$tamanho}', cor='{$cor}'
            WHERE 
                id=".$_REQUEST["id"];


            $res = $conn->query($sql);
            if($res == true){
                print"<script>alert('amoeba editada');</script>";
                print"<script>location.href='?page=listar';</script>";
            }else{
                print"<script>alert('amoeba não editada');</script>";
                print"<script>location.href='?page=listar';</script>";
            }
            break;
        case 'excluir':
            $marca = $_POST["marca"];
            $tamanho = $_POST["tamanho"];
            $cor = $_POST["cor"];


            $sql = "DELETE FROM amoebas WHERE id=".$_REQUEST["id"];
            
            $res = $conn->query($sql);
            if($res == true){
                print"<script>alert('amoeba excluida');</script>";
                print"<script>location.href='?page=listar';</script>";
            }else{
                print"<script>alert('amoeba não excluida');</script>";
                print"<script>location.href='?page=listar';</script>";
            }
            break;
    }
?>