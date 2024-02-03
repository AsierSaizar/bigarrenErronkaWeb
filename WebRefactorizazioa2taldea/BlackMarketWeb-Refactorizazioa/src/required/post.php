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

            break;
        }
        case "proBorratu": {
            $id = $_POST["id"]; 
            unset($_SESSION["saskikoGauzak"][$id]);
            $a="a";
            break;
        }




        case "erosi1Paypal": {
            // Aquí puedes acceder a los datos enviados desde el formulario de PayPal
            $nombre = $_POST["nombre"];
            $abizena1 = $_POST["abizena1"];
            $abizena2 = $_POST["abizena2"];
            $telefono = $_POST["telefono"];
            $helbidea = $_POST["helbidea"];
            $dni = $_POST["dni"];

           
            require_once("functions.php"); 
            
            $conn = connection();
            $sql = "INSERT INTO erronka.bezeroak (izena, abizena1, abizena2, nan, helbidea, telefonoa) VALUES (?, ?, ?, ?, ?, ?);";

            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssssss", $nombre, $abizena1, $abizena2, $dni, $helbidea, $telefono);
            if ($stmt->execute()) {
                echo "Datuak zuzen gorde dira.";
                echo "Erosketa egin da!";
            } else {
                echo "Errorea datuak datu-basean sartzerakoan: " . $stmt->error;
            }
            

            $stmt->close();
            $conn->close();
            break;
        }
        case "erosi2Bizum": {
            // Aquí puedes acceder a los datos enviados desde el formulario de Bizum
            $nombre = $_POST["nombre"];
            $abizena1 = $_POST["abizena1"];
            $abizena2 = $_POST["abizena2"];
            $telefono = $_POST["telefono"];
            $helbidea = $_POST["helbidea"];
            $dni = $_POST["dni"];

           
            require_once("functions.php"); 
            
            $conn = connection();
            $sql = "INSERT INTO erronka.bezeroak (izena, abizena1, abizena2, nan, helbidea, telefonoa) VALUES (?, ?, ?, ?, ?, ?);";

            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssssss", $nombre, $abizena1, $abizena2, $dni, $helbidea, $telefono);
            if ($stmt->execute()) {
                echo "Datuak zuzen gorde dira.";
                echo "Erosketa egin da!";
            } else {
                echo "Errorea datuak datu-basean sartzerakoan: " . $stmt->error;
            }
            

            $stmt->close();
            $conn->close();
            break;
        }
        case "erosi3Visa": {
            // Aquí puedes acceder a los datos enviados desde el formulario de Visa
            $nombre = $_POST["nombre"];
            $abizena1 = $_POST["abizena1"];
            $abizena2 = $_POST["abizena2"];
            $telefono = $_POST["telefono"];
            $banku_zenb = $_POST["banku_zenb"];
            $helbidea = $_POST["helbidea"];
            $dni = $_POST["dni"];

            require_once("functions.php"); 
            
            $conn = connection();
            $sql = "INSERT INTO erronka.bezeroak (izena, abizena1, abizena2, nan, banku_zenbakia, helbidea, telefonoa) VALUES (?, ?, ?, ?, ?, ?, ?);";

            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sssssss", $nombre, $abizena1, $abizena2, $dni, $banku_zenb, $helbidea, $telefono);
            if ($stmt->execute()) {
                echo "Datuak zuzen gorde dira.";
                echo "Erosketa egin da!";
            } else {
                echo "Errorea datuak datu-basean sartzerakoan: " . $stmt->error;
            }
            

            $stmt->close();
            $conn->close();
            break;
        }
        

    }
} else {
    echo "Error: Invalid action.";
}