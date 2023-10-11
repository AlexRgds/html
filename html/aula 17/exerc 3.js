var vetor = new Array(4);
var resultado = 0;

for(var i = 0; i < vetor.length; i++){
    vetor[i] = new Array(prompt("Digite os valores"));
    vetor[i] = parseInt(vetor[i]);

    resultado = (vetor[0]*vetor[2])/(vetor[1] + vetor[3]);
}

    document.write(resultado);