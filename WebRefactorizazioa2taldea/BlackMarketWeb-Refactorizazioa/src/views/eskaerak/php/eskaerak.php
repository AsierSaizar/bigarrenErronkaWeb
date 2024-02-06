<?php
require_once("../../../required/header.php");
?>
<link rel="stylesheet" type="text/css" href="<?= HREF_SRC_DIR ?>/views/eskaerak/css/eskaerak.css" media="screen" />


<div class="containerEskaerak">

    <h2>Rellena este formulario para ver tu pedido</h2>
    <form method="get">
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
<center>

<div class="pedido">
    <?php
    if (isset($_GET['dni']) && isset($_GET['pedido'])) {
        $DNIeskaera = $_GET['dni'];
        $IDeskaera = $_GET['pedido'];



        echo "<b>DNI:<br></b> $DNIeskaera <br>";
        echo "<b>Número de Pedido:<br></b> $IDeskaera <br>";

        require_once("../../../required/functions.php");
        $conn = connection();
        $query = "select segimentua, prezioTotala from erronka2.saskia where id_eskaera=" . $IDeskaera . " 
            and nan_bezeroa='" . $DNIeskaera . "'";

        $result = $conn->query($query);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc()
                ?>
            <p><b>Eskaeraren egoera:</b> <br>
                <?= $row["segimentua"] ?>
            </p>
            <p><b>Eskaeraren prezio totala:</b> <br>
                <?= $row["prezioTotala"] ?>€
            </p>
            <?php


        } else {
            echo trans("Ez dago irizpide hauek betetzen dituet produkturik.");
        }

        $query = "select b.modelo, a.kopurua, a.produktukoPrezioa from erronka2.produktueskaera a , erronka2.konponenteak b where (a.idProduktua = b.id) and (a.idEskaera=" . $IDeskaera . ");";
        $result = $conn->query($query);
        ?>
        <div class="containerEskaeraPro">
            <center>

            <table id="tablaEskaera" border=5>
            <tr><th><b>Modelo</b></th><th><b>Kopurua</b></th><th><b>Prezioa</b></th></tr>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    ?>
                    
                        <tr>
                        <td><?= $row['modelo'] ?></td>
                        <td><?= $row['kopurua'] ?></td>
                        <td><?= $row['produktukoPrezioa'] ?>€</td>
                        </tr>
                       
                    
                    <?php
                }

            }
            ?>
            </table>
               
            </center>
            <br>
        </div>
        <?php

    } else {
        echo "Por favor, rellene el formulario.";
    }
    ?>
</div>
</center>
</body>