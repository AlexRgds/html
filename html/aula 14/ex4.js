var n1 = prompt("Digite o 1° valor");
n1 = parseInt(n1);

if(n1 > 0){
    document.write("O número " + n1 + " é POSITIVO");
}else if(n1 < 0){
    document.write("O número " + n1 + " é NEGATIVO");
}else{
    document.write("O número " + n1 + " é IGUAL A ZERO");
}