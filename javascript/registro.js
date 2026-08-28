
const btnSignIn = document.getElementById("sign-in"),
    btnSignUP = document.getElementById("sign-up"),
    formRegister = document.querySelector(".register"),
    formLogin = document.querySelector(".login");

btnSignIn.addEventListener("click", e => {
    formRegister.classList.add("hide");
    formLogin.classList.remove("hide");
});

btnSignUP.addEventListener("click", e => {
    formLogin.classList.add("hide");
    formRegister.classList.remove("hide");
});


const togglePass = document.querySelector("#togglePass");
const passInput = document.querySelector("#pass");

if (togglePass && passInput) {
    togglePass.addEventListener("click", () => {
        if (passInput.type === "password") {
            passInput.type = "text";
            togglePass.classList.remove("fa-eye");
            togglePass.classList.add("fa-eye-slash");
        } else {
            passInput.type = "password";
            togglePass.classList.remove("fa-eye-slash");
            togglePass.classList.add("fa-eye");
        }
    });
}
