function imprimirAtributos(){

    var nome = parseInt(document.getElementById("nome").value);
    var telefone = parseInt(document.getElementById("telefone").value);
    var email = parseInt(document.getElementById("email").value);

    var resultado = (nome + telefone + email);

    document.write(resultado);
    }