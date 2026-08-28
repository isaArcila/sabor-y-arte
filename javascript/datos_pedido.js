document.addEventListener("DOMContentLoaded", () => {
  fetch("../php/obtener.php")
    .then(res => res.json())
    .then(data => {
      const tbody = document.querySelector("#tablaPrecios tbody");
      tbody.innerHTML = ""; 

      data.forEach(p => {
        const fila = document.createElement("tr");
        fila.innerHTML = `
          <td>${p.nombre}</td>
          <td>$${Number(p.precio).toLocaleString('es-CO')}</td>
        `;
        tbody.appendChild(fila);
      });
    })
    .catch(err => {
      console.error("❌ Error al cargar productos:", err);
    });
});
