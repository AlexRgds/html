var vlv = prompt("Digite O valor de venda");
vlv = parseFloat(vlv);

var n2 = prompt("Digite a condição de pagamento: 1 - a vista, 2 - a prazo(30) ,3 - a prazo(60) 4 - a prazo(90), 5 -cartão débito ou 6 - cartão crédito");
n2 = parseInt(n2);

switch(n2){

    case 1:
        document.write(vlv * 0.90);
        break;

    case 2:
        document.write(vlv * 0.95);
        break;

    case 3:
        document.write(vlv);
        break;

    case 4:
        document.write(vlv * 1.05);
         break;

    case 5:
        document.write(vlv * 0.92);
        break;

    case 6:
        document.write(vlv * 0.93);
        break;

    default:
        document.write("Código inexistente");
}