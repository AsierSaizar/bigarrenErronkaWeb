        <?php
        require_once("../../../required/header.php");
        ?>
        <link rel="stylesheet" type="text/css" href="<?=HREF_SRC_DIR?>/views/Hornitzaileak/css/Hornitzaileak.css" media="screen" />
        
        
        
 
        

        <div class="formularioa">
            <h3 class="h3" ><b><?= trans("HornitzaileaIzateko") ?>:</b></h3>
            <form id="formularioaForm" method="post">


            <label for="tlfzenb"><?= trans("Telefono") ?>:</label>
            <input type="number" id="tlfzenb" name="tlfzenb" required><br>


            <label for="empresaizena"><?= trans("Empresaren Izena") ?>:</label>
            <input type="text" id="empresaizena" name="empresaizena" required><br>

            <label for="korreoa"><?= trans("Korreoa") ?>:</label>
            <input type="email" id="korreoa" name="korreoa" required><br>


            <label for="empresahel"><?= trans("Helbidea") ?>:</label>
            <input type="text" id="empresahel" name="empresahel" required><br>


            <label for="NanNif"><?= trans("NanNif") ?>:</label>
            <input type="text" id="NanNif" name="NanNif" required><br>

            <label for="eskeintzeko"><?= trans("eskaintzen") ?></label>
            <textarea id="eskeintzeko" name="eskeintzeko"></textarea><br>

            <input type="submit" value="<?= trans("Hornitzaile bihurtu") ?>">
            <input type="reset" value="<?= trans("Ezabatu") ?>">


            </form>

            <?php
            
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $linkHornitzaile = APP_DIR . "/src/required/functions.php";
                require_once($linkHornitzaile); 
                $conn = connection();

                $tlfzenb = $_POST["tlfzenb"];
                $empresaizena = $_POST["empresaizena"];
                $korreoa = $_POST["korreoa"];
                $empresahel = $_POST["empresahel"];
                $NanNif = $_POST["NanNif"];
                $eskeintzeko = $_POST["eskeintzeko"];

                $sql = "INSERT INTO hornitzaileak (EmpresarakoTlfZenbakia, EmpresarenIzena, EmpresarenKorreoa, Helbidea, NanNif, testua) VALUES (?, ?, ?, ?, ?, ?)";

                $stmt = $conn->prepare($sql);
                $stmt->bind_param("ssssss", $tlfzenb, $empresaizena, $korreoa, $empresahel, $NanNif, $eskeintzeko);

                if ($stmt->execute()) {
                    echo "Datuak zuzen gorde dira.";
                } else {
                    echo "Errorea datuak datu-basean sartzerakoan: " . $stmt->error;
                }

                $stmt->close();
                $conn->close();
            }
            ?>
        </div>
        
        
    </div>
    <br>
    


















    








    
</body>
</html>
