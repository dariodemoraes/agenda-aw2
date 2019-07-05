function equipararSenhas() {
    if (document.getElementById('senhaAluno').value != document.getElementById('senhaAlunoConfirmacao').value) {
        document.getElementById('senhaAluno').setCustomValidity('As senhas devem bater.');
    } else {
        // input is valid -- reset the error message
        document.getElementById('senhaAluno').setCustomValidity('');

    }

    if (document.getElementById('senhaMae').value != document.getElementById('senhaMaeConfirmacao').value) {
        document.getElementById('senhaMae').setCustomValidity('As senhas devem bater.');
    } else {
        // input is valid -- reset the error message
        document.getElementById('senhaMae').setCustomValidity('');
    }
}

function Evento(nome, data){
    
}
