// Função para limpar o formulário
function limparFormulario() {
    document.getElementById("formCadastro").reset();
}

// Função para validar o formulário
function validarFormulario(event) {
    event.preventDefault(); // Impede o envio imediato do formulário

    // Enviar o formulário via POST
    document.getElementById("formCadastro").submit();

    // Mostrar o alerta de sucesso
    alert("Cadastro salvo com sucesso!");

    // Limpar o formulário
    limparFormulario();
}


