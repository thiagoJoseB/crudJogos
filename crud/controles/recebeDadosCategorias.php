<?php

require_once('../funcoes/config.php');

require_once(SRC.'bd/inserirCategorias.php');
require_once(SRC.'bd/atualizarCategorias.php');


/// declaracao de variavel 
$tipo = (string) null;



//Validação para saber se o id do registro está chegando 
    // pela URL (modo para "Atualizar" um registro)
if(isset($_GET['id']))
    $id = (int) $_GET['id'];


else 
    $id = (int) 0;


//$_SERVER['REQUEST_METHOD'] - Verifica qual o tipo de requisição foi encaminhada pelo form (GET / POST)
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
   //Recebe os dados encaminhado pelo Formulário através do metdo POST
    
    $tipo = $_POST['txtTipo'];
    
    //Validação de campos obrigatórios
    
    if($tipo == null)
        echo("<script> 
                alert('". ERRO_CAIXA_VAZIA ."'); 
                window.history.back();    
            </script>"
    );
   //Validação de qtde de caracteres
    //strlen() retorna a qtde de caracteres de uma varaivel
    
    elseif(strlen($tipo)>100)
        echo("<script> 
                alert('". ERRO_MAXLENGHT ."'); 
                window.history.back();    
            </script>");
    
    else
{
        //Local para enviar os dados para o Banco de Dados
        /// criacao de um array 

         $categorias = array (
         
         "id" => $id,    
         "tipo" => $tipo


);
        
     //validação para saber se é para inserir um novo registro
        // ou se é para atualizar um registro existente no BD
        
        if(strtoupper($_GET['modo']) == 'SALVAR')
        {
            //Chama a função inserir do arquivo inserirCliente.php, e encaminha o array com os dados do cliente 
           
            
            if(inserir($categorias))
            echo("
                    <script>
                        alert('".BD_MSG_INSERIR ."');
                        window.location.href = '../index1.php';
                    </script>
                " );
            else
                echo("
                    <script>
                        alert('". BD_MSG_ERRO ."');
                        window.history.back(); 
                    </script>
                ");
           
            
            
        }elseif(strtoupper($_GET['modo']) ==
        'ATUALIZAR')
        {
            if(editar($categorias))
             echo("
                    <script>
                        alert('". BD_MSG_INSERIR ."');
                        window.location.href = '../index1.php';
                    </script>
                ");
            else
                echo("
                    <script>
                        alert('".BD_MSG_ERRO."');
                        window.history.back(); 
                    </script>
                ");
        }
        
        
        
    }
    
    

    
}












?>