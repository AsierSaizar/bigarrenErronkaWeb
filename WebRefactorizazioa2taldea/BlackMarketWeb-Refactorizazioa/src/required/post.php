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

            $nombre = $_POST["nombre"];
            $abizena1 = $_POST["abizena1"];
            $abizena2 = $_POST["abizena2"];
            $telefono = $_POST["telefono"];
            $helbidea = $_POST["helbidea"];
            $dni = $_POST["dni"];

           
            require_once("functions.php"); 
            
            $conn = connection();
            $sql = "INSERT INTO erronka.bezeroak (izena, abizena1, abizena2, nan, helbidea, telefonoa) VALUES (?, ?, ?, ?, ?, ?);";

            $stmt1 = $conn->prepare($sql);
            $stmt1->bind_param("ssssss", $nombre, $abizena1, $abizena2, $dni, $helbidea, $telefono);

            $sql = "INSERT INTO erronka.saskia (nan_bezeroa, segimentua) VALUES (?, 'PROZESUAN');";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $dni);

    


            if ($stmt->execute() && $stmt1->execute()) {
                echo "Datuak zuzen gorde dira.<br>";
                echo "Erosketa egin da!<br>";
            } else {
                echo "Errorea datuak datu-basean sartzerakoan: " . $stmt->error;
            }
            

            $stmt->close();
            $stmt1->close();
            $conn->close();
            break;
        }
        case "erosi2Bizum": {

            $nombre = $_POST["nombre"];
            $abizena1 = $_POST["abizena1"];
            $abizena2 = $_POST["abizena2"];
            $telefono = $_POST["telefono"];
            $helbidea = $_POST["helbidea"];
            $dni = $_POST["dni"];

           
            require_once("functions.php"); 
            
            $conn = connection();
            $sql = "INSERT INTO erronka.bezeroak (izena, abizena1, abizena2, nan, helbidea, telefonoa) VALUES (?, ?, ?, ?, ?, ?);";

            $stmt1 = $conn->prepare($sql);
            $stmt1->bind_param("ssssss", $nombre, $abizena1, $abizena2, $dni, $helbidea, $telefono);
            

            $sql = "INSERT INTO erronka.saskia (nan_bezeroa, segimentua) VALUES (?, 'PROZESUAN');";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $dni);


            if ($stmt->execute() && $stmt1->execute()) {
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

            $stmt1 = $conn->prepare($sql);
            $stmt1->bind_param("sssssss", $nombre, $abizena1, $abizena2, $dni, $banku_zenb, $helbidea, $telefono);



            $sql = "INSERT INTO erronka.saskia (nan_bezeroa, segimentua) VALUES (?, 'PROZESUAN');";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $dni);


            if ($stmt->execute() && $stmt1->execute()) {
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

