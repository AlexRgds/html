<?php
$e="Erro Fodeu!!!";
$resultado = "";
try{

if(isset($_POST['enviar'])){
$nome=$_POST['nome'];
$sobrenome=$_POST['sobrenome'];
$n1=$_POST['n1'];
$n2=$_POST['n2'];

if(empty(trim($nome))){
    echo "Nome em branco";
}else if(empty(trim($sobrenome))){
    echo "Sobrenome em branco";
}else if(empty(trim($n1))){
    echo "n1 em branco";
}else if(empty(trim($n2))){
    echo "n2 em branco";
}else{
    
    
    $resultado = ($n1+$n2);
    echo $nome . " " . $sobrenome . " " . $resultado;
}

}else{
    echo "Clicar no botão";
}
}catch(e){
    echo $e;
}


