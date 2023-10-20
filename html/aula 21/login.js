function telalogin(){
    var email = document.getElementById("email").value.trim();
    var senha = document.getElementById("senha").value.trim();

    if(email === "senac" && senha === "123"){
        alert("bem vindo");
        //location.replace('painel.html');
        window.open('painel.html','_blank');
    }else{
        alert("verifique email e senha");
    }

}