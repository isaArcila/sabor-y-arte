function cargarInventario() {
  fetch("../php/obtener.php")
    .then(res => res.json())
    .then(data => {
      const tabla = document.getElementById("tablaInventario");
      tabla.innerHTML = "";
      data.forEach(p => {
        tabla.innerHTML += `
          <tr>
            <td>${p.nombre}</td>
            <td>${p.categoria}</td>
            <td>${p.cantidad}</td>
            <td>
              <form onsubmit="restaurar(event, ${p.id})">
                <input type="number" name="cantidad" min="1" required>
                <button type="submit">Agregar</button>
              </form>
            </td>
            <td>
  <a href="../php/editar-invent.php?id=${p.id}" class="btn btn-delete";">
    Editar
  </a>
</td>
            <td>
  <a href="../php/eliminar_invent.php?id=${p.id}" class="btn btn-delete" onclick="return confirm('¿Estás seguro de eliminar este producto?');">
    Eliminar
  </a>
</td>

          </tr>`;
      });
    });
}

function restaurar(e, id) {
  e.preventDefault();
  const cantidad = e.target.cantidad.value;
  const datos = new FormData();
  datos.append("id", id);
  datos.append("cantidad", cantidad);

  fetch("../php/restaurar.php", {
    method: "POST",
    body: datos
  })
  .then(res => res.text())
  .then(msg => {
    document.getElementById("mensaje").innerText = msg;
    cargarInventario();
  });
}

setInterval(cargarInventario, 6000);
document.addEventListener("DOMContentLoaded", cargarInventario);
