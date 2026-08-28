document.getElementById("formPedir").addEventListener("submit", function(e) {
  e.preventDefault();
  const datos = new FormData(this);

  fetch("../php/save_pedido.php", {
    method: "POST",
    body: datos
  })
  .then(res => res.text())
  .then(msg => { 
    document.getElementById("respuesta").innerText = msg;
    if (msg.includes("✅")) this.reset();
  });
});
