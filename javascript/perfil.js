function editarCampo(campo) {
    const input = document.getElementById(campo + "-input");
    const guardarBtn = document.getElementById("guardar-" + campo);

    input.disabled = false;
    input.style.border = "1px solid #8b3a2c";
    guardarBtn.style.display = "inline-block";
}

function guardarCampo(campo) {
    const input = document.getElementById(campo + "-input");
    const guardarBtn = document.getElementById("guardar-" + campo);

    input.disabled = true;
    input.style.border = "none";
    guardarBtn.style.display = "none";

   
    alert("Nuevo " + campo + ": " + input.value);
}

function togglePassword() {
    const input = document.getElementById("pass-input");
    const icon = document.getElementById("toggle-pass");

    if (input.type === "password") {
        input.type = "text";
        icon.classList.remove("fa-eye");
        icon.classList.add("fa-eye-slash");
    } else {
        input.type = "password";
        icon.classList.remove("fa-eye-slash");
        icon.classList.add("fa-eye");
    }
}
