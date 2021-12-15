<?php

require_once('../bd/conexaoMysql.php');

function excluir($idCategorias)
{
    $sql = "delete from tblcategorias
             where idcategorias = ".$idCategorias;


 //Chamando a função que estabelçece a conexão com o BD 


$conexao = conexaoMysql();

if(mysqli_query($conexao, $sql))
    return true;

else
    return false;

}


?>