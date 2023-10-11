var vetor = new Array(10);
var resultado = 0;

for(var i = 0; i < vetor.length; i++){
    vetor[i] = new Array(prompt("Digite os valores"));
    vetor[i] = parseInt(vetor[i]);

    resultado += vetor[i];

    //document.write(vetor[i] + "<br>");
}

    document.write(resultado);