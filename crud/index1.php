<?php


$tipo = (string) null;

$id = (string) 0;

session_start();


$modo = (string) "salvar";

//require_once('../bd/conexaoMysql.php');

//conexaoMysql();

require('dash.html');
require('dash2.html');

require_once('funcoes/config.php');

require_once(SRC.'controles/exibeDadosCategorias.php');

 //Verifica a existencia da variavel de sessão
    //que usamos para trazer os dados para o //editar
if(isset($_SESSION['categorias']))
{
    
    $id = $_SESSION['categorias']['idcategorias'];
    $modo = "Atualizar";
    
    $tipo = $_SESSION['categorias']['tipo'];
   
    
    
    
    
    unset($_SESSION['categorias']);
}








    
?>



          
<html>
    
    <head>
        <link rel="stylesheet"
        type="text/css"
        href="css/style.css">
        <meta charset="utf-8">
        
    
    </head>
    
    
    

    
    
  <body>
      
      <form action="controles/recebeDadosCategorias.php?modo=<?=$modo?>&id=<?=$id?>" name="frmCategorias" method="post">
        <div id="categorias">
            
            
            <div id="tipo">tipo</div>
            
            <input id="input" name="txtTipo" value="<?=$tipo?>">
            
             <button  id="botao"type="submit" value="<?=$modo?>" name="btnEnviar"> SALVAR</button>
            
        
        
        
        
        </div>
      
      </form>
 
      
      <table class="tblCategorias">
            
             <tr id="tblLinhas">
                    <td class=""> Nome </td>
                    
                </tr>
              <?php
                $dadosCategorias = exibirCategorias();
          while($rsCategorias=mysqli_fetch_assoc($dadosCategorias))
        {




            ?>
          
            
            
            <tr id="tblLinhas">
                    <td class="colunas"><?=$rsCategorias['tipo']?></td>
                    <td class="colunas">
                        
                        <a href="controles/editaDadosCategorias.php?id=<?=$rsCategorias['idcategorias']?>">
                            <img src="img/edit.png" alt="Editar" title="Editar" class="editar">
                        </a>
                        <a onclick="return confirm('Tem certeza que deseja ecluir?');" href="controles/excluiDadosCategorias.php?id=<?=$rsCategorias['idcategorias']?>">
                            <img src="img/trash.png" alt="Excluir" title="Excluir" class="excluir">
                        </a>
                        
                        
                           
                    </td>
                </tr>
        <?php
         }

       ?>
        
        
        </table>
    
      
     
    
    
    
    
    
    
    </body>

</html>