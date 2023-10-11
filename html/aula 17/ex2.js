var vetor = new Array(10);

for(var i = 0; i < vetor.length; i++){
    vetor[i] = new Array(prompt("Digite os valores"));
    vetor[i] = parseInt(vetor[i]);

    document.write(vetor[i] + "<br>");
}