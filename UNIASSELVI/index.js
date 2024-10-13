
// window.onload = function () {
//     alert("Bem-vindo ao Sistema de Cadastro de Funcionários!");
// }



const feedbackButton = document.createElement('button');
feedbackButton.textContent = "Deixe seu feedback";
document.body.appendChild(feedbackButton);

feedbackButton.addEventListener('click', function () {
    const feedback = prompt("Por favor, deixe seu feedback:");
    if (feedback) {
        alert(`Obrigado pelo seu feedback: "${feedback}"`);
    }
});


document.getElementById('formCadastro').addEventListener('submit', function (event) {
    const nome = document.getElementById('nome').value;
    if (nome.length < 3) {
        alert("O nome deve ter pelo menos 3 caracteres.");
        event.preventDefault();
    }
});
