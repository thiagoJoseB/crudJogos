<?php

require_once('../bd/conexaoMysqlContatos.php');




function inserir($arrayContatos)
{
    
    $sql = "insert into tblcontatos (
             nome,
             email,
             celular
             
            ) 
            values(
            
               '".$arrayContatos['nome']."',
               '".$arrayContatos['email']."',
               '".$arrayContatos['celular']."'
               
            
            )
            
     ";
    
    
    $conexao = conexaoMysql();
    
    if(mysqli_query($conexao, $sql))
    
        return true;
    
    else
        return false;
    
}



?>


