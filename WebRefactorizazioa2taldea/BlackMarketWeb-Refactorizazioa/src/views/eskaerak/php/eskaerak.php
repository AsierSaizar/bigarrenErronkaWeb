
<?php
require_once("../../../required/header.php");
?>
<link rel="stylesheet" type="text/css" href="<?=HREF_SRC_DIR?>/views/eskaerak/css/eskaerak.css" media="screen" />


<div class="containerEskaerak">

    <h2>Rellena este formulario para ver tu pedido</h2>
    <form method="post">
        <div class="form-group">
        <label for="dni">DNI:</label>
        <input type="text" id="dni" name="dni" placeholder="Ingrese su DNI" required>
        </div>
        <div class="form-group">
        <label for="pedido">Número de Pedido:</label>
        <input type="text" id="pedido" name="pedido" placeholder="Ingrese el número de pedido" required>
        </div>
        <div class="form-group">
        <input type="submit" value="Enviar">
        </div>
    </form>

</div>

</body>