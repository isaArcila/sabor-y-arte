document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("formPedir");
  const respuesta = document.getElementById("respuesta");

  form.addEventListener("submit", (e) => {
    e.preventDefault();

    const datos = new FormData(form);

    fetch("../php/insertar4.php", {
      method: "POST",
      body: datos
    })
    .then(res => res.text())
    .then(msg => {
      respuesta.innerHTML = msg;
      form.reset();
    })
    .catch(err => {
      respuesta.innerHTML = "❌ Error al enviar pedido.";
      console.error(err);
    });
  });
});
