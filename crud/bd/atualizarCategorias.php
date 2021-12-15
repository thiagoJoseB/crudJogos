<?php


require_once('../bd/conexaoMysql.php');

function editar ($arrayCategorias)
{
    $sql = "update tblCategorias set 
          tipo = '".$arrayCategorias['tipo']."'
          where idCategorias = ".$arrayCategorias['id'];
    
    
    $conexao = conexaoMysql();
    
   if(mysqli_query($conexao, $sql))
        return true;
    
    else
        return false;
    
}




?>