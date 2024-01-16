<form method="post">
    <select name="selectedLang">
        <!-- PHPko logika honekin formularioan zein hizkuntza agertzen den aukeratuta erabakiko dugu -->
        <option value="eus" <?php
                            //formulariotik aukeratutako hizkuntza euskara bada => selected
                           
                            //formulariotik ez bada hizkuntzarik aukeratu eta sesioan euskara badago => selected
                            
                            ?>> EUS</option>
        <option value="es" <?php
                            //formulariotik aukeratutako hizkuntza gaztelera bada => selected
                            
                            //formulariotik ez bada hizkuntzarik aukeratu eta sesioan gaztelera badago => selected
                            
                            ?>> ES</option>
        <option value="en" <?php
                            //formulariotik aukeratutako hizkuntza gaztelera bada => selected
                            
                            //formulariotik ez bada hizkuntzarik aukeratu eta sesioan gaztelera badago => selected
                            
                            ?>> EN</option>
    </select>
    <button><?= trans("aldatu") ?></button>
</form>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/3.0.1/js.cookie.min.js"></script>
 
<script>
$(document).ready(function() {
    // Si tienes la selección guardada en las cookies, puedes establecerla al cargar la página
    var seleccionGuardada = Cookies.get('_LANGUAGE');
    if (seleccionGuardada) {
        $('select[name="selectedLang"]').val(seleccionGuardada);
    }
 
    // Hizkuntza aldaketaren manejoa
    $('select[name="selectedLang"]').on('change', function() {
        // Gorde aukera
        var selectedLang = $(this).val();
        Cookies.set('_LANGUAGE', selectedLang, { expires: 7 }); 
    });
 
    
    $('form button').on('click', function(e) {
        //Sumbit egiterakoan hurrengoa gertatuko da
        if ($(this).attr('type') === 'submit') {
            // Select balorea lortu
            var selectedLang = $('select[name="selectedLang"]').val();
           
            // Balorea establezitu formularioa bidali baino lehen
            Cookies.set('_LANGUAGE', selectedLang, { expires: 7 });
        }
    });
});
</script>

