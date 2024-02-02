<link rel="stylesheet" type="text/css" href="../css/zesta.css" media="screen" />
<?php
require_once("../../../required/header.php");
?>
<div class="background">
        <br>
        <div class="saskiaContainer">
                <div id="saskikoHeader">
                        <h1 id="saskiaTitle">
                                <?= trans("saskia") ?>
                        </h1>
                        <button id="borratzekoBotoia"><i class="fa-solid fa-trash"></i></button>
                </div>

                <hr size="2px" color="black">

                <div class="containerZesta">
                        <div id="sasProGord">

                        </div>
                        <div class="prezioakSaskia">
                                <div class="gastosEnvio"><b>
                                                <p>
                                                        <?= trans("Bidalketako gastuak") ?>:5.99€ <br>
                                                        <?= trans("⚠100€ baino erosketa altuagoetan gastu gabe!⚠") ?>
                                                </p>
                                        </b>
                                </div>
                                <p>
                                <h2>
                                        <?= trans("Guztira") ?>:
                                </h2>
                                </p>
                                <hr>
                                <div id="BidalketakoGastuakDiv">
                                        <div>
                                                <?= trans("Bidalketako gastuak") ?>:
                                        </div>

                                        <div id="BidalketakoGastuakZenbakia">5.99€</div>
                                </div>
                                <hr>
                                <div id="prezioTotalaDiv">
                                        <div>
                                                <?= trans("Prezio totala") ?>:
                                        </div>

                                        <div id="prezioTotalaZenbakia">0€</div>
                                </div>
                                <hr>
                                <hr>
                                <div id="prezioTotalaDivDefinitiboa">
                                        <div>
                                                <?= trans("Prezio totala") ?> (
                                                <?= trans("DEFINITIBOA") ?>):
                                        </div>

                                        <div id="prezioTotalaZenbakiaDefini">0€</div>
                                </div>
                                <hr>
                                <div id="erostekoBotoiaDiv">
                                        <Button id="erostekoBotoia">
                                                <?= trans("ErosketaBurutu") ?>
                                        </Button>
                                </div>
                        </div>
                        <div id="metodoDePago">
                                <h2>Haukeratu ordainketa burutzeko metodoa:</h2>
                                <div id="aukerak">
                                        <div id="paypal" class="aukerak">Paypal<br><img id="img1MetoPag"
                                                        src="../../../../public/Paypal.png"></div>
                                        <div id="bizum" class="aukerak">Bizum<br><img id="img2MetoPag"
                                                        src="../../../../public/Bizum.png"></div>
                                        <div id="visa" class="aukerak">Visa<br><img id="img2MetoPag"
                                                        src="../../../../public/Visa.png"></div>
                                </div>

                        </div>
                        <div id="paypalPago">
                                <h2 class="h2">PAYPAL</h2>
                                <div class="containerPatzeko">
                                        <form action="#" method="post">
                                                <label for="nombre">Nombre completo:</label>
                                                <input type="text" id="nombre" name="nombre" required>

                                                <label for="abizena1">abizena:</label>
                                                <input type="text" id="abizena1" name="abizena1" required>

                                                <label for="abizena2">bigarren abizena:</label>
                                                <input type="text" id="abizena2" name="abizena2" required>

                                                <label for="telefono">Teléfono:</label>
                                                <input type="tel" id="telefono" name="telefono" required>

                                                <label for="helbidea">Helbidea:</label>
                                                <input type="text" id="helbidea" name="helbidea" required>

                                                <label for="dni">Dni:</label>
                                                <input type="text" id="dni" name="dni" required>

                                                <button type="submit" class="botonPagar">Pagar con Bizum</button>
                                        </form>
                                </div>
                        </div>
                        <div id="bizumPago">
                                <h2 class="h2">BIZUM</h2>
                                <div class="containerPatzeko">
                                        <form action="#" method="post">
                                                <label for="nombre">Nombre completo:</label>
                                                <input type="text" id="nombre" name="nombre" required>

                                                <label for="abizena1">abizena:</label>
                                                <input type="text" id="abizena1" name="abizena1" required>

                                                <label for="abizena2">bigarren abizena:</label>
                                                <input type="text" id="abizena2" name="abizena2" required>

                                                <label for="telefono">Teléfono:</label>
                                                <input type="tel" id="telefono" name="telefono" required>

                                                <label for="helbidea">Helbidea:</label>
                                                <input type="text" id="helbidea" name="helbidea" required>

                                                <label for="dni">Dni:</label>
                                                <input type="text" id="dni" name="dni" required>

                                                <button type="submit" class="botonPagar">Pagar con Bizum</button>
                                        </form>
                                </div>


                        </div>
                        <div id="visaPago">
                                <h2 class="h2">VISA</h2>
                                <div class="containerPatzeko">
                                        <form action="#" method="post">
                                                <label for="nombre">Nombre completo:</label>
                                                <input type="text" id="nombre" name="nombre" required>

                                                <label for="abizena1">abizena:</label>
                                                <input type="text" id="abizena1" name="abizena1" required>

                                                <label for="abizena2">bigarren abizena:</label>
                                                <input type="text" id="abizena2" name="abizena2" required>

                                                <label for="telefono">Teléfono:</label>
                                                <input type="tel" id="telefono" name="telefono" required>

                                                <label for="helbidea">Helbidea:</label>
                                                <input type="text" id="helbidea" name="helbidea" required>

                                                <label for="dni">Dni:</label>
                                                <input type="text" id="dni" name="dni" required>

                                                <button type="submit" class="botonPagar">Pagar con Bizum</button>
                                        </form>
                                </div>


                        </div>





                </div>


        </div>