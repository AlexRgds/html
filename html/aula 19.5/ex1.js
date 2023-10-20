function imprimirAtributos(){

    var nome = document.getElementById("nome").value.trim();
    var email = document.getElementById("email").value.trim();
    var idade = document.getElementById("idade").value.trim();
    var data = document.getElementById("data").value.trim();
    var exampleRadios = document.querySelector('input[name="exampleRadios"]:checked');
    var checks = document.querySelectorAll('.check:checked');
    var recebe = [];
 

    if(nome === ''){
        alert("campo nome em branco!!!");
    }else if(email === ''){
        alert("campo email em branco!!!");
    }else if(idade === ''){
        alert("campo idade em branco!!!");
    }else if(data === ''){
        alert("campo data em branco!!!");
    }else if(!exampleRadios){
        alert("Selecione ao menos uma das opções")
    }else if(checks.length < 1 || checks.length > 2){
        alert("Selecione ao menos uma opção")
    }else{

        for(var i= 0; i<checks.length;i++){
            recebe.push(checks[i].value);
        }
        document.write(nome + " " + email + " " + idade + " " + data + " " + exampleRadios.value + " " + recebe.join(' - '));
    }
 }
