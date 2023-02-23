<?php

class VuelosModel{

    public function getAllVuelos() {
        $res = json_decode(file_get_contents("http://localhost/ApiVuelos/?vuelos"), true);
        return $res;
    }

}


?>