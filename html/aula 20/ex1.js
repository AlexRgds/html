function imprimirAtributos(){

    var nome = document.getElementById("nome").value.trim();
    var cpf = document.getElementById("cpf").value.trim();
    var nascimento = document.getElementById("nascimento").value.trim();
    var exampleRadios = document.querySelector('input[name="exampleRadios"]:checked');
    var telefone = document.getElementById("telefone").value.trim();
    var email = document.getElementById("email").value.trim();
    var status1 = document.getElementById("status1").value.trim();
    var status2 = document.getElementById("status2").value.trim();

    var nome2 = document.getElementById("nome2").value.trim();
    var cpf2 = document.getElementById("cpf2").value.trim();
    var nascimento2 = document.getElementById("nascimento2").value.trim();
    var exampleRadios2 = document.querySelector('input[name="exampleRadios2"]:checked');
    var status3 = document.getElementById("status3").value.trim();
    var status4 = document.getElementById("status4").value.trim();
 
    if(nome === ''){
        alert("campo nome em branco!!!");
    }else if(cpf === ''){
        alert("campo CPF em branco!!!");
    }else if(nascimento === ''){
        alert("campo nascimento em branco!!!");
    }else if(!exampleRadios){
        alert("Selecione ao menos um sexo")
    }else if(telefone === ''){
        alert("campo telefone em branco!!!")
    }else if(email === ''){
        alert("campo email em branco!!!")
    }else if(status1 === '' || status1 === 'Selecione'){
        alert("campo estado civil em branco!!!")
    }else if(status2 === '' || status2 === 'Selecione'){
        alert("campo escolaridade em branco!!!")
    }else if(nome2 === ''){
        alert("campo nome em branco!!!");
    }else if(cpf2 === ''){
        alert("campo CPF em branco!!!");
    }else if(nascimento2 === ''){
        alert("campo nascimento em branco!!!");
    }else if(!exampleRadios2){
        alert("Selecione ao menos um sexo")
    }else if(status3 === '' || status3 === 'Selecione'){
        alert("campo estado civil em branco!!!")
    }else if(status4 === '' || status4 === 'Selecione'){
        alert("campo escolaridade em branco!!!")
    }else{
        document.write(nome + " " + cpf + " " + nascimento + " " + exampleRadios.value + " " + telefone + " " + email + " " + status1 + " " + status2 + " " + nome2 + " " + cpf2 + " " + nascimento2 + " " + exampleRadios2.value + " " + status3 + " " + status4);
    }
 }

 function limpar_campos(){
    nome = '';
    cpf = '';
    nascimento = '';
    exampleRadios = '';
    telefone = '';
    email = '';
    status1 = '';
    status2 = '';

    nome2 = '';
    cpf2 = '';
    nascimento2 = '';
    exampleRadios2 = '';
    status3 = '';
    status4 = '';

}
