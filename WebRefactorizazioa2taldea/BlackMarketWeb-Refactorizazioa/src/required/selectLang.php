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
    </select>
    <button>Aldatu</button>
</form>