var n1 = prompt("Digite o 1° número");
n1 = parseInt(n1);

var n2 = prompt("Digite o 2° número");
n2 = parseInt(n2);

if(n1 > n2){
    document.write("A diferença do " + n2 + " para o " + n1 + " é de " + (n1-n2))
}else if(n2 > n1){
    document.write("A diferença do " + n1 + " para o " + n2 + " é de " + (n2-n1))
}else{
    document.write("A diferença do " + n1 + " para o " + n2 + " é de " + (n1-n2))    
}