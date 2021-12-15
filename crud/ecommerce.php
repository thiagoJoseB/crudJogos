<?php

session_start();

$nome = (string) null;
$email = (string) null;
$celular = (string) null;
$id = (int) 0;

$modo = (string) "Salvar";

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
   <html lang="pt-BR">
    <head>
        <link rel="stylesheet"
        type="text/css"
        href="css/styleSite.css">
        <meta charset="utf-8">
        <script src="script.js" defer></script>
        
    
    
    </head>
      <body>
          
          <!-- secao cabecalho --->
        <div id="cabecalho">     
          <div id="conteudo">
              
              <!-- secao logo --->
             <div id="logo">
                 
                 <img id="imagemLogo" src="imgSite/logo3.jpg">
      
              </div>
              
              <!-- secao menu --->
              <div id="menu">
              <ul id="listMenu">
                  
             <li> <a  class="linkA" href="#tituloEmpresa"> Empresa </a></li>
                  
             <li> <a class="linkA" href="#contatoLojaTitulo1">Lojas </a></li>
                  
             <li> <a  class="linkA"href="#tituloPromocoes">Promoções </a></li>
                  
            <li> <a class="linkA" href="#tituloDestaqueLoja">Destaques </a></li>
                  
            <li> <a  class="linkA"href="#contatoLojaTitulo2">Contatos </a></li>     
             
                  
                 
                  
              </ul>
              
         
              
              </div>
              
              <!-- secao redes--->
              <div id="secaoRedes"> 
                  
                <div class="redesSociais">
                  
                  <img class="imagemRedes" src="imgSite/1024px-Instagram_icon.png">
                    
                </div>
                  
                <div class="redesSociais">
                    
                  <img class="imagemRedes" src="imgSite/youtube.png">
                    
                </div> 
                  
                <div class="redesSociais">
                    
                   <img class="imagemRedes" src="imgSite/124021.png">
                    
                </div>
              
              </div>
              
          </div>
          
        </div>
          <div id="img">
              
              
              
             <div class="content">
              
        <div class="slides">
          
           <input   class="input"  type="radio" name="slide" id="slide1" checked>
           
          <input   class="input" type="radio" name="slide" id="slide2">
            
           <input  class="input"  type="radio" name="slide" id="slide3">
            
         <input  class="input"  type="radio" name="slide" id="slide4">
            
         <input  class="input"  type="radio" name="slide" id="slide5">
            
            
        <div class="slide s1" >
        
            <img src="imgSite/FUT-19-Key-Art.jpg">
            
        </div>
            
        <div class="slide">
           <img src="imgSite/imagem.jpg"> 
        </div>
            
        <div class="slide">
          <img src="imgSite/aranha%20(2).jpg">  
        </div>
            
        <div class="slide">
           <img src="imgSite/f12.jpg"> 
        </div>
            
        <div class="slide">
          <img src="imgSite/GOW-5-1080-2.jpg">  
        </div>
            
        </div>
        
        <div class="navegacao">
        
            <label  class="bar"  for="slide1"></label>
            
            <label  class="bar" for="slide2"></label>
            
            <label class="bar"  for="slide3"></label>
            
            <label  class="bar" for="slide4"></label>
            
           <label  class="bar" for="slide5"></label>
        
        </div>
        
          
    </div>

             
              
              
              
              
            
          
          
          </div>
          <!-- secao menu e input--->
          <div id="menu2">
            <div id="menu3">
              <img id="imgMenu" src="imgSite/menu1.jpg"> 
             <ul id="lista">
               <li class="listaConf"> MENU <a href=""></a> </li>
               
               <li class="listaConf"> MENU <a href=""></a></li>
              
               <li class="listaConf"> MENU<a href=""></a> </li>
               
               <li class="listaConf"> MENU <a href=""></a></li>
               
          </ul>
                
            </div>
              <div id="pesquisar"> 
                    
                    <input name="" type="" >
                    <button id="btnPesquisar" name="" type="" > 
                    Pesquisar
                    </button> 
                </div>
          
          </div>
          <div id="produtos">
              
              <!-- cardProdutos-->
              
              <div class="cardProdutos">
                 <div class="imagem">
                  
                  <img class="cardVendas" src="imgSite/aranhaps5.jpeg">
                  
                  </div>
                  
                   <h1 class="nomeProduto">Spider-Man</h1>
                    <p class="descricao"> Spider-Man é um jogo eletrônico de ação-aventura e publicado pela Sony Interactive Entertainment. </p>
                    
                    <button class="btnSaiba"> Saiba Mais</button>
                    <h2 class="preco"> R$ 0,00</h2>
                  
                  </div>
                  
                   <!-- cardProdutos-->
                  
                  <div class="cardProdutos">
                 <div class="imagem">
                  <img class="cardVendas" src="imgSite/fifa22play.jpg">    
                      
                </div>
                  
                   <h1 class="nomeProduto">Fifa 22</h1>
                    <p class="descricao"> FIFA 22 é um jogo eletrônico de simulação de futebol desenvolvido e publicado pela Electronic Arts. </p>
                    
                    <button class="btnSaiba"> Saiba Mais</button>
                    <h2 class="preco"> R$ 0,00</h2>
                  
                  </div>
                  
                  
                  
                  <!-- cardProdutos-->
                  
                  <div class="cardProdutos">
                 <div class="imagem">
                      <img class="cardVendas" src="imgSite/theLastCard1.jpg">
                      
                </div>
                  
                   <h1 class="nomeProduto">The Last</h1>
                    <p class="descricao"> The Last of Us Part II é um jogo eletrônico de ação-aventura e publicado pela Sony Interactive Entertainment </p>
                    
                    <button class="btnSaiba"> Saiba Mais</button>
                    <h2 class="preco"> R$ 0,00</h2>
                  
                  </div>
                  
                  
                  <!-- cardProdutos-->
                  
                  <div class="cardProdutos">
                 <div class="imagem">
                 
                     <img class="cardVendas" src="imgSite/fifa19ps4.jpg">
                      
                 </div>
                  
                   <h1 class="nomeProduto">Fifa 19</h1>
                    <p class="descricao"> FIFA 19 é um jogo eletrônico de futebol baseado na realidade e desenvolvido publicado pela EA Sports </p>
                    
                    <button class="btnSaiba"> Saiba Mais</button>
                    <h2 class="preco"> R$ 0,00</h2>
                  
                  </div>
                  
                  <!-- cardProdutos-->
                  
                  <div class="cardProdutos">
                 <div class="imagem">
                      
                  <img class="cardVendas" src="imgSite/f121ps4.jpg">
                     
                  </div>
                  
                   <h1 class="nomeProduto">F1 2021</h1>
                    <p class="descricao"> F1 2021 é o videogame oficial dos campeonatos de Fórmula 1 e publicado pela EA Sports </p>
                    
                    <button class="btnSaiba"> Saiba Mais</button>
                    <h2 class="preco"> R$ 0,00</h2>
                  
                  </div>
                  
                  <!-- cardProdutos-->
                  
                  <div class="cardProdutos">
                 <div class="imagem">
                
                     <img class="cardVendas" src="imgSite/assaXbox.jpg">
                      
                </div>
                  
                   <h1 class="nomeProduto">Assassin's Creed Valhalla</h1>
                    <p class="descricao"> Assassin's Creed Valhalla é um jogo eletrônico de RPG de ação desenvolvido pela Ubisoft Montreal e publicado pela Ubisoft. </p>
                    
                    <button class="btnSaiba"> Saiba Mais</button>
                    <h2 class="preco"> R$ 0,00</h2>
                  
                  </div>
              
              </div>
               
            <!-- secao sobre a empresa -->
          
          <div id="secaoEmpresa">
              
              <div id="tituloEmpresa">
              
              Empresa  
                  
              </div>
              
              <div id="descricao"> 
              e-commerce de jogos para video game , 
             Disponível para PS4™, PS5™ e Xbox One.
              Com duas sedes localizadas em Osasco-SP (Ao lado do quartel 2º Batalhão de Polícia do Exército) e em Barueri-SP (Ao lado do quartel Arsenal De Guerra)
              
              
              </div>
              
              <div id="fotoDescricao"> 
              <img id="fotoDescricaoImg" src="imgSite/logoB4.jpg">
              </div>
          
          
          
          
          </div>
          
          <!-- secao nossas promoçoes -->
          
         <div id="promocoes">
             
          <div id="tituloPromocoes">
             
              Nossas Promoções
             
             
          </div>
             <!-- card nossas promoçoes -->
         <div class="CardPromocoes">
                 <div class="imgPromocoes">
             
                <img class="imgNossasPromocoes" src="imgSite/godOf.jpg">
      
                 </div>
                  
                   <h1 class="nomePromocoes">God of War: Ragnarök</h1>
                    <p class="descricaoProduto">God of War: Ragnarök é um futuro jogo eletrônico de ação-aventura desenvolvido pela Santa Monica Studio  </p>
                    
                    <button class="btnPromocoes"> Saiba Mais</button>
                    <h5 class="precoAntigo">
                      <strong class="grifa"> <del> R$ 10,00</del></strong> 
                    </h5>
                   
                    <h5 class="precoPromocoes"> R$ 0,00</h5>
                  
                  </div>
             
             
             
              <!-- card nossas promoçoes -->
         <div class="CardPromocoes">
                 <div class="imgPromocoes">
             
               <img class="imgNossasPromocoes" src="imgSite/pes21Card.jpg">
      
             
                 </div>
                  
                   <h1 class="nomePromocoes">Pes 2021</h1>
                    <p class="descricaoProduto">Pro Evolution Soccer 2021 é um jogo eletrônico de futebol desenvolvido pela PES Production e publicado pela Konami. </p>
                    
                    <button class="btnPromocoes"> Saiba Mais</button>
                    <h5 class="precoAntigo">
                      <strong class="grifa"><del> R$ 10,00</del></strong> 
                    </h5>
                   
                    <h5 class="precoPromocoes"> R$ 0,00</h5>
                  
                  </div>
             
             
              <!-- card nossas promoçoes -->
         <div class="CardPromocoes">
                 <div class="imgPromocoes">
                  <img class="imgNossasPromocoes" src="imgSite/battlefield.jpg">

                </div>
                  
                   <h1 class="nomePromocoes">Battlefield 2042 
                   </h1>
                    <p class="descricaoProduto">Battlefield 2042 é um videogame de tiro em primeira pessoa desenvolvido pela DICE e publicado pela Electronic Arts.  </p>
                    
                    <button class="btnPromocoes"> Saiba Mais</button>
                    <h5 class="precoAntigo">
                      <strong class="grifa"> <del>R$ 10,00</del></strong> 
                    </h5>
                   
                    <h5 class="precoPromocoes"> R$ 0,00</h5>
                  
                  </div>
              
                  
        </div>
          
          <!-- secao destaques loja -->
          
          <div id="destaqueLoja">  
              
               <!-- titulo  destaques loja -->
              <div id="tituloDestaqueLoja">
             Destaques Da Loja
              </div>
              
              
              <!-- imagem secao destaques  -->
              <div class="imgDestaqueLoja">
                  <img class="imagemDestaque" src="imgSite/godOf.jpg">
              
              </div>
              
               <!-- imagem secao destaques  -->
               <div class="imgDestaqueLoja">
                  <img class="imagemDestaque" src="imgSite/fifa19a.jpg">
              
              </div>
              
               <!-- imagem secao destaques  -->
               <div class="imgDestaqueLoja">
                  <img class="imagemDestaque" src="imgSite/aranhaCard.webp">
              
              </div>
              
               <!-- imagem secao destaques  -->
               <div class="imgDestaqueLoja">
                  <img class="imagemDestaque" src="imgSite/fifa22capa1.jpg">
              
              </div>
          
          
          </div>
          
          <!-- secao nossas lojas e contatos  -->
          
          <div id="contatoLoja">
              <div id="nossasLoja">
                <div id="contatoLojaTitulo1">
                   Nossas Lojas
                  </div>
                  
                <div class="conteudoContatoLoja">
                  <h1 class="lojaTitulo"> Unidade Osasco</h1>
                    
                  <div class="lojaIg">
                      
                 <img class="lojaIgImagem" src="imgSite/google-maps.jpg">
                      
                 </div>
                    
                  <div class="textoLoja">
                     Rua: Raul Lessa, Osasco - SP, Ao lado do quartel 2º Batalhão de Polícia do Exército
                    
                  </div>
                    
                  <h1 class="lojaTitulo"> Unidade Barueri</h1>
                    
                  <div class="lojaIg">
                      
                    <img class="lojaIgImagem" src="imgSite/google-maps.jpg">
                      
                  </div>
                  <div class="textoLoja">
                 Rua: Anhanguera - Vila Sao Francisco, Barueri - SP , Ao lado do quartel Arsenal De Guerra
                      
                </div>
                    
                    
                </div>
                
                  
              </div>
              
              
              <div id="contatoLoja1">
                  <div id="contatoLojaTitulo2">
                Entre em Contato
                  </div>
                   
                  
                <div id="cadastroLoja">
                <div class="nomeEmailCelular">
                 Nome   
                </div> 
                    
                <div class="nomeEmailCelular">
                E-Mail   
                </div> 
                <div class="nomeEmailCelular">
                Celular    
                </div>     
                    
                  
                </div>  
                  
                <form action="controles/recebeDadosContatos.php?modo=<?=$modo?>&id=<?=$id?>" name="frmCadastro" method="post">
                
                      
                <div id="inputContatosSecao">
                
                <input  class="inputContatos"type="text" name="txtNome" value="<?=$nome?>"  maxlength="100" > 
                      
                   <input class="inputContatos" type="email" name="txtEmail" value="<?=$email?>" maxlength="30" >
                      
                   <input  class="inputContatos"type="number"  value="<?=$celular?>"  maxlength="20" name="txtCelular">
                </div>
                      
                
                      
              <input type="submit" name="btnEnviar" value="<?=$modo?>" id="botaoContatos" >
                 
                
              
                  </form>        
              
              </div>
          
          
          </div>
          
        <div id="rodape">
          
          
        </div>
          
          
          
          
              
          
          
          
          
          
         
          
          
          
          
          
          
          
       
          
          
          
          
          
          
     </body>
</html>