<?php

session_start();

$nome = (string) null;
$email = (string) null;
$celular = (string) null;
$id = (int) 0;

$modo = (string) "Salvar";

require('dash.html');
require('dash2.html');

require_once('funcoes/config3.php');


require_once(SRC.'controles/exibeDadosContatos.php');


if(isset($_SESSION['contatos']))
{
   $id = $_SESSION['contatos']['idcontatos'];
   $nome = $_SESSION['contatos']['nome'];
   $email = $_SESSION['contatos']['email'];
   $celular = $_SESSION['contatos']['celular'];
  $modo = "Atualizar";
    
    unset($_SESSION['contatos']);
      

}

?>
  

 <!DOCTYPE>
<html lang="pt-br">
   
   
    
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet"
        type="text/css"
        href="css/style3.css">
        <meta charset="utf-8">
        
    
    </head>
    
    
    

    
    
  <body>
      
<!--
      <form action="controles/recebeDadosContatos.php?modo=<?=$modo?>&id=<?=$id?>" name="frmCadastro" method="post">
      
        <div id="cadastro">
            
        <div class="cadastroUsuario">
            
        <label class="labelRegistro">NOME</label>
        <input type="text"  maxlength="100"  name="txtNome" class="inputCadastro" value="<?=$nome?>">
            
        </div> 
            
       <div class="cadastroUsuario">
            
        <label class="labelRegistro">EMAIL</label>
        <input type="email" maxlength="30" name="txtEmail" class="inputCadastro" value="<?=$email?>">
            
        </div>  
        
        <div class="cadastroUsuario">
            
        <label class="labelRegistro">CELULAR</label>
        <input type="number"  name="txtCelular"  maxlength="20" class="inputCadastro" value="<?=$celular?>">
                              
        </div>
            
     <input id="botao"type="submit" value="<?=$modo?>" name="btnEnviar">
        
        
        
        </div>
          
    </form>
-->
      
      
 
      
    
            
      <table class="tblRegistro" >
          <tr>
              <td class="colunasRegistro">
              NOME
              </td>
              <td class="colunasRegistro">
             EMAIL
              </td>
             <td class="colunasRegistro">
              CELULAR
              </td>
              <td class="clnRegistro"></td>
          
          
          </tr>
          
          <?php
          $dadosContatos = exibirContatos();
        while ($rsContatos=mysqli_fetch_assoc($dadosContatos))
        {
    
    ?>
           <tr>
              <td class="colunasResultado"><?=$rsContatos['nome']?></td>
              <td class="colunasResultado"><?=$rsContatos['email']?></td>
               <td class="colunasResultado"><?=$rsContatos['celular']?></td>
             
               <td class="clnRegistro">
               
<!--
                <a href="controles/editaDadosContatos.php?&id=<?=$rsContatos['idcontatos']?>">
                            <img src="img/edit.png" alt="Editar" title="Editar" class="editar">
                        </a>
-->
                        <a onclick="return confirm('Tem certeza que deseja excluir?');"
                           href="controles/excluiDadosContatos.php?id=<?=$rsContatos['idcontatos']?>">
                            
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