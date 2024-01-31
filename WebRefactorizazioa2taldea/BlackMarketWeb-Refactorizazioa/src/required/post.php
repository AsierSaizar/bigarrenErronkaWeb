<?php

session_start();

if (isset($_POST["action"])) {
    switch ($_POST["action"]) {
        case "setInSession": {
                $key = $_POST["key"]; // "saskikoGauzak" gordetzen du
                $value = $_POST["value"]; // "null" gordetzen du
                $id = $_POST["idPro"];

                
                if (isset($_SESSION[$key]) && array_key_exists($id, $_SESSION[$key])){
                    $kantitatea = $_SESSION[$key][$id]["zenb"];
                    $_SESSION[$key][$id] = ["zenb" => $kantitatea+1, "html" => $value];
                    
                }else{
                    $_SESSION[$key][$id] = ["zenb" => 1, "html" => $value];
                    echo "Gorde dira datuak";
                }
                
             
                break;
            }

        case "getInSession": {
                if (isset($_SESSION[$_POST["key"]])) {
                    echo json_encode($_SESSION[$_POST["key"]]);
                } else {
                    echo "Ez daude productuak saskian";
                }

                break;
            }
        case "denaBorratu": {  
            unset($_SESSION["saskikoGauzak"]);
            echo $_SESSION[$_POST["key"]];
            break;
        }
    }
} else {
    echo "Error: Invalid action.";
}