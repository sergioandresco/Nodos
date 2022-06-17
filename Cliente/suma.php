<?php

$ch1 = curl_init();
$ch2 = curl_init();

// Establece la URL y otras opciones apropiadas 
curl_setopt($ch1, CURLOPT_URL,"http://142.44.246.92/Nodo1/nodo1.php");
// indicamos el tipo de petición: POST
curl_setopt($ch1, CURLOPT_POST, TRUE);
// definimos cada uno de los parámetros
curl_setopt($ch1, CURLOPT_POSTFIELDS, "Numero");
curl_setopt($ch2, CURLOPT_URL,"http://142.44.246.23/Nodo2/nodo2.php");
// indicamos el tipo de petición: POST
curl_setopt($ch2, CURLOPT_POST, TRUE);
// definimos cada uno de los parámetros
curl_setopt($ch2, CURLOPT_POSTFIELDS, "Numero");

// Crea el multi recurso cURL
$mh = curl_multi_init();

// Añade los dos recursos
curl_multi_add_handle($mh,$ch1);
curl_multi_add_handle($mh,$ch2);

$active=null;
// Ejecuta los recursos
do {
    $mrc = curl_multi_exec($mh, $active);
} while ($mrc == CURLM_CALL_MULTI_PERFORM);

while ($active && $mrc == CURLM_OK) {
    if (curl_multi_select($mh) != -1) {
        do {
            $mrc = curl_multi_exec($mh, $active);
        } while ($mrc == CURLM_CALL_MULTI_PERFORM);
    }
}

// Cierra los recursos
curl_multi_remove_handle($mh, $ch1);
curl_multi_remove_handle($mh, $ch2);
curl_multi_close($mh);
print_r($mrc);



?>