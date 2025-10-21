<?php

if(!empty($_GET['id'])){

    require_once("backend/conexao.php");
    
    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM usuarios WHERE id_usuario = $id";

    $resultado = $mysqli->query($sqlSelect);

    if($resultado->num_rows > 0){

        $sqlDeletar = "DELETE FROM usuarios WHERE id_usuario = $id";
        $resultadoDeletar = $mysqli->query($sqlDeletar);
    }
}
header('Location: dashboardusers.php')

?>