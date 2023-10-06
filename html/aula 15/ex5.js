var nota1 = prompt("Digite a nota 1a");
nota1 - parseFloat(nota1);

var nota2 = prompt("Digite a nota 2a");
nota2 - parseFloat(nota1);

var nota3 = prompt("Digite a nota 3a");
nota3 - parseFloat(nota1);

while(nota1 > 3){
    alert("nota 1a maior que 3 pontos, por favor digite novamente");
    var nota1 = prompt("Digite a nota 1a");
}

while(nota2 > 3){
    alert("nota 2a maior que 3 pontos, por favor digite novamente");
    var nota2 = prompt("Digite a nota 2a");
}

while(nota3 > 4){
    alert("nota 3a maior que 4 pontos, por favor digite novamente");
    var nota3 = prompt("Digite a nota 3a");
}


if( (nota1+nota2+nota3)/3 >= 5){
    document.write("Aprovado")
}else{
    document.write("Reprovado")
}