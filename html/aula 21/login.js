function telalogin(){
    var nome = document.getElementById("nome").value;
    var senha = document.getElementById("senha").value;

    if(nome === "senac" && senha === "123"){
        alert("bem vindo");
        location.replace('painel.html');
        //window.open('painel.html','_blank');
    }else{
        alert("verifique email e senha");
    }

}