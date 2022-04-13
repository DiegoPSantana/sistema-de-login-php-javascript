// Utilizando o form pelo id, passando a const a ser o nosso formulário
const loginForm = document.getElementById("login-usuario-form");

// Error mensagem de alerta
const msgAlertErroLogin = document.getElementById("msgAlertErroLogin");


// Ao clicar no submit, async aguardar o processo
loginForm.addEventListener("submit", async (e) => {
    // Para que a página janela não seja carregada
    e.preventDefault();

    // // Validando se o campos de email e senha estão preenchidos
    // if (document.getElementById("email").value === "") {
    //     // const será atribuida uma mensagem
    //     msgAlertErroLogin.innerHTML = "<div class='alert alert-danger' role='alert'>Necessario preencher o campo usuário!</div>";
    // } else if (document.getElementById("senha").value === "") {
    //     msgAlertErroLogin.innerHTML = "<div class='alert alert-danger' role='alert'>Necessario preencher o campo senha!</div>";
    // } else {
        // Mas se usuário preencher todos os campos
        const dadosForm = new FormData(loginForm);

        // await => Aguardar, enquanto o processamento não finalizar esta
        // linha, não pode ir para próxima linha 
        const dados = await fetch("validar.php", {
            method: "POST",
            body: dadosForm
        });

        const resposta = await dados.json();

        console.log(resposta)
    //}
})