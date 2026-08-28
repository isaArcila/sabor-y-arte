
  const metodoPago = document.getElementById('metodo-pago');
  const tarjetaContainer = document.getElementById('tarjeta-container');

  metodoPago.addEventListener('change', function () {
    if (this.value === 'tarjeta') {
      tarjetaContainer.style.display = 'block';
    } else {
      tarjetaContainer.style.display = 'none';
    }
  });

