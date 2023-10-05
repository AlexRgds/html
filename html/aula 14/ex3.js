var n1 = prompt("Digite o 1° valor");
n1 = parseFloat(n1);

var n2 = prompt("Digite o 2° valor");
n2 = parseFloat(n2);

try{

if(n1 > n2){
document.write("O número " + n1 + " é maior");

} 
else if(n1 < n2){
document.write("O número " + n2 + " é maior");

}
else{
document.write("O número " + n2 + " é igual ao " + n2);

}

}catch(e){
    document.write(e);
}finally{
    //document.write("Entre em contato com o suporte");
}

