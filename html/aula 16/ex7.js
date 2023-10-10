var aluno = prompt("Digite a quantidade de alunos na sala");
aluno = parseInt(aluno);

for(i = 1; i <= aluno; i++ ){

    var nota1 = prompt("Digite a 1° nota do aluno " + i);
    nota1 = parseFloat(nota1);

    var nota2 = prompt("Digite a 2° nota do aluno " + i);
    nota2 = parseFloat(nota2);

    var media = (nota1+nota2)/2;

    if(media >= 5){
        alert("Aluno " + i + " foi aprovado" + "\n" + "Media " + media + " maior que 5");
    } else{
        alert("Aluno " + i + " foi reprovado" + "\n" + "Media " + media + " menor que 5");
    }
}