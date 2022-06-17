<?php
    $Numero = $_POST["numero"]; 
    
    $arregloDatos = array();
    $arregloDatos["Numero"] = $Numero;
    
    $JSONData = json_encode($arregloDatos);

    if(isset($_POST["gibraltar"])){

    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => "http://142.44.246.92/Nodo1/nodo1.php?JSONData=".$JSONData,
        CURLOPT_POST => 1,
    ]);
    $resp = curl_exec($curl); 
    echo $resp;
    curl_close($curl);

    }else{
        if(isset($_POST["mirage"])){
            $curl = curl_init();
            curl_setopt_array($curl, [
                CURLOPT_RETURNTRANSFER => 1,
                CURLOPT_URL => "http://142.44.246.23/Nodo2/nodo2.php?JSONData=".$JSONData,
                CURLOPT_POST => 1,
            ]);
            $resp = curl_exec($curl); 
            echo $resp;
            curl_close($curl);  
        }else{

        if(isset($_POST["wraith"])){
            $curl = curl_init();
            curl_setopt_array($curl, [
                CURLOPT_RETURNTRANSFER => 1,
                CURLOPT_URL => "http://158.69.63.154/Nodo3/nodo3.php?JSONData=".$JSONData,
                CURLOPT_POST => 1,
            ]);
            $resp = curl_exec($curl); 
            echo $resp;
            curl_close($curl);  
        }else{
            if(isset($_POST["bloodhound"])){
                $curl = curl_init();
            curl_setopt_array($curl, [
                CURLOPT_RETURNTRANSFER => 1,
                CURLOPT_URL => "http://142.44.246.12/Nodo4/nodo4.php?JSONData=".$JSONData,
                CURLOPT_POST => 1,
            ]);
            $resp = curl_exec($curl); 
            echo $resp;
            curl_close($curl); 
            }else{
                echo "No llego nada";
            }
        }
        }
    }

    

?>