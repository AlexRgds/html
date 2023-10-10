var i = parseInt(i);

var resultado = 0.0;

for(var i = 0; i<=7; i++){

    var numero = prompt("Digite um número");
    numero = parseFloat(numero);

    if(numero > resultado){
       resultado = numero;
    }
}
document.write("O maior número é: " + resultado);