<?php

class PasajesModel {

    public function getPasajeros() {
        $res = json_decode(file_get_contents("http://localhost/ApiVuelos/?pasajeros"), true);
        return $res;
    }

    public function getVuelos() {
        $res = json_decode(file_get_contents("http://localhost/ApiVuelos?vuelos"), true);
        return $res;
    }

    public function getClases() {
        $res = json_decode(file_get_contents("http://localhost/ApiVuelos?clases"), true);
        return $res;  
    }

    public function postPasaje($idpasaje, $pasajerocod, $identificador, $numasiento, $clase, $pvp) {

        $envio = json_encode(array("idpasaje" => $idpasaje, "pasajerocod" => $pasajerocod, "identificador" => $identificador, "numasiento" => $numasiento,
        "clase" => $clase, "pvp" => $pvp));

        $urlservicio = "http://localhost/ApiVuelos/";
        $conexion = curl_init();
        curl_setopt($conexion, CURLOPT_URL, $urlservicio);
        curl_setopt($conexion, CURLOPT_HTTPHEADER, array('Content-type: application/json', 'Content-Length: ' . mb_strlen($envio)));
        curl_setopt($conexion, CURLOPT_POST, TRUE);
        curl_setopt($conexion, CURLOPT_POSTFIELDS, $envio);
        curl_setopt($conexion, CURLOPT_RETURNTRANSFER, false); 
         
        $resp = json_decode(curl_exec($conexion), true);
        substr($resp, 0, -1);
        return $resp;
    }
}
?>