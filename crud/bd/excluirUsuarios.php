<?php

require_once('../bd/conexaoMysqlUsuarios.php');


function excluir($idusuarios)
    
{
    
    $sql = "delete from tblusuarios 
        where idusuarios = ".$idusuarios;
    
    $conexao = conexaoMysql();
    
    
    
    if(mysqli_query($conexao , $sql))
        return true;
    
  else
        return false;
    
}




?>