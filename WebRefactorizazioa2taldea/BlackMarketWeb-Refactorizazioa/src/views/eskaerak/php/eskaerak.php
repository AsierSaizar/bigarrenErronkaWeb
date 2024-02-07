<?php
require_once("../../../required/header.php");
?>
<link rel="stylesheet" type="text/css" href="<?= HREF_SRC_DIR ?>/views/eskaerak/css/eskaerak.css" media="screen" />


<div class="containerEskaerak">
    <h2><?= trans("RelleneEsteForEska") ?></h2>
    <form method="get">
        <div class="form-group">
            <label for="dni">DNI:</label>
            <input type="text" id="dni" name="dni" placeholder="<?=trans('IngreseDNI')?>" required>
        </div> 
        <div class="form-group">
            <label for="pedido"><?=trans('NumeroDePedido')?>:</label>
            <input type="text" id="pedido" name="pedido" placeholder="<?=trans('IngreseNUME')?>" required>
        </div>
        <div class="form-group">
            <input type="submit" value="<?=trans('bidali')?>">
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
        echo "<b>" .trans('NumeroDePedido'). ":<br></b> $IDeskaera <br>";

        require_once("../../../required/functions.php");
        $conn = connection();
        $query = "select * from saskia where id_eskaera=" . $IDeskaera . " 
            and nan_bezeroa='" . $DNIeskaera . "'";

        $result = $conn->query($query);

        $aukeraLanguage = $_SESSION["_LANGUAGE"];

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc()
                ?>
            <p><b><?=trans('egoera')?>:</b><br>
                <?= $row["segimentua_". $aukeraLanguage] ?>
            </p>
            <p><b><?=trans('eskaerarenPrezioTotal')?>:</b><br>
                <?= $row["prezioTotala"] ?>€
            </p>
            <?php


        } else {
            echo trans("Ez dago irizpide hauek betetzen dituet produkturik.");
        }

        $query = "select b.modelo, a.kopurua, a.produktukoPrezioa from produktueskaera a , konponenteak b where (a.idProduktua = b.id) and (a.idEskaera=" . $IDeskaera . ");";
        $result = $conn->query($query);
        ?>
        <div class="containerEskaeraPro"> 
            <center>

            
            <?php
            
            if ($result->num_rows > 0) {
                ?>
                <table id="tablaEskaera" border=5>
                <tr><th><b><?=trans('modelo')?></b></th><th><b><?=trans('kop')?></b></th><th><b><?=trans('Prezioa')?></b></th></tr>
                <?php
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
        echo trans('beteForm');
    }
    ?>
</div>
</center>
</body>