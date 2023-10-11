var vetor = new Array(10);

for(var i = 0; i < vetor.length; i++){
    vetor[i] = new Array(prompt("Digite os valores"));
    vetor[i] = parseInt(vetor[i]);

    if(vetor[i]%2 == 0){
        document.write("Par: " + vetor[i] + "<br>");
    }else{
        document.write("Ímpar: " + vetor[i] + "<br>");
    }
    
}

