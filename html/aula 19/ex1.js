function imprimirAtributos(){

    var nome = document.getElementById("nome").value.trim();
    var cpf = document.getElementById("cpf").value.trim();
    var email = document.getElementById("email").value.trim();
    var endereco = document.getElementById("endereco").value.trim();
    var senha = document.getElementById("senha").value.trim();
    var nivel = document.getElementById("nivel").value.trim();
    var status = document.getElementById("status").value.trim();

    if(nome === ''){
        alert("campo nome em branco!!!");
    }else if(cpf === ''){
        alert("campo CPF em branco!!!");
    }else if(endereco === ''){
        alert("campo endereço em branco!!!");
    }else if(nivel === ''){
        alert("campo nível em branco!!!");
    }else if(email === ''){
        alert("campo email em branco!!!");
    }else if(senha === ''){
        alert("campo senha em branco!!!");
    }else if(status === ''){
        alert("campo status em branco!!!");
    }else{
        document.write(nome + " " + cpf + " " + email + " " + endereco + " " + senha + " " + nivel + " " + status);
    }

    }

function limpar_campos(){
    nome = '';
    cpf = '';
    email = '';
    endereco = '';
    senha = '';
}