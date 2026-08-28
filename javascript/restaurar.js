   document.getElementById("formRestaurar").addEventListener("submit", function(e) {
      e.preventDefault();
      const datos = new FormData(this);

      fetch("restaurar-form.php", {
        method: "POST",
        body: datos
      })
      .then(res => res.text())
      .then(texto => {
        document.getElementById("respuesta").innerHTML = texto;
      });
    });