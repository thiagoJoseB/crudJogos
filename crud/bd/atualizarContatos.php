<?php




require_once('../bd/conexaoMysqlContatos.php');


function editar ($arrayContatos)
{
 $sql = "update tblcontatos set 
         nome = '".$arrayContatos['nome']."',
         email = '".$arrayContatos['email']."',
         celular = '".$arrayContatos['celular']."'
         where idcontatos = ".$arrayContatos['id'];
     
  $conexao = conexaoMysql();
    
   if(mysqli_query($conexao, $sql))
          return true;
       
 
      else
           return false;        

}




?>