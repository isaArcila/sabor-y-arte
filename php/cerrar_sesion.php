<?php
session_start();
session_unset();
session_destroy();

echo '
<script>
    alert("Sesión cerrada con éxito.");
    window.location.href = "../php/forms2.php";
</script>
';
exit;
