<?php 

    
    
    require_once('../funcoes/config4.php');

    //Import do arquivo para exluir no BD
    require_once(SRC.'bd/excluirJogos.php');

    //O id esta sendo encaminhado pela index, no link que foi realizado na imagem do excluir
    $idJogos = $_GET['id'];

    //Chama a função excluir e encaminha o ID que será removido do BD
    if(excluir($idJogos))
        echo(BD_MSG_EXCLUIR);
    else
        echo("
                <script>
                    alert('". BD_MSG_ERRO ."');
                    window.history.back(); 
                </script>
            ");




?>