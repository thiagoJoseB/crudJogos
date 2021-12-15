<?php



require_once('../funcoes/config3.php');

require_once(SRC.'bd/inserirContatos.php');
require_once(SRC.'bd/atualizarContatos.php');


$nome = (string) null;
$email = (string) null;
$celular = (string) null;


if(isset($_GET['id']))
    $id = (int) $_GET['id'];
else
    $id = (int) 0;


if($_SERVER['REQUEST_METHOD'] == 'POST')
{ 

    $nome = $_POST['txtNome'];
    $email = $_POST['txtEmail'];
    $celular = $_POST['txtCelular'];

    ////validacao

if($nome == null || $email == null || $celular == null)
    echo("<script> 
                alert('". ERRO_CAIXA_VAZIA ."'); 
                window.history.back();    
            </script>");
    
     elseif(strlen($nome)>100 || strlen($email)>30 || strlen($celular)>20)
         echo("<script> 
                alert('". ERRO_MAXLENGHT ."'); 
                window.history.back();    
            </script>");
    else
    {

  $contatos = array(
  
     "nome" => $nome,
      "email" => $email,
      "celular" => $celular,
      "id" => $id
);
        
 //validação para saber se é para inserir um novo registro
        // ou se é para atualizar um registro existente no BD
   if (strtoupper($_GET['modo']) == 'SALVAR')
        {  
        
   if(inserir($contatos)) 
     echo("
                    <script>
                        alert('". BD_MSG_INSERIR ."');
                        window.location.href = '../ecommerce.php';
                    </script>
                ");
         else
                echo("
                    <script>
                        alert('". BD_MSG_ERRO ."');
                        window.history.back(); 
                    </script>
                ");
    }elseif(strtoupper($_GET['modo']) == 'ATUALIZAR')
    {  
        if(editar($contatos))
            echo("
                    <script>
                        alert('". BD_MSG_INSERIR ."');
                        window.location.href = '../index3.php';
                    </script>
                ");
            else
                echo("
                    <script>
                        alert('". BD_MSG_ERRO ."');
                        window.history.back(); 
                    </script>
                ");
        }
    
        
    }
       

   

}


?>