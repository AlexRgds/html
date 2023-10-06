var letra = prompt("Digite a primeira letra do seu estado civil");

switch(letra){

case "s":
document.write("Solteiro(a)");
break

case "S":
document.write("Solteiro(a)");
break

case "c":
document.write("Casado(a)");
break

case "C":
document.write("Casado(a)");
break

case "v":
document.write("Viúvo(a)");
break
case "V":
document.write("Viúvo(a)");
break

case "d":
document.write("Divorciado");
break
case "D":
document.write("Divorciado");
break

default:
document.write("Estado civil não encontrado");
break
}