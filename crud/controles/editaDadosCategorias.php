
<?php




require_once('../funcoes/config.php');

require_once(SRC.'bd/listarCategorias.php');


 //O id esta sendo encaminhado pela index, no link que foi realizado na imagem do excluir
    $idCategorias = $_GET['id'];

//Chama a função para buscar de id do cliente
$dadosCategorias = buscar($idCategorias);



//converte o resultado do BD em um array 
    //através mysqli_fetch_assoc 

if($rsCategorias=mysqli_fetch_assoc($dadosCategorias))
{
    
    session_start();
    
    
    $_SESSION['categorias']= $rsCategorias;
    
 
    header('location:../index.php');
    
}
else
 echo("     <script>
                    alert('". BD_MSG_ERRO ."');
                    window.history.back(); 
                </script>
            ");






?>







