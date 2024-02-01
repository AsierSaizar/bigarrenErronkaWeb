<link rel="stylesheet" type="text/css" href="../css/zesta.css" media="screen" />
<?php
require_once("../../../required/header.php");
?>
<div class="background">
        <br>
        <div class="saskiaContainer">
                <div id="saskikoHeader">
                        <h1 id="saskiaTitle"><?= trans("saskia") ?></h1>
                        <button id="borratzekoBotoia"><i class="fa-solid fa-trash"></i></button>
                </div>

                <hr size="2px" color="black">

                <div class="containerZesta">
                        <div id="sasProGord">
                                
                                
                        </div>
                        <div class="prezioakSaskia">
                        <div class="gastosEnvio"><b>
                                <p><?= trans("Bidalketako gastuak") ?>:5.99€ <br> <?= trans("⚠100€ baino erosketa altuagoetan gastu gabe!⚠") ?>
                                </p></b>
                        </div>
                        <p><h2><?= trans("Guztira") ?>:</h2></p><hr>
                        <div id="BidalketakoGastuakDiv">
                                <div><?= trans("Bidalketako gastuak") ?>:</div>
                                
                                <div id="BidalketakoGastuakZenbakia">5.99€</div>
                        </div>
                        <hr>
                        <div id="prezioTotalaDiv">
                                <div><?= trans("Prezio totala") ?>:</div>
                                
                                <div id="prezioTotalaZenbakia">0€</div>
                        </div>
                        <hr><hr>
                        <div id="prezioTotalaDivDefinitiboa">
                                <div><?= trans("Prezio totala") ?> (<?= trans("DEFINITIBOA") ?>):</div>
                                
                                <div id="prezioTotalaZenbakiaDefini">0€</div>
                        </div>
                        <hr>
                        <div id="erostekoBotoiaDiv">
                                <Button id="erostekoBotoia"><?= trans("ErosketaBurutu") ?></Button>
                        </div>

                                

                        </div>
                </div>




        </div>


</div>
