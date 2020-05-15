function mascCPF(texto){
    if (event.keycode !== 8){
        if (texto.length === 3 || texto.length === 7){
           document.getElementById("cpf").value = texto + ".";
        }else if(texto.length === 11){
            document.getElementById("cpf").value = texto + "-";
        }
    }
}
function mascTEL(texto){
    if(event.keycode !== 8){
        if(texto.length === 2){
            document.getElementById("tel").value = "(" + texto + ")";
        }
        if(texto.length === 9){
            document.getElementById("tel").value = texto + "-";
        }
    }
}
function inativar(id){
    var resposta = confirm("Deseja Inativar o Usuário?");
    if(resposta === true){
        alert('O Usuário agora está INATIVO!');
        window.location.href = "../controllers/inativaUsuarios.php?id="+id;
    }
}
function ativar(id){
    var resposta = confirm("Deseja Ativar o Usuário?");
    if(resposta === true){
        alert('O Usuário agora está ATIVO!');
        window.location.href = "../controllers/ativaUsuarios.php?id="+id;
    }
}