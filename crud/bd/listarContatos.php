<?php


require_once(SRC.'bd/conexaoMysqlContatos.php');



//retorna todos os registros existentes no banco
function listar ()
{
    
    $sql = "select * from tblcontatos order by idcontatos desc";
    
    
    
    $conexao = conexaoMysql();
    
    $select = mysqli_query($conexao, $sql);
    
    return $select;
    
}

function buscar ($idContatos)
{
    $sql = "select * from tblcontatos
            where idcontatos = ".$idContatos;
    
    
    $conexao = conexaoMysql();
    
    //Solicita aoBD a execução do script SQL
//   if()){
//       echo('foi o select');
//   }else{
////       echo('não foi');
//   }
//    
     $select = mysqli_query($conexao, $sql);
    return $select;
}








?>