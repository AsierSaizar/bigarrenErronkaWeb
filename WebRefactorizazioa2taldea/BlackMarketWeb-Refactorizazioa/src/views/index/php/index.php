
<link rel="stylesheet" type="text/css" href="../css/index.css" media="screen" />
        
        <?php
        require_once("../../../required/header.php");
        ?>
        
        <!-- ZER EGITEN DUGU? (hemen HASTEN da) -->
        <div class="main-content">
            <h1 id="ongoEtorri"><?= trans("OngiEtorri") ?></h1>
            
            <div class="kokapena">
                <h2><?= trans("kokapena") ?>:</h2>
                <iframe  class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.0004935167062!2d114.21814714152501!3d22.315821092814197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3404014917c2eb25%3A0x3ec7edbd8edd2c3e!2sKwun%20Tong%20Garden%20Estate!5e0!3m2!1ses!2ses!4v1699258285417!5m2!1ses!2ses"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="etiketaGB">
                <div>
                    <h2><?= trans("GuriBuruz") ?>:</h2>
                    <img src="../../../../public/empresaargazkia.jpg">
                </div>

                <div class="GBtext">
                    <p><?= trans("GuriBuruztext") ?></p>
                </div>
            </div>
            <div class="Form">
                <h3><?= trans("form") ?></h3>
                <iframe width="640px" height="480px" src="https://forms.office.com/e/tAgjtbb0y8?embed=true" frameborder="0" marginwidth="0" marginheight="0" style="border: none; max-width:100%; max-height:100vh" allowfullscreen webkitallowfullscreen mozallowfullscreen msallowfullscreen> </iframe>
            </div>
            
        </div>
        <!-- ZER EGITEN DUGU? (hemen BUKATZEN da) -->

    </div>
</body>
<footer>
    <!-- SARE SOZIALAK? (hemen HASTEN da) -->
    <div class="creadores">
        <div>
            <h3><b><?= trans("sortzaileak") ?>:</b></h3>
            <p>Asier Saizar, Unai Caminos eta Beñat Iturrioz</p>
        </div>
        
        <div>
            <h3><?= trans("Kontaktoa") ?>:</h3>
            <p>688742857    <br>  Black Market@gmail.com</p>
        </div>

    </div>
    <div class="footer">
        <div><h2><?= trans("Kontakto eta sare sozialak") ?></h2></div>
        <nav id="sareSozialak">
            <a class="sareSozialakBotoia" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><i class="fa-brands fa-tiktok"></i>Tik tok</a>
            <a class="sareSozialakBotoia" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><i class="fa-brands fa-youtube"></i>Youtube</a>
            <a class="sareSozialakBotoia" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><i class="fa-brands fa-twitter"></i>Twitter</a>
            <a class="sareSozialakBotoia" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><i class="fa-brands fa-instagram"></i>Instagram</a>
        </nav>
    </div>
    <!-- SARE SOZIALAK? (hemen BUKATZEN da) -->
</footer>
</html>
