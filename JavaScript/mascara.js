function validarNome(event) {
    let valor = event.target.value.trim();
    let errorSpan = document.getElementById('nomeError');
    if (valor.length < 15 || valor.length > 80 || !/^[A-Za-z\s]+$/.test(valor)) {
        errorSpan.textContent = "Nome deve ter entre 15 e 80 caracteres alfabéticos.";
    } else {
        errorSpan.textContent = "";
    }
}
function validarLogin(event) {
    let valor = event.target.value.trim();
    let errorSpan = document.getElementById('loginError');
    if (!/^[a-zA-Z0-9]{6}$/.test(valor)) {
        errorSpan.textContent = "O login deve ter exatamente 6 caracteres alfanuméricos.";
    } else {
        errorSpan.textContent = "";
    }
}

function validarSenha(event) {
    let valor = event.target.value.trim();
    let errorSpan = document.getElementById('senhaError');
    if (!/^[a-zA-Z0-9]{8}$/.test(valor)) {
        errorSpan.textContent = "A senha deve ter exatamente 8 caracteres alfanuméricos.";
    } else {
        errorSpan.textContent = "";
    }
}

function validarConfirmacaoSenha(event) {
    let senha = document.getElementById('senha').value;
    let confirmacaoSenha = event.target.value;
    let errorSpan = document.getElementById('confirmacaoSenhaError');
    if (senha !== confirmacaoSenha) {
        errorSpan.textContent = "As senhas não coincidem.";
    } else {
        errorSpan.textContent = "";
    }
}



document.getElementById('nome').addEventListener('blur', validarNome);
document.getElementById('login').addEventListener('blur', validarLogin);
document.getElementById('senha').addEventListener('blur', validarSenha);
document.getElementById('confirmacao_senha').addEventListener('blur', validarConfirmacaoSenha);


