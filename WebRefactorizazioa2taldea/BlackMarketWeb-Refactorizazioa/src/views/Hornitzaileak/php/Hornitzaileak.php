        <link rel="stylesheet" type="text/css" href="../../../../src/views/Hornitzaileak/css/Hornitzaileak.css" media="screen" />
        
        
        <?php
        require_once("../../../required/header.php");
        ?>
 
        

        <div class="formularioa">
            <h3><b>Hornitzaile izateko formulario hau bete:</b></h3>
            <form id="formularioaForm" method="post">


            <label for="tlfzenb">Empresarako Telefono Zenbakia:</label>
            <input type="number" id="tlfzenb" name="tlfzenb" required><br>


            <label for="empresaizena">Empresaren Izena:</label>
            <input type="text" id="empresaizena" name="empresaizena" required><br>

            <label for="korreoa">Empresaren Korreoa:</label>
            <input type="email" id="korreoa" name="korreoa" required><br>


            <label for="empresahel">Empresaren Helbidea:</label>
            <input type="text" id="empresahel" name="empresahel" required><br>


            <label for="nan">NAN:</label>
            <input type="text" id="nan" name="nan" required><br>

            <label for="eskeintzeko">Zer eskaintzen duzue?:</label>
            <textarea id="eskeintzeko" name="eskeintzeko"></textarea><br>

            <input type="submit" value="Hornitzaile bihurtu">
            <input type="reset" value="Ezabatu">


            </form>

            <?php
            
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                require_once"../../../functions/functions.php";
                $conn = connection();

                    
                $empresaizena = $_POST["empresaizena"];
                $korreoa = $_POST["korreoa"];
                $empresahel = $_POST["empresahel"];
                $nan = $_POST["nan"];
                $eskeintzeko = $_POST["eskeintzeko"];

                $sql = "INSERT INTO hornitzaileak (EmpresarekoTlfZenbakia, EmpresarenIzena, EmpresarenKorreoa, Helbidea, NAN, testua) VALUES (?, ?, ?, ?, ?, ?)";

                $stmt = $conn->prepare($sql);
                $stmt->bind_param("ssssss", $tlfzenb, $empresaizena, $korreoa, $empresahel, $nan, $eskeintzeko);

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
