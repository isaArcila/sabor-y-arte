let productos = [];

document.addEventListener("DOMContentLoaded", () => {
  
  fetch("../php/obtener.php")
    .then(res => res.json())
    .then(data => {
      productos = data;
      renderizarTabla(productos);
    })
    .catch(err => {
      console.error("❌ Error al cargar productos:", err);
    });


  const checkboxes = document.querySelectorAll(".filtro-categoria");
  checkboxes.forEach(checkbox => {
    checkbox.addEventListener("change", aplicarFiltros);
  });
});


function aplicarFiltros() {
  const seleccionadas = Array.from(document.querySelectorAll(".filtro-categoria:checked"))
    .map(cb => cb.value);

  const filtrados = seleccionadas.length > 0
    ? productos.filter(p => seleccionadas.includes(p.categoria))
    : productos;

  renderizarTabla(filtrados);
}


function renderizarTabla(lista) {
  const tbody = document.querySelector("#tablaPrecios tbody");
  tbody.innerHTML = "";

  lista.forEach(p => {
    const fila = document.createElement("tr");
    fila.innerHTML = `
      <td>${p.nombre}</td>
      <td>$${Number(p.precio).toLocaleString("es-CO")}</td>
    `;
    tbody.appendChild(fila);
  });
}
