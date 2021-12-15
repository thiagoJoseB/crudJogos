<?php


require_once('../bd/conexaoMysqlContatos.php');



function excluir($idContatos)
{
    
    $sql = "delete from tblcontatos 
            where idcontatos = ".$idContatos;
    
    
    
    
    $conexao = conexaoMysql();
    
    if(mysqli_query($conexao, $sql))
        return true;
    else
        return false; 
    
    
    
}







?>