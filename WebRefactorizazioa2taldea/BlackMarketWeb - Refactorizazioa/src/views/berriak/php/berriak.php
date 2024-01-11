        <link rel="stylesheet" type="text/css" href="../css/berriak.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="../../../../src/css/styleMenu.css"  media="screen"/>
        
        <?php
        require_once("../../../required/header.php");
        ?>



        <div class="filtroak">
            <div class="filtroaFormDiv">
                
                <form class="filtroForm" action="berriak.php" method="get">
                    <label for="fecha">Jarri fecha bat eta aukeratu hortik aurrerakoak edo lehenegokoak agertzeko:</label><br>
                    <input type="date" id="fecha" name="fecha" class="search-input" value="<?php echo isset($_GET['fecha']) ? $_GET['fecha'] : ''; ?>" required><br>
                    
                    <select name="seleccion1" id="lang" class="search-input">
                        <option value="aurreragokoak" <?php if (isset($_GET['seleccion1']) && $_GET['seleccion1'] === 'aurreragokoak') echo 'selected="selected"'; ?>>aurreragokoak</option>
                        <option value="lehenagokoak" <?php if (isset($_GET['seleccion1']) && $_GET['seleccion1'] === 'lehenagokoak') echo 'selected="selected"'; ?>>lehenagokoak</option>

                    </select>
                    <br>
                    <input class="search-buttonFiltro" type="submit" value="Bilatu" />
                </form>
            </div>
            <div class="filtroaFormDiv">
                
                <form class="filtroForm1" action="berriak.php" method="get">
                    
                    <label for="dateFrom">Egun hontatik:</label><br>
                    <input type="date" id="dateFrom" class="search-input" name="dateFrom" value="<?php echo isset($_GET['dateFrom']) ? $_GET['dateFrom'] : ''; ?>" required><br>
                    
                    <label for="dateTo">Egun hontara:</label><br>
                    <input type="date" id="dateTo" class="search-input" name="dateTo" value="<?php echo isset($_GET['dateTo']) ? $_GET['dateTo'] : ''; ?>" required>
                    <br>
                    
                    
                    <input class="search-buttonFiltro" type="submit"  value="Bilatu" />
                </form>
            </div>
        </div>
        




        <div class="h1"><H1>Berriak:</H1></div>
        <div class="BERRIAK">
        <?php
        require_once "../../../required/functions.php";
        $conn = connection();

            

            
            $dateFilterFrom = isset($_GET['dateFrom']) ? date('Y-m-d', strtotime($_GET['dateFrom'])) : 'all';
            $dateFilterTo = isset($_GET['dateTo']) ? date('Y-m-d', strtotime($_GET['dateTo'])) : 'all';

            
            $fecha = isset($_GET['fecha']) ? date('Y-m-d', strtotime($_GET['fecha'])) : 'all';
            $lehenGero = (isset($_GET["seleccion1"])) ? $_GET["seleccion1"] : "";

            if ($dateFilterFrom != 'all' && $dateFilterTo != 'all') {
                $sql = "SELECT * FROM berriak WHERE fecha BETWEEN '$dateFilterFrom' AND '$dateFilterTo'";
            } 
            elseif ($fecha != 'all' and $lehenGero == "aurreragokoak") {
                $sql = "SELECT * FROM berriak WHERE fecha >= '$fecha'";
            } 
            elseif ($fecha != 'all' and $lehenGero == "lehenagokoak") {
                $sql = "SELECT * FROM berriak WHERE fecha <= '$fecha'";
            } 
            else {
                $sql = "SELECT * FROM berriak";
            }
            $sql = $conn->query($sql);

            if ($sql->num_rows > 0) {
                
                
                while ($row = $sql->fetch_assoc()) {
                    echo "<div class=\"etiketak\"><b>".$row["izenburua"] . "</b><br><br>" . $row["descripcioLaburra"]. "<br><br><b>". $row["fecha"]."</b></div>" ;
                }
                
            } else {
                echo "Ez dago datuak taulan.";
            }
            
            $conn->close();
            ?>
        </div>

    </div>

</body>
</html>
