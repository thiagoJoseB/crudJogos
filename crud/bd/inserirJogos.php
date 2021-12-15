<?php


require_once('../bd/conexaoMysqlJogos.php');


function inserir ($arrayJogos)
{
    
    $sql = "insert into tbljogos(
           nome,
           valor,
           dataLancamento,
           destaques,
           promocao,
           descricao,
          
    )
           values
        (
         '". $arrayJogos['nome'] ."',
         '". $arrayJogos['valor'] ."',
         '". $arrayJogos['dataLancamento'] ."',
         '". $arrayJogos['destaques'] ."',
         '". $arrayJogos['promocao'] ."',
          '" .$arrayJogos['descricao'] ."'
        
        

             

         
       
    )
    
    
    ";
    
    
  
    
    $conexao = conexaoMysql();
    
    var_dump($sql);
    die;

    
    if(mysqli_query($conexao, $sql))
        return true;
   
    
    else
        return false;
  
    
   
}











?>