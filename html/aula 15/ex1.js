var n1 = prompt("Digite 1, 2 ou 3");
n1 = parseInt(n1);


switch(n1){

    case 1:
        document.write("Caso 1");
        break;

    case 2:
        document.write("Caso 2");
        break;

    case 3:
        document.write("Caso 3");
        break;

    default:
        document.write("Código inexistente");
}