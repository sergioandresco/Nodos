<?php 
header('Content-Type: application/json');
if(isset($_GET["JSONData"])){
    $hola = "Dato almacenado en Mirage";
    $array = json_decode($_GET["JSONData"]);
    $Numero = $array -> Numero;
    $archivo = fopen($_SERVER["DOCUMENT_ROOT"] . "/Nodo2/txt/NUMERO.txt","wb");
    fputs($archivo,$Numero);
    fclose($archivo);
    echo $hola;   
}

if(isset($_POST["Numero"])){
    $Peticion = $_POST["Numero"];
    $txtAbrir= fopen($_SERVER["DOCUMENT_ROOT"] . "/Nodo2/txt/NUMERO.txt", 'r');
    $txtLeer = fgets($txtAbrir);
    fclose($txtAbrir);

    echo $txtLeer;
}

?>