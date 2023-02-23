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
}
?>