<?php


require_once('../funcoes/config3.php');


require_once(SRC.'bd/excluirContatos.php');


$idContatos = $_GET['id'];


if(excluir($idContatos))
    
    echo(BD_MSG_EXCLUIR);
else
   echo("
                <script>
                    alert('". BD_MSG_ERRO ."');
                    window.history.back(); 
                </script>
    ");




?>