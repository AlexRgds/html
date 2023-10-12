function imprimirAtributos(){

    var nome = document.getElementById("nome").value.trim();
    var telefone = document.getElementById("telefone").value.trim();
    var email = document.getElementById("email").value.trim();

    if(nome === ''){
        alert("campo nome em branco!!!");
    }else if(telefone === ''){
        alert("campo telefone em branco!!!");
    }else if(email === ''){
        alert("campo email em branco!!!");
    }else{
        document.write(nome + " " + telefone + " " + email);
    }

    }