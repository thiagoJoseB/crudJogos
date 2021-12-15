"use strict"


const troca = document.getElementById("imagemLogo");
const troca2 = document.getElementById("fotoDescricaoImg");


function trocaImagem(evento){
    troca.src="imgSite/one12345.jpg"
}

function trocaImagem2(evento){
    troca.src="imgSite/logo3.jpg"
}




function imagemEmpresa (evento){
    troca2.src="imgSite/xboxLogo.jpg"
    
}

function imagemEmpresa2(evento){
    troca2.src="imgSite/logoB4.jpg"
    
}






document.getElementById("imagemLogo").addEventListener("mouseover" ,trocaImagem)
document.getElementById("imagemLogo").addEventListener("mouseout" ,trocaImagem2)



document.getElementById("fotoDescricaoImg").addEventListener("mouseover" ,imagemEmpresa)

document.getElementById("fotoDescricaoImg").addEventListener("mouseout" ,imagemEmpresa2)
    