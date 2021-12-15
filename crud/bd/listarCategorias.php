<?php


require_once(SRC.'bd/conexaoMysql.php');



function listar (){
    
    $sql = "select * from tblcategorias order by idcategorias desc";
    
    $conexao = conexaoMysql();
    
   
    
//    $select = mysqli_query($conexao , $sql);
    if ( $select = mysqli_query($conexao , $sql)){
        return $select;
    }
    else{
       return false;
    }
//   
    
    
}

function buscar ($idcategorias){
    
    $sql= "select * from tblcategorias 
    where idcategorias = " .$idcategorias;
   
    
    $conexao = conexaoMysql();
    
    $select = mysqli_query($conexao, $sql);
    
    return $select;
    
}






?>