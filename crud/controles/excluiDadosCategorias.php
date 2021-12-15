<?php


require_once('../funcoes/config.php');

require_once(SRC.'bd/excluirCategorias.php');


//O id esta sendo encaminhado pela index, no link que foi realizado na imagem do excluir
$idCategorias = $_GET['id'];


//Chama a função excluir e encaminha o ID que será removido do BD

if(excluir($idCategorias))
    echo(BD_MSG_EXCLUIR);
else
    echo("
            <script>
                    alert('". BD_MSG_ERRO ."');
                    window.history.back(); 
                </script>
            ");





?>