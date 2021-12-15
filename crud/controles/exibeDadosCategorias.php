<?php


  require_once(SRC.'bd/listarCategorias.php');


function exibirCategorias()
{
    
    
  ///  chama funcao que pega os dados no banco e recebe os registros
    
    $dados = listar();
    
    return $dados;
    
}






?>