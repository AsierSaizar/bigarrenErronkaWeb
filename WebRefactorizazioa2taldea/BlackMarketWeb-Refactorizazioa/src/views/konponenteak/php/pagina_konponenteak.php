        <link rel="stylesheet" type="text/css" href="../../../../src/views/konponenteak/css/pagina_konponenteak.css" media="screen" />
        
        <?php
        require_once("../../../required/header.php");
        ?>

        <div class="h1"><H1><?= trans("Gure Produktuak") ?></H1></div>
        <div class="container-icon">
				<div class="container-cart-icon">
					<svg
						xmlns="http://www.w3.org/2000/svg"
						fill="none"
						viewBox="0 0 24 24"
						stroke-width="1.5"
						stroke="currentColor"
						class="icon-cart"
					>
						<path
							stroke-linecap="round"
							stroke-linejoin="round"
							d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"
						/>
					</svg>
					<div class="count-products">
						<span id="contador-productos">0</span>
					</div>
				</div>

				<div class="container-cart-products hidden-cart">
					<div class="row-product hidden">
						<div class="cart-product">
							<div class="info-cart-product">
								<span class="cantidad-producto-carrito">1</span>
								<p class="titulo-producto-carrito">Zapatos Nike</p>
								<span class="precio-producto-carrito">$80</span>
							</div>
							<svg
								xmlns="http://www.w3.org/2000/svg"
								fill="none"
								viewBox="0 0 24 24"
								stroke-width="1.5"
								stroke="currentColor"
								class="icon-close"
							>
								<path
									stroke-linecap="round"
									stroke-linejoin="round"
									d="M6 18L18 6M6 6l12 12"
								/>
							</svg>
						</div>
					</div>

					<div class="cart-total hidden">
						<h3>Total:</h3>
						<span class="total-pagar">$200</span>
					</div>
					<p class="cart-empty">El carrito está vacío</p>
				</div>
			</div>
        <div class="barra">
            <div class="filtroaFormDiv">
                <form class="filtroForm" action="pagina_konponenteak.php" method="get">
                    <label for="lang"><?= trans("Aukeratu Konponentre mota") ?>:</label>
                    <select name="seleccion1" id="lang"  class="search-input">
                        <option value="" <?php if (isset($_GET['seleccion1']) && $_GET['seleccion1'] === '<?= trans("Denak") ?>') echo 'selected="selected"'; ?>><?= trans("Denak") ?></option>
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
                    <label for="lang"><?= trans("Marka") ?>:</label>
                    <select name="seleccion2" id="lang"  class="search-input">
                        <option value="" <?php if (isset($_GET['seleccion2']) && $_GET['seleccion2'] === '<?= trans("Denak") ?>') echo 'selected="selected"'; ?>><?= trans("Denak") ?></option>
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
                    <label for="lang"><?= trans("Prezioa") ?>:</label>
                    <select name="seleccion3" id="lang"  class="search-input">
                        <option value="" <?php if (isset($_GET['seleccion3']) && $_GET['seleccion3'] === '<?= trans("Denak") ?>') echo 'selected="selected"'; ?>><?= trans("Denak") ?></option>
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
                    <label for="lang"><?= trans("Ordenatu") ?>:</label>
                    <select name="seleccion4" id="lang"  class="search-input">
                        <option value="" <?php if (isset($_GET['seleccion4']) && $_GET['seleccion4'] === 'Normal') echo 'selected="selected"'; ?>>Normal</option>
                        <option value="<?= trans("Prezioa") ?> ↑" <?php if (isset($_GET['seleccion4']) && $_GET['seleccion4'] === trans("Prezioa") . ' ↑') echo 'selected="selected"'; ?>><?= trans("Prezioa") ?> ↑</option>
                        <option value="<?= trans("Prezioa") ?> ↓" <?php if (isset($_GET['seleccion4']) && $_GET['seleccion4'] === trans("Prezioa") . ' ↓') echo 'selected="selected"'; ?>><?= trans("Prezioa") ?> ↓</option>
                        <option value="<?= trans("Balorazioa") ?> ↑" <?php if (isset($_GET['seleccion4']) && $_GET['seleccion4'] === trans("Balorazioa") . ' ↑') echo 'selected="selected"'; ?>><?= trans("Balorazioa") ?> ↑</option>
                        <option value="<?= trans("Balorazioa") ?> ↓" <?php if (isset($_GET['seleccion4']) && $_GET['seleccion4'] === trans("Balorazioa") . ' ↓') echo 'selected="selected"'; ?>><?= trans("Balorazioa") ?> ↓</option>
                    </select>

                    <input class="search-buttonFiltro" type="submit" value="<?= trans("Bilatu") ?>" />
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
                    case "Precio ↑":
                    case "Price ↑":
                        $query = $query . " ORDER BY prezioa ASC";
                        $conditionAdded = true;
                        break;
                    case "Prezioa ↓":
                    case "Precio ↓":
                    case "Price ↓":
                        $query = $query . " ORDER BY prezioa DESC";
                        $conditionAdded = true;
                        break;
                    case "Balorazioa ↑":
                    case "Valoracion ↑":
                    case "Valoration ↑":
                        $query = $query . " ORDER BY balorazioa ASC";
                        $conditionAdded = true;
                        break;
                    case "Balorazioa ↓":
                        case "Valoracion ↓":
                        case "Valoration ↓":
                            $query = $query . " ORDER BY balorazioa DESC";
                            $conditionAdded = true;
                            break;
                    
                    
                }
            }
            
            $result = $conn->query($query);

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {
                    echo "<div>
                    <img src='../../../../public/".$row["img"]."' >
                    <br><br>
                    <b><div class=\"modeloClass\">" .$row["modelo"] . "</div><div class=\"etiketa\">" .trans("Balorazioa")." ".$row["balorazioa"]. "🌟 </div>  <div class=\"etiketa2\">" .$row["prezioa"]."€ <b></div><button class=\"btn-add-cart\">Zesta+</button> </div>";
                }
                
            } else { 
                echo trans("Ez dago irizpide hauek betetzen dituet produkturik.");
            }

            
            $conn->close();
            ?>
        </div>
        
    </div>
    <script src="index.js"></script>
</body>

</html>
