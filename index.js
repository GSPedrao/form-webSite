function verifica() {
    if (document.forms[1].email.value.length == 0) {
        alert('Por favor, informe o seu EMAIL.');
        document.frmEnvia.email.focus();
        return false;
    }
    return true;
}

function checarEmail() {
    if (document.forms[1].email.value == "" ||
        document.forms[1].email.value.indexOf('@') == -1 ||
        document.forms[1].email.value.indexOf('.') == -1) {
        alert("Por favor, informe um E-MAIL válido!");
        return false;
    }
}

 function Confirmacao(){
        var nome = document.getElementById('nome').value
        var sobren = document.getElementById('sobren').value
        var senha = document.getElementById('senha').value
        var csenha = document.getElementById('csenha').value
        var cpf = document.getElementById('cpf').value
        var ddn = document.getElementById('ddn').value
        var tel = document.getElementById('tel').value
    
        if (!nome || !sobren || !senha || !csenha || !cpf || !ddn || !tel) {
            alert('porfavor preencha os campos obrigatórios');
        } else {
            window.onload = function(){
              window.location.href =  document.getElementById('link').click();
            }
        }
    
    }
 