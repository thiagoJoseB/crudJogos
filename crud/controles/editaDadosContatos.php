<?php

require_once('../funcoes/config3.php');


 require_once(SRC.'bd/listarContatos.php');




$idContatos = $_GET['id'];

$dadosContatos = buscar($idContatos);



if($rsContatos=mysqli_fetch_assoc($dadosContatos))
{
      
 session_start();
    
    
    
    $_SESSION['contatos'] = $rsContatos;
//    var_dump($rsContatos);
//    die;
    
    
    header('location:../index3.php');
}
    else
        echo("
                <script>
                    alert('". BD_MSG_ERRO ."');
                    window.history.back(); 
                </script>
            ");

 



?>