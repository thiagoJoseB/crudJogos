<?php




require_once('../bd/conexaoMysql.php');

function excluir($idJogos)
{
    $sql = "delete from tbljogos
                where idjogos = ".$idJogos;
    
    
     
    $conexao = conexaoMysql();
    
    if(mysqli_query($conexao, $sql))
        return true;
    else
        return false;
}

?>