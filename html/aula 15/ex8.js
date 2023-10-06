var n1 = prompt("Digite um número");
n1 = parseInt(n1);

if(n1%8 == 0){
    document.write("O número " + n1 + " é divisível por 8");
}else{
    document.write("O número " + n1 + " não é divisível por 8");
}