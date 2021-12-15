<?php







require_once(SRC.'bd/listarContatos.php');



function exibirContatos()
{
    
    $dados = listar();
    
    return $dados;
    
}


?>