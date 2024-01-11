        <link rel="stylesheet" type="text/css" href="../../../../src/views/konponenteak/css/pagina_konponenteak.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="../../../../src/css/styleMenu.css"  media="screen">
        <?php
        require_once("../../../required/header.php");
        ?>

        <div class="h1"><H1>Gure Produktuak</H1></div>
        <div class="barra">
            <div class="filtroaFormDiv">
                <form class="filtroForm" action="pagina_konponenteak.php" method="get">
                    <label for="lang">Aukeratu Konponentre mota:</label>
                    <select name="seleccion1" id="lang"  class="search-input">
                        <option value="" <?php if (isset($_GET['seleccion1']) && $_GET['seleccion1'] === 'DENAK') echo 'selected="selected"'; ?>>DENAK</option>
                        <option value="Placa" <?php if (isset($_GET['seleccion1']) && $_GET['seleccion1'] === 'Placa') echo 'selected="selected"'; ?>>Placa</option>
                        <option value="ram" <?php if (isset($_GET['seleccion1']) && $_GET['seleccion1'] === 'ram') echo 'selected="selected"'; ?>>ram</option>
                        <option value="CPU" <?php if (isset($_GET['seleccion1']) && $_GET['seleccion1'] === 'CPU') echo 'selected="selected"'; ?>>CPU</option>
                        <option value="GPU" <?php if (isset($_GET['seleccion1']) && $_GET['seleccion1'] === 'GPU') echo 'selected="selected"'; ?>>GPU</option>
                        <option value="HDD" <?php if (isset($_GET['seleccion1']) && $_GET['seleccion1'] === 'HDD') echo 'selected="selected"'; ?>>HDD</option>
                        <option value="SSD" <?php if (isset($_GET['seleccion1']) && $_GET['seleccion1'] === 'SSD') echo 'selected="selected"'; ?>>SSD</option>
                        <option value="Monitor" <?php if (isset($_GET['seleccion1']) && $_GET['seleccion1'] === 'Monitor') echo 'selected="selected"'; ?>>Monitor</option>
                        <option value="Teclado" <?php if (isset($_GET['seleccion1']) && $_GET['seleccion1'] === 'Teclado') echo 'selected="selected"'; ?>>Teclado</option>
                        <option value="Ratón" <?php if (isset($_GET['seleccion1']) && $_GET['seleccion1'] === 'Ratón') echo 'selected="selected"'; ?>>Ratón</option>
                        <option value="Auriculares" <?php if (isset($_GET['seleccion1']) && $_GET['seleccion1'] === 'Auriculares') echo 'selected="selected"'; ?>>Auriculares</option>
                        <option value="Fuente de Alimentación" <?php if (isset($_GET['seleccion1']) && $_GET['seleccion1'] === 'Fuente de Alimentación') echo 'selected="selected"'; ?>>Fuente de Alimentación</option>
                        <option value="Caja de Ordenador" <?php if (isset($_GET['seleccion1']) && $_GET['seleccion1'] === 'Caja de Ordenador') echo 'selected="selected"'; ?>>Caja de Ordenador</option>
                    </select>
                    <br><br>
                    <label for="lang">Marka:</label>
                    <select name="seleccion2" id="lang"  class="search-input">
                        <option value="" <?php if (isset($_GET['seleccion2']) && $_GET['seleccion2'] === 'DENAK') echo 'selected="selected"'; ?>>DENAK</option>
                        <option value="asus" <?php if (isset($_GET['seleccion2']) && $_GET['seleccion2'] === 'asus') echo 'selected="selected"'; ?>>asus</option>
                        <option value="msi" <?php if (isset($_GET['seleccion2']) && $_GET['seleccion2'] === 'msi') echo 'selected="selected"'; ?>>msi</option>
                        <option value="GigaByte" <?php if (isset($_GET['seleccion2']) && $_GET['seleccion2'] === 'GigaByte') echo 'selected="selected"'; ?>>GigaByte</option>
                        <option value="Corsair" <?php if (isset($_GET['seleccion2']) && $_GET['seleccion2'] === 'Corsair') echo 'selected="selected"'; ?>>Corsair</option>
                        <option value="Amd" <?php if (isset($_GET['seleccion2']) && $_GET['seleccion2'] === 'Amd') echo 'selected="selected"'; ?>>Amd</option>
                        <option value="Intel" <?php if (isset($_GET['seleccion2']) && $_GET['seleccion2'] === 'Intel') echo 'selected="selected"'; ?>>Intel</option>
                        <option value="Nvidia" <?php if (isset($_GET['seleccion2']) && $_GET['seleccion2'] === 'Nvidia') echo 'selected="selected"'; ?>>Nvidia</option>
                        <option value="Acer" <?php if (isset($_GET['seleccion2']) && $_GET['seleccion2'] === 'Acer') echo 'selected="selected"'; ?>>Acer</option>
                        <option value="BenQ" <?php if (isset($_GET['seleccion2']) && $_GET['seleccion2'] === 'BenQ') echo 'selected="selected"'; ?>>BenQ</option>
                        <option value="Cooler Master" <?php if (isset($_GET['seleccion2']) && $_GET['seleccion2'] === 'Cooler Master') echo 'selected="selected"'; ?>>Cooler Master</option>
                        <option value="EVGA" <?php if (isset($_GET['seleccion2']) && $_GET['seleccion2'] === 'EVGA') echo 'selected="selected"'; ?>>EVGA</option>
                        <option value="Fractal Design" <?php if (isset($_GET['seleccion2']) && $_GET['seleccion2'] === 'Fractal Design') echo 'selected="selected"'; ?>>Fractal Design</option>
                        <option value="HyperX" <?php if (isset($_GET['seleccion2']) && $_GET['seleccion2'] === 'HyperX') echo 'selected="selected"'; ?>>HyperX</option>
                        <option value="LG" <?php if (isset($_GET['seleccion2']) && $_GET['seleccion2'] === 'LG') echo 'selected="selected"'; ?>>LG</option>
                        <option value="Logitech" <?php if (isset($_GET['seleccion2']) && $_GET['seleccion2'] === 'Logitech') echo 'selected="selected"'; ?>>Logitech</option>
                        <option value="Razer" <?php if (isset($_GET['seleccion2']) && $_GET['seleccion2'] === 'Razer') echo 'selected="selected"'; ?>>Razer</option>
                        <option value="Samsung" <?php if (isset($_GET['seleccion2']) && $_GET['seleccion2'] === 'Samsung') echo 'selected="selected"'; ?>>Samsung</option>
                        <option value="SanDisk" <?php if (isset($_GET['seleccion2']) && $_GET['seleccion2'] === 'SanDisk') echo 'selected="selected"'; ?>>SanDisk</option>
                        <option value="Seagate" <?php if (isset($_GET['seleccion2']) && $_GET['seleccion2'] === 'Seagate') echo 'selected="selected"'; ?>>Seagate</option>
                        <option value="Seasonic" <?php if (isset($_GET['seleccion2']) && $_GET['seleccion2'] === 'Seasonic') echo 'selected="selected"'; ?>>Seasonic</option>
                        <option value="SteelSeries" <?php if (isset($_GET['seleccion2']) && $_GET['seleccion2'] === 'SteelSeries') echo 'selected="selected"'; ?>>SteelSeries</option>
                        <option value="Thermaltake" <?php if (isset($_GET['seleccion2']) && $_GET['seleccion2'] === 'Thermaltake') echo 'selected="selected"'; ?>>Thermaltake</option>
                        <option value="Western Digital" <?php if (isset($_GET['seleccion2']) && $_GET['seleccion2'] === 'Western Digital') echo 'selected="selected"'; ?>>Western Digital</option>
                        

                    </select>
                    <br><br>
                    <label for="lang">Prezioa:</label>
                    <select name="seleccion3" id="lang"  class="search-input">
                        <option value="" <?php if (isset($_GET['seleccion3']) && $_GET['seleccion3'] === 'DENAK') echo 'selected="selected"'; ?>>DENAK</option>
                        <option value="0-50" <?php if (isset($_GET['seleccion3']) && $_GET['seleccion3'] === '0-50') echo 'selected="selected"'; ?>>0-50€</option>
                        <option value="50-100" <?php if (isset($_GET['seleccion3']) && $_GET['seleccion3'] === '50-100') echo 'selected="selected"'; ?>>50-100€</option>
                        <option value="100-150" <?php if (isset($_GET['seleccion3']) && $_GET['seleccion3'] === '100-150') echo 'selected="selected"'; ?>>100-150€</option>
                        <option value="150-200" <?php if (isset($_GET['seleccion3']) && $_GET['seleccion3'] === '150-200') echo 'selected="selected"'; ?>>150-200€</option>
                        <option value="200-250" <?php if (isset($_GET['seleccion3']) && $_GET['seleccion3'] === '200-250') echo 'selected="selected"'; ?>>200-250€</option>
                        <option value="250-300" <?php if (isset($_GET['seleccion3']) && $_GET['seleccion3'] === '250-300') echo 'selected="selected"'; ?>>250-300€</option>
                        <option value="300-500" <?php if (isset($_GET['seleccion3']) && $_GET['seleccion3'] === '300-500') echo 'selected="selected"'; ?>>300-500€</option>
                        <option value="500-700" <?php if (isset($_GET['seleccion3']) && $_GET['seleccion3'] === '500-700') echo 'selected="selected"'; ?>>500-700€</option>
                        <option value="700-1000" <?php if (isset($_GET['seleccion3']) && $_GET['seleccion3'] === '700-1000') echo 'selected="selected"'; ?>>700-1000€</option>
                        <option value="1000-1500" <?php if (isset($_GET['seleccion3']) && $_GET['seleccion3'] === '1000-1500') echo 'selected="selected"'; ?>>1000-1500€</option>
                        <option value="1500-2000" <?php if (isset($_GET['seleccion3']) && $_GET['seleccion3'] === '1500-2000') echo 'selected="selected"'; ?>>1500-2000€</option>
                        
                    </select>
                    <br><br>
                    <label for="lang">Ordenatu:</label>
                    <select name="seleccion4" id="lang"  class="search-input">
                        <option value="" <?php if (isset($_GET['seleccion4']) && $_GET['seleccion4'] === 'Normal') echo 'selected="selected"'; ?>>Normal</option>
                        <option value="Prezioa ↑" <?php if (isset($_GET['seleccion4']) && $_GET['seleccion4'] === 'Prezioa ↑') echo 'selected="selected"'; ?>>Prezioa ↑</option>
                        <option value="Prezioa ↓" <?php if (isset($_GET['seleccion4']) && $_GET['seleccion4'] === 'Prezioa ↓') echo 'selected="selected"'; ?>>Prezioa ↓</option>
                        <option value="Balorazioa ↑" <?php if (isset($_GET['seleccion4']) && $_GET['seleccion4'] === 'Balorazioa ↑') echo 'selected="selected"'; ?>>Balorazioa ↑</option>
                        <option value="Balorazioa ↓" <?php if (isset($_GET['seleccion4']) && $_GET['seleccion4'] === 'Balorazioa ↓') echo 'selected="selected"'; ?>>Balorazioa ↓</option>
                    </select>

                    <input class="search-buttonFiltro" type="submit" value="Bilatu" />
                </form>
            </div>
        </div>
        
        
        <div class="productuak">
            <?php
            require_once"../../../required/functions.php";
            $conn = connection();
            
        
            $query = "SELECT * FROM konponenteak";

            $opcion1 = (isset($_GET["seleccion1"])) ? $_GET["seleccion1"] : "";
            $opcion2 = (isset($_GET["seleccion2"])) ? $_GET["seleccion2"] : "";
            $opcion3 = (isset($_GET["seleccion3"])) ? $_GET["seleccion3"] : "";
            $opcion4 = (isset($_GET["seleccion4"])) ? $_GET["seleccion4"] : "";

                
            
            if ($opcion1 != "" || $opcion2 != "" || $opcion3 != "") {
                $query .= " WHERE ";
            }
            $conditionAdded = false;

            if ($opcion1 != "") {
                if ($conditionAdded == true) {
                    $query = $query . " and";
                }
                $query = $query . " konponenteMota = '" . $opcion1 . "'";
                $conditionAdded = true;
            }

            

            if ($opcion2 != "") {
                if ($conditionAdded == true) {
                    $query = $query . " and";
                }
                $query = $query . " Marka = '" . $opcion2 . "'";
                $conditionAdded = true;
            }
            

            if ($opcion3 != "") {
                if ($conditionAdded == true) {
                    $query = $query . " and";
                }
                $array = explode("-", $opcion3);
                $min = $array[0];
                $max = $array[1];

                $query = $query . " Prezioa BETWEEN '" . $min . "' AND '" . $max . "'";
                
            }

            if ($opcion4 != "") {
                switch ($opcion4) {
                    case "Prezioa ↑":
                        $query = $query . " ORDER BY prezioa ASC";
                        $conditionAdded = true;
                        break;
                    case "Prezioa ↓":
                        $query = $query . " ORDER BY prezioa DESC";
                        $conditionAdded = true;
                        break;
                    case "Balorazioa ↑":
                        $query = $query . " ORDER BY balorazioa ASC";
                        $conditionAdded = true;
                        break;
                    case "Balorazioa ↓":
                        $query = $query . " ORDER BY balorazioa DESC";
                        $conditionAdded = true;
                        break;
                }
            }    
            
            $result = $conn->query($query);

            if ($result->num_rows > 0) {
                
                
                while ($row = $result->fetch_assoc()) {
                    echo "<div><img src='../../../../public/".$row["img"]."' ><br><br>" . "<b>" .$row["modelo"] . "<br><div class=\"etiketa\">" ."Balorazioa:".$row["balorazioa"]. "🌟 </div>  <div class=\"etiketa2\">" .$row["prezioa"]."€ </div><b> </div>";
                }
                
            } else { 
                echo "Ez dago irizpide hauek betetzen dituet produkturik.";
            }

            
            $conn->close();
            ?>
        </div>
        
    </div>
    
</body>

</html>
