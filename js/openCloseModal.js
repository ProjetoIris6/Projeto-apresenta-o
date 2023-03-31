// Abrir / fechar modal de login
function iniciarModal(modalID) {
  let modal = document.getElementById(modalID);
  if (modal) {
    modal.classList.add("mostrar-modal");
    modal.addEventListener("click", (e) => {
      if (e.target.id == modalID || e.target.id == "fechar-modal") {
        modal.classList.remove("mostrar-modal");
        formsContainer.classList.remove("cadastro-ativo"); // Esse trecho faz o modal abrir sempre na tela de login
        formsContainer.classList.remove("recuperarSen-ativo");
      }
    });
  }
}

let bnt_login = document.querySelector(".btn_login");
bnt_login.addEventListener("click", () => iniciarModal("modal-container"));

// Mostrar / ocultar senha

let mostrarOcultarSenha = document.querySelectorAll(".eye-icon");

mostrarOcultarSenha.forEach((eyeIcon) => {
  eyeIcon.addEventListener("click", () => {
    let pwFields =
      eyeIcon.parentElement.parentElement.querySelectorAll(".password");

    pwFields.forEach((password) => {
      if (password.type === "password") {
        password.type = "text";
        return;
      }
      password.type = "password";
    });
  });
});

// Transição entre modais
let formsContainer = document.querySelector(".forms-container");
let btn_cadastro = document.querySelector(".btn_cadastro");
let btn_login = document.querySelector("#btn_login");
let btn_recuperarSenha = document.querySelector(".recuper-senha");
let btnVoltarLogin = document.querySelector(".voltar-login");

//transição entre modal de login e cadastro
btn_cadastro.addEventListener("click", () => {
  formsContainer.classList.add("cadastro-ativo");
});
btn_login.addEventListener("click", () => {
  formsContainer.classList.remove("cadastro-ativo");
});

//transição entre modal de login e Recuperar senha
btn_recuperarSenha.addEventListener("click", () => {
  formsContainer.classList.add("recuperarSen-ativo");
});

btnVoltarLogin.addEventListener("click", () => {
  formsContainer.classList.remove("recuperarSen-ativo");
});
