<?php
require_once("../../../required/header.php");
?>
<link rel="stylesheet" type="text/css" href="<?= HREF_SRC_DIR ?>/views/Zesta/css/zesta.css" media="screen" />
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
                                <h2>
                                        <?= trans("Haukeratu ordainketa burutzeko metodoa") ?>:
                                </h2>
                                <div id="aukerak">
                                        <div id="paypal" class="aukerak">Paypal<br><img id="img1MetoPag"
                                                        src="../../../../public/Paypal.png">
                                        </div>
                                        <div id="bizum" class="aukerak">Bizum<br><img id="img2MetoPag"
                                                        src="../../../../public/Bizum.png">
                                        </div>
                                        <div id="visa" class="aukerak">Visa<br><img id="img2MetoPag"
                                                        src="../../../../public/Visa.png">
                                        </div>
                                </div>

                        </div>
                        <div id="paypalPago">
                                <h2 class="h2">PAYPAL</h2>
                                <div class="containerPatzeko">

                                        <label class="label" for="nombre">
                                                <?= trans("Izena") ?>:
                                        </label>
                                        <input class="patzekoInputak" type="text" id="nombre_1" name="nombre" required>

                                        <label class="label" for="abizena1">
                                                <?= trans("abizena1") ?>:
                                        </label>
                                        <input class="patzekoInputak" type="text" id="abizena1_1" name="abizena1"
                                                required>

                                        <label class="label" for="abizena2">
                                                <?= trans("abizena2") ?>:
                                        </label>
                                        <input class="patzekoInputak" type="text" id="abizena2_1" name="abizena2"
                                                required>

                                        <label class="label" for="telefono">
                                                <?= trans("telefono") ?>:
                                        </label>
                                        <input class="patzekoInputak" type="number" id="telefono_1" name="telefono"
                                                required>

                                        <label class="label" for="helbidea">
                                                <?= trans("helbidea") ?>:
                                        </label>
                                        <input class="patzekoInputak" type="text" id="helbidea_1" name="helbidea"
                                                required>

                                        <label class="label" for="dni">Dni:</label>
                                        <input class="patzekoInputak" type="text" id="dni_1" name="dni" required>

                                        <button type="submit" class="botonPagar_1">
                                                <?= trans("PagarCon") ?> Paypal
                                        </button>

                                </div>
                        </div>
                        <div id="bizumPago">
                                <h2 class="h2">BIZUM</h2>
                                <div class="containerPatzeko">

                                        <label class="label" for="nombre">
                                                <?= trans("Izena") ?>:
                                        </label>
                                        <input class="patzekoInputak" type="text" id="nombre_2" name="nombre" required>

                                        <label class="label" for="abizena1">
                                                <?= trans("abizena1") ?>:
                                        </label>
                                        <input class="patzekoInputak" type="text" id="abizena1_2" name="abizena1"
                                                required>

                                        <label class="label" for="abizena2">
                                                <?= trans("abizena2") ?>:
                                        </label>
                                        <input class="patzekoInputak" type="text" id="abizena2_2" name="abizena2"
                                                required>

                                        <label class="label" for="telefono">
                                                <?= trans("telefono") ?>:
                                        </label>
                                        <input class="patzekoInputak" type="number" id="telefono_2" name="telefono"
                                                required>

                                        <label class="label" for="helbidea">
                                                <?= trans("helbidea") ?>:
                                        </label>
                                        <input class="patzekoInputak" type="text" id="helbidea_2" name="helbidea"
                                                required>

                                        <label class="label" for="dni">Dni:</label>
                                        <input class="patzekoInputak" type="text" id="dni_2" name="dni" required>

                                        <button type="submit" class="botonPagar_2">
                                                <?= trans("PagarCon") ?> Bizum
                                        </button>

                                </div>


                        </div>
                        <div id="visaPago">
                                <h2 class="h2">VISA</h2>
                                <div class="containerPatzeko">

                                        <label class="label" for="nombre">
                                                <?= trans("Izena") ?>:
                                        </label>
                                        <input class="patzekoInputak" type="text" id="nombre_3" name="nombre" required>

                                        <label class="label" for="abizena1">
                                                <?= trans("abizena1") ?>:
                                        </label>
                                        <input class="patzekoInputak" type="text" id="abizena1_3" name="abizena1"
                                                required>

                                        <label class="label" for="abizena2">
                                                <?= trans("abizena2") ?>:
                                        </label>
                                        <input class="patzekoInputak" type="text" id="abizena2_3" name="abizena2"
                                                required>

                                        <label class="label" for="telefono">
                                                <?= trans("telefono") ?>:
                                        </label>
                                        <input class="patzekoInputak" type="number" id="telefono_3" name="telefono"
                                                required>

                                        <label class="label" for="banku_zenb">
                                                <?= trans("bankuZenb") ?>:
                                        </label>
                                        <input class="patzekoInputak" type="number" id="banku_zenb_3" name="banku_zenb"
                                                required>

                                        <label class="label" for="helbidea">
                                                <?= trans("helbidea") ?>:
                                        </label>
                                        <input class="patzekoInputak" type="text" id="helbidea_3" name="helbidea"
                                                required>

                                        <label class="label" for="dni">Dni:</label>
                                        <input class="patzekoInputak" type="text" id="dni_3" name="dni" required>

                                        <button type="submit" class="botonPagar_3">
                                                <?= trans("PagarCon") ?> Visa
                                        </button>

                                </div>


                        </div>





                </div>


        </div>

        